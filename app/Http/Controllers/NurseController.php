<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\nurse;
use DB;


class NurseController extends Controller
{  

    public function index()
    {
         $nInfo=nurse::all();
        return view('/index',compact('nInfo'));
    }
	public function NureseAdd()
	{
		return view('/admin/nurses/nurse_add');
	}
    public function NureseInfo()
    {
    	$nInfo=nurse::all();
    	return view('/admin/nurses/view_nurses',compact('nInfo'));
    }


      public function create()
    {
        $images = nurse::all();
      return view('/admin/nurses/nurse_add')->with('images', $images);
    }
    public function store(Request $request)
    {

      
        $addinfo = new nurse;
        $addinfo->name = $request->name;
     if($request->hasFile('photo')){
        $addinfo->photo = $request->photo->store('public/images');
    	}
        $addinfo->city = $request->city;    
        $addinfo->area = $request->area;
    	 	$addinfo->number = $request->number;
    	 	$addinfo->skill = $request->skill;
        $addinfo->price = $request->price;
    	 	$addinfo->description = $request->description;
        $addinfo->save();
        return redirect()->route('create');
    }

    public function NureseList()
    {
        $nInfo=nurse::all();
        return view('/admin/nurses/list_nurses',compact('nInfo'));
    }
    public function nursefontList()
    {
        $nInfo=nurse::all();
        return view('/frontLayout/nurses_list',compact('nInfo'));
    }
    public function search(Request $request)
    {
      
       $search=$request->get('search');
       $search1=$request->get('search1');
       $nInfo=DB::table('nurses')
       ->where('city','like','%'.$search.'%' )
       ->where('area','like','%'.$search1.'%' )
       ->paginate(5);
            return view('/frontLayout/search',compact('nInfo'));
   
    }
}
