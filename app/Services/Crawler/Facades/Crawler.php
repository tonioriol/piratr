<?php namespace App\Services\Crawler\Facades;

use Illuminate\Support\Facades\Facade;

class Crawler extends Facade {

	protected static function getFacadeAccessor() {

		return 'crawler';
	}
}