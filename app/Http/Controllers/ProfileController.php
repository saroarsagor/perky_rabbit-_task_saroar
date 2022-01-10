<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Validator;
use Auth;
use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User_id = Auth::user()->id;
        $data=User::where('id', $User_id)->first();
        return view('backend.profile.index', compact('data'));
    }

    /**
     * Show the form for chnage password a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chnagePssword(Request $request)
    {
         $request->validate([
            'password' => 'required', 'string', 'password_confirmation',
        ]);
        $User_id = Auth::user()->id;
        if($request->password == $request->password_confirmation){
            $user = User::find($User_id);
            $user->password = Hash::make($request->password);
            if($user->save()){
                Toastr::success('Password Update Successfully!.', '', ["progressbar" => true]);
                return redirect()->back();
            }else{
                 Toastr::error('Something is wrong.. !', 'Error');
                return redirect()->back();
            }
        }else{
            Toastr::error('Password not matched...!', 'Error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for change Logo a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chnageLogo(Request $request)
    {
        $input = $request->all();
        $User_id = Auth::user()->id;
        $user = User::find($User_id);
        if ($request->hasFile('logo')){
            $input['logo']=\MyHelper::photoUpload($request->file('logo'),'images/logo/',300,135);
            if (file_exists($user->logo)){
                unlink($user->logo);
            }
        }
        if($user->update($input)){
            Toastr::success('Logo Update Successfully!.', '', ["progressbar" => true]);
            return redirect()->back();
        }else{
            Toastr::error('Something is wrong.. !', 'Error');
             return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
         $input = $request->all();
        $User_id = Auth::user()->id;
        $user = User::find($User_id);
        if($user->update($input)){
            Toastr::success('Update Profile Successfully!.', '', ["progressbar" => true]);
            return redirect()->back();
        }else{
            Toastr::error('Something is wrong.. !', 'Error');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
