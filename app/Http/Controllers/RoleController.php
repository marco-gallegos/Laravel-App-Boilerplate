<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Session;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::all();
        return view('role.index', ["roles"=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rol = new Role;
        $rol->name = $request["name"];
        $rol->save();
        return redirect()->route('role.index')
            ->with('flash_message',
             'Permission'. $rol->name.' added!');
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

    public function permissions($id){
        $rol = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('role.permissions', ["rol"=>$rol, "permissions"=>$permissions]);
    }

    public function link(Request $request, $id){
        $rol = Role::findOrFail($id);
        $rol->syncPermissions($request["permissions"]);
        return redirect()->route('role.index')
            ->with('flash_message',
             'Updated '. $rol->name.' permissions!');
    }
}
