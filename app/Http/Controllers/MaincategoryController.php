<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Maincategory;
use DB;
use Input;


use File;

class MaincategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		 $maincategorys = Maincategory::All();

    	// $user = User::find($request->user()->id);
         return view("dashboard.maincategory.maincategoryspannel")
            ->with("maincategorys", $maincategorys);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		
		return view("dashboard.maincategory.create");

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		

		$this->validate($request,[
			'name' => 'required|unique:maincategory|max:255',
			 'mname' => 'required|unique:maincategory|max:255',
			]);


		$maincategory = new Maincategory();

		
		$maincategory->name = $request->input("name");
		$maincategory->mname = $request->input("mname");
		
		$maincategory->save();
		return redirect()->route("maincategorys.index");
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
		$maincategory = Maincategory::find($id);

		return view('dashboard.maincategory.edit')->with('maincategory',$maincategory);
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
		$maincategory = Maincategory::find($id);
		if($maincategory->name!=$request->input("name"))
		{

			$this->validate($request,[
			'name' => 'required|unique:maincategory|max:255',
			'mname' => 'required|max:255',
			]);
		}
		else
		{
			$this->validate($request,[
			'name' => 'required|max:255',
			'mname' => 'required|max:255',
			]);
		}
		
  	
		
		$maincategory->name = $request->input("name");
		$maincategory->mname = $request->input("mname");
		
		$maincategory->save();

		return redirect()->route("maincategorys.index");
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

		Maincategory::destroy($id);

		return redirect()->route("maincategorys.index");
	}

	public function rrmdir($dir) {
	  if (is_dir($dir)) {
	    $objects = scandir($dir);
	    foreach ($objects as $object) {
	      if ($object != "." && $object != "..") {
	        if (filetype($dir."/".$object) == "dir") 
	           rrmdir($dir."/".$object); 
	        else unlink   ($dir."/".$object);
	      }
	    }
	    reset($objects);
	    rmdir($dir);
	  }
	 }

}
