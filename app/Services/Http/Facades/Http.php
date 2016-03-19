<?php namespace App\Services\Http\Facades;

use Illuminate\Support\Facades\Facade;

class Http extends Facade {

	protected static function getFacadeAccessor() {

		return 'http';
	}
}