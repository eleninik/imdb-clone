<?php

namespace App\Providers;

use AlgoliaSearch\Client;
use App\Contracts\Search;
use App\Services\AlgoliaSearch;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'movie' => Movie::class,
            'series' => Series::class,
            'seaseon' => Season::class,
            'episode'  => Episode::class,
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Search::class, function () {
            $config = config('services.algolia');
            return new AlgoliaSearch(
                new Client($config['app_id'], $config['api_key'])
            );
        });
    }
}
