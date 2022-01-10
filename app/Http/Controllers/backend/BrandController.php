<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Brand;
use Validator;
use Auth;
use DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllData= Brand::all();
        return view('backend.Brand.index',compact('AllData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.Brand.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'image'=> 'required',
        ]);
        if ($request->hasFile('image')){
            //$phpo=$request->file('photo');
            $input['image']=\MyHelper::photoUpload($request->file('image'),'images/Brand/',300,135);
        }
        try{
            Brand::create($input);
            $bug=0;
        }catch(Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->route('brand.index')->with('success','Successfully Inserted');
        }else{
            return redirect()->back()->with('error',$bug);
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
        $data = Brand::find($id);
        return view('backend.Brand.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'image' => 'required '
        ]);
        
        $Data=Brand::findOrFail($id);

        if ($request->hasFile('image')){
            $input['image']=\MyHelper::photoUpload($request->file('image'),'images/Brand/',300,135);
            if (file_exists($Data->image)){
                unlink($Data->image);
            }
        }
        try{
            $Data->update($input);
            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->route('brand.index')->with('success','Successfully Update');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input=Brand::findOrFail($id);

        DB::beginTransaction();
        try {
            if (file_exists($input->image)){
                unlink($input->image);
            }

            $input->delete();
            $bug = 0;
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if ($bug == 0) {
            return redirect()->back()->with('success', 'Delete Successfully.');
        }elseif ($bug==547){
            return redirect()->back()->with('error', 'Sorry this users can not be delete due to used another module');
        }
        else {
            return redirect()->back()->with('error', 'Something Error Found! ' . $bug1);
        }
    }
}
