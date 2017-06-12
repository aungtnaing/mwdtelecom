<?php namespace App\Http\Controllers;


use App\Category;

use App\Testimonials;

use App\Ourgallerys;
use App\Partners;


use View;
use Config;

use App\Priorities;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	

		


		$categorys = Category::All();

	
$testimonials = Testimonials::where('active',1)
						->orderBy('id','DESC')
						->take(3)
						->get();
		$priorities = Priorities::All();
		
		$ourgallerys = 	Ourgallerys::where('active',1)
						->orderBy('id','DESC')
						->take(10)
						->get();	

	
		
			$partners = Partners::where('active',1)
						->orderBy('id','DESC')
						->take(10)
						->get();				
		return view('pages.home')
				->with('categorys', $categorys)
				->with('priorities', $priorities)
				->with('testimonials', $testimonials)
				->with('ourgallerys', $ourgallerys)
				->with('partners', $partners);		
	}

	public function myanmarindex()
	{

		
		
		$categorys = Category::All();

	
$testimonials = Testimonials::where('active',1)
						->orderBy('id','DESC')
						->take(3)
						->get();

		
		$ourgallerys = 	Ourgallerys::where('active',1)
						->orderBy('id','DESC')
						->take(10)
						->get();	

			$priorities = Priorities::All();
		
			$partners = Partners::where('active',1)
						->orderBy('id','DESC')
						->take(10)
						->get();				
		return view('pages.homemyanmar')
				->with('categorys', $categorys)
				->with('testimonials', $testimonials)
				->with('priorities', $priorities)
				->with('ourgallerys', $ourgallerys)
				->with('partners', $partners);		
		
		
		
	}

	

}


