<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;
use App\Mainslides;

use File;
use Input;


class MainslideController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	
		$mainslides = Mainslides::All();
    
		return view("dashboard.mainslide.mainslidespannel")
		->with("mainslides", $mainslides);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		


		return view("dashboard.category.categorycreate");


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		// var_dump($request->input("maincategory"));
		// die();

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	
		
		$mainslide = Mainslides::find($id);

		return view('dashboard.mainslide.mainslideedit')
					->with('mainslide',$mainslide);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		//
		$mainslide = Mainslides::find($id);
		
			

		$imagePath = public_path() . '/images/mainslides/';
	
		$directory = $id;


		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
	
		$photourl1 = $mainslide->photourl1;
		$photourl2 = $mainslide->photourl2;

	
		if(Input::file('photourl1')!="")
		{
			
			 if(Input::file('photourl1')->isValid())
			 {
				if($photourl1!="")
				{
					if(file_exists(public_path() .$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}
					


				$name =  time() . '-main' . '.' . $input['photourl1']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/mainslides/" . $directory . '/photos/' .  $name;
			 }

		}

	
	
		$mainslide->title = $request->input("title");
		$mainslide->stitle = $request->input("stitle");
		$mainslide->mtitle = $request->input("mtitle");
		$mainslide->mstitle = $request->input("mstitle");

		$mainslide->description = $request->input("description");
		$mainslide->mdescription = $request->input("mdescription");


		$mainslide->photourl1 = $photourl1;

		$mainslide->save();
		
		return redirect()->route("mainslides.index");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//

		Category::destroy($id);

		return redirect()->route("categorys.index");
	}



}
