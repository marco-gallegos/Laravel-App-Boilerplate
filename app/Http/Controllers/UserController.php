<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Session;

class UserController extends Controller{
    public function __construct() {
        //$this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::all();
        return view('user.index',["users" => $users ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $roles = Role::get();
        return view('user.create',["roles"=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $user = User::find($id);
        return view('user.show', compact(["user"]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        echo "edit";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }

    public function permission($id){
        $user = User::findOrFail($id);
        //$permissions = $user->getAllPermissions();
        $permissions = Permission::all();
        return view('user.permission', compact("user", "permissions"));
    }

    public function linkpermission(Request $request, $id){
        $user = User::findOrFail($id);
        if ($request["permissions"] == null) {
            $user->syncPermissions([]);
        }else{
            $user->syncPermissions($request["permissions"]);
        }
        return redirect()->route("user.index");
    }

    public function role($id){
        $user = User::findOrFail($id);
        //$roles = $user->Roles()->get();
        $roles = Role::all();
        return view('user.role', compact("user", "roles"));
    }

    public function linkrole(Request $request, $id){
        $user = User::findOrFail($id);
        if ($request["roles"] == null) {
            $user->syncRoles([]);
        }else{
            $user->syncRoles($request["roles"]);
        }
        return redirect()->route("user.index");
    }
}
