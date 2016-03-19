<?php namespace App\Providers;

use App\Services\Crawler\Crawler;
use Illuminate\Support\ServiceProvider;

class CrawlerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->singleton('http', Crawler::class);
	}
}
