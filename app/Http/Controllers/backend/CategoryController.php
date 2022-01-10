<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Category;
use App\Models\SubCategory;
use Auth;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllData= Category::all();
        return view('backend.Category.index',compact('AllData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.Category.create');
    }


     public function categorySubDropdown(Request $request)
    {
        $SubCategoryData=SubCategory::where('category_id',$request->categoryId)->get();
        return response()->json($SubCategoryData);
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

      if(Category::create($data)){
            Toastr::success('Category Created Successfully!.', '', ["progressbar" => true]);
            return redirect()->route('category.index');
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
        $data = Category::find($id);
        return view('backend.Category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
       $data=$request->all();
      if($category->update($data)){
            Toastr::success('Category Update Successfully!.', '', ["progressbar" => true]);
            return redirect()->route('category.index');
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
    public function destroy(Category $category)
    {
        $category->delete();
        $category->subCategory()->delete();
        Toastr::success('Category Deleted Successfully!.', '', ["progressbar" => true]);
        return redirect()->back();
    }
}
