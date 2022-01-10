<?php

namespace App\Http\Controllers\userRoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use DB;
use Auth;

class UserController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-show', ['only' => ['index','show']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users =  User::orderBy('id', 'desc')->get();
        
        return view('backend.accessControl.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('backend.accessControl.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|max:100|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        /*$user->mobile = $request->mobile;*/
        $user->user_type = $request->roles;
        $user->password = bcrypt($request->password);
        
        if($user->save()){
            $user->syncRoles($request->get('roles'));
            Toastr::success('User Created Successfully!.', '', ["progressbar" => true]);
            return redirect()->route('users.index');
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
        $user = User::find($id);
        $data = [
            'model' => $user,
        ];
        return view('backend.users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('backend.accessControl.user.edit', compact('user','roles'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            
        ]);

        $user = User::find($id);
       
        $user->name = $request->name;
        $user->email = $request->email;
        /*$user->mobile = $request->mobile;*/
        $user->user_type = $request->roles;
       /* $user->password = bcrypt($request->password);*/
       
            
        if($user->save()){
            $user->syncRoles($request->get('roles'));
            Toastr::success('User Created Successfully!.', '', ["progressbar" => true]);
            return redirect()->route('users.index');
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
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Toastr::success('User Deleted Successfully!.', '', ["progressbar" => true]);
        return redirect()->back();
    }
}
