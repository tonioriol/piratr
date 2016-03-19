<?php namespace App\Providers;

use App\Services\Http\Http;
use Illuminate\Support\ServiceProvider;

class HttpServiceProvider extends ServiceProvider {

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
		$this->app->singleton('http', Http::class);
	}
}
