	<?php

		/*
		|--------------------------------------------------------------------------
		| Application Routes
		|--------------------------------------------------------------------------
		|
		| Here is where you can register all of the routes for an application.
		| It's a breeze. Simply tell Laravel the URIs it should respond to
		| and give it the controller to call when that URI is requested.
		|
		*/

		use App\User;
		use App\Category;
		

		Route::get('/', 'WelcomeController@index');
		Route::get('home', 'HomeController@index');
		
		Route::get('mn', 'LanguageController@changemn');
		Route::get('en', 'LanguageController@changeen');

		

		Route::get('homemyanmar', 'LanguageController@homemyanmar');


			Route::resource('contactus','ContactusController');
			
		Route::get('aboutus', function() {

			
			
			return view('si.pages.aboutus');
			
			
			
		});

		Route::get('enterprise', function() {

			
			
			return view('si.pages.enterprise');
			
			
			
		});

		Route::get('broadcasting', function() {

			
			
			return view('si.pages.broadcasting');
			
			
			
		});

		Route::get('digital', function() {

			
			
			return view('si.pages.digital');
			
			
			
		});

		Route::get('aboutusmyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.aboutmyanmar')
			->with('categorys', $categorys);
			
			
		});


		Route::get('systemi', function() {

			
			
			return view('si.pages.home');
			
			
		});
		



		Route::get('authorprofile/{userid}', function($userid) {

			// $categorys = Category::All();

			$user = User::find($userid);
			
			return view('pages.authorprofile')
			->with('user', $user);
			
			
		});

	
	
	
	Route::resource('profiles','ProfilesController');

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
		]);





	Route::group(['middleware' => 'auth'],function()
	{
		
		Route::get('yourtestimonials', [
		'uses' => 'TestimonialsController@createtestimonial'
		]);
			
	
		Route::group(['middleware' => 'rolewaredashboard'],function()
		{
			Route::resource('dashboard','DashboardController');

		});	
	

		Route::group(['middleware' => 'roleware3_4'],function()
		{
			
		
			Route::group(['middleware' => 'roleware2'],function()
			{
				

				
				Route::get('dashboarduserprofile', [
					'uses' => 'ProfilesController@dashboarduserindex'
					]);

				

				Route::group(['middleware' => 'roleware'],function()
				{
					
					Route::resource('testimonials','TestimonialsController');
				
					Route::resource('partners','PartnersController');
						Route::resource('priorities','PrioritiesController');
				
					Route::resource('ourgallerys','OurgallerysController');
				
					Route::resource('categorys','CategoryController');
					Route::resource('userspannel','UserspannelController');
					
				
				});

			});
			
		});



		
	});

	