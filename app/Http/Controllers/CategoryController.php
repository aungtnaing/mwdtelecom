<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;
use App\Category;

use File;
use Input;


class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	
		$categorys = Category::All();
    
		return view("dashboard.category.categoryspannel")
		->with("categorys", $categorys);
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

		$this->validate($request,[
			'name' => 'required|max:255',
			'mname' => 'required|max:255',
			]);


		$category = new Category();

		$imagePath = public_path() . '/images/categorys/';
		$lastid = DB::table('category')->select('id')->orderBy('id', 'DESC')->first();
		if($lastid!=null)
		{
			$lastid = $lastid->id + 1;
		}
		else
		{
			$lastid = 1;	
		}
		$directory = $lastid;
		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		
		$photourl1 = "";
		
		
		if(Input::file('photourl1')!="")
		{
			if(Input::file('photourl1')->isValid())
			{
				$name =  time()  . '-photo' . '.' . $input['photourl1']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/categorys/" . $directory . '/photos/' .  $name;
			
			}

		}


		$category->name = $request->input("name");
		$category->mname = $request->input("mname");
		$category->description = $request->input("description");
		$category->photourl1 = $photourl1;
		$category->save();
		return redirect()->route("categorys.index");
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
	
		
		$category = Category::find($id);

		return view('dashboard.category.categoryedit')
					->with('category',$category);
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
		$category = Category::find($id);
		if($category->name!=$request->input("name"))
		{
			$this->validate($request,[
				'name' => 'required|unique:category|max:255',
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
		

		$imagePath = public_path() . '/images/categorys/';
	
		$directory = $id;


		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
	
		$photourl1 = $category->photourl1;
		// ini_set('post_max_size', '64M');
		// ini_set('upload_max_filesize', '64M');


		// var_dump(Input::file('photourl1'));
		// die();
		if(Input::file('photourl1')!="")
		{
			// var_dump('go');
			// die();
			
			

			 if(Input::file('photourl1')->isValid())
			 {
				if($photourl1!="")
				{
					if(file_exists(public_path() .$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}
					


				$name =  time() . '-photo' . '.' . $input['photourl1']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/categorys/" . $directory . '/photos/' .  $name;
			 }

		}
	
		$category->name = $request->input("name");
		$category->mname = $request->input("mname");
		$category->description = $request->input("description");
		$category->photourl1 = $photourl1;
		$category->save();
		
		return redirect()->route("categorys.index");
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
