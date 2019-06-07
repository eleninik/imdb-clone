# angels-06-imdb-clone

This is an assignment for Chas Academy with with the goal of building a movie database like IMDB.

## Environments

Dev: [dev.amdb](http://dev.amdb.lndgrn.xyz)
Staging: [staging.amdb](http://staging.amdb.lndgrn.xyz)
Production: [production.amdb](http://prod.amdb.lndgrn.xyz)

## Routes

Method | URI | Action | Resource
-------|-----|--------|----
GET | /api/people/actors | ActorsController@index | List all actors
GET | /api/movies | MoviesController@index | List all movies

## Setup local dev environment

Dependencies:

 - [Virtualbox](https://www.virtualbox.org/wiki/Downloads)
 - [Vagrant](https://www.vagrantup.com/downloads.html)
 - [Laravel Homestead](https://laravel.com/docs/5.5/homestead)

In your `~/Homestead` folder edit `Homestead.yaml` config file

Under folders add:

Example config mac:

```yaml
- map: ~/code/06-angels-imdb-clone
   to: /home/vagrant/code
```

Example config windows:
```yaml
- map: \Users\User\Dev
   to: /home/vagrant/code
```

Under sites add
```yaml
- map: amdb.dev
   to: /home/vagrant/code/amdb/public
```

Under databases add

      - amdb

Then in your project folder, install all dependencies with

      composer install

And reload/provision vagrant in `~/Homestead`

      vagrant provision

And then visit URL: [amdb.dev](amdb.dev)!
