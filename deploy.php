<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'amdb');

// Project repository
set('repository', 'git@github.com:chas-academy/angels-06-imdb-clone.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts
host('dev.amdb.lndgrn.xyz')
    ->set('deploy_path', '/var/www/amdb/dev.amdb.lndgrn.xyz')
    ->user('deployer')
    ->identityFile('~/.ssh/do_dep')
    ->stage('dev')
    ->set('branch', 'dev');

host('staging.amdb.lndgrn.xyz')
    ->set('deploy_path', '/var/www/amdb/staging.amdb.lndgrn.xyz')
    ->user('deployer')
    ->identityFile('~/.ssh/do_dep')
    ->stage('staging')
    ->set('branch', 'staging');

host('prod.amdb.lndgrn.xyz')
    ->set('deploy_path', '/var/www/amdb/prod.amdb.lndgrn.xyz')
    ->user('deployer')
    ->identityFile('~/.ssh/do_dep')
    ->stage('production')
    ->set('branch', 'master');

// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

task('artisan:migrate:fresh', function () {
    run('{{bin/php}} {{release_path}}/artisan migrate:fresh --seed');
  });

task('artisan:seed:index', function () {
run('{{bin/php}} {{release_path}}/artisan seed:index');
});

desc('Dump autoload before seed');
task('dump-autoload', function () {
    $output = run('cd {{release_path}} && composer install');
    writeln('<info>' . $output . '</info>');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
before('deploy:symlink', 'artisan:migrate:fresh');
after('artisan:migrate:fresh', 'dump-autoload');
after('dump-autoload', 'artisan:seed:index');

desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    run('sudo service php7.1-fpm reload');
});
after('deploy:symlink', 'php-fpm:restart');
