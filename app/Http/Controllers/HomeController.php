<?php namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


use App\Category;

use App\Testimonials;

use App\Ourgallerys;

use App\Partners;

use View;
use Config;		
use App\Priorities;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
		
		$this->middleware('auth');
		// $this->middleware('guest');
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
	
		$categorys = Category::All();

	$priorities = Priorities::All();
$testimonials = Testimonials::where('active',1)
						->orderBy('id','DESC')
						->take(3)
						->get();

		
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
	
	
	
}
