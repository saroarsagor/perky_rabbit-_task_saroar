<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\SubCategory;
use App\Models\Category;
use Auth;
use DB;

class SubCategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllData= SubCategory::all();
        return view('backend.SubCategory.index',compact('AllData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $Categorys= Category::all();
         return view('backend.SubCategory.create',compact('Categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=$request->all();

      if(SubCategory::create($data)){
            Toastr::success('Sub Category Created Successfully!.', '', ["progressbar" => true]);
            return redirect()->route('sub-category.index');
        }else{
            Toastr::error('Something is error there...!', '', ["progressbar" => true]);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Categorys= Category::all();
        $data = SubCategory::find($id);
        return view('backend.SubCategory.edit', compact('data','Categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
       $data=$request->all();
      if($subCategory->update($data)){
            Toastr::success('Sub Category Update Successfully!.', '', ["progressbar" => true]);
            return redirect()->route('sub-category.index');
        }else{
            Toastr::error('Something is error there...!', '', ["progressbar" => true]);
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        Toastr::success('Category Deleted Successfully!.', '', ["progressbar" => true]);
        return redirect()->back();
    }
}
