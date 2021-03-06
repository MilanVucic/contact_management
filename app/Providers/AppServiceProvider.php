<?php namespace App\Providers;

use App\Model\Contact;
use App\Model\FollowUp;
use App\Repository\ContactRepositoryInterface;
use App\Repository\EloquentContactRepository;
use App\Repository\EloquentFollowupRepository;
use App\Repository\FollowupRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);

		$this->app->bind(ContactRepositoryInterface::class, function (Application $app) {
			return new EloquentContactRepository(new Contact());
		});
		$this->app->bind(FollowupRepositoryInterface::class, function (Application $app) {
			return new EloquentFollowupRepository(new FollowUp());
		});
	}

}
