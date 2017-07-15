<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Role;

use App\User;

use App\Permission;

use Session;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('admin.roles.index')->withRoles($roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array('name' => 'required|max:35'));
        $role = new Role;
        $role->name = $request->name;
        $role->save();

        Session::flash('success', 'Nuevo Rol añadido correctamente!');

        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Role::find($id);

        return view('admin.roles.show')->withRol($rol);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = Role::find($id);

        $permission = Permission::all();
        $permission2 = array();

        foreach ($permission as $permission) {
            $permission2[$permission->id] = $permission->name;
        }

        return view('admin.roles.edit')->withRol($rol)->withPermissions($permission2);
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
        $rol = Role::find($id);

        $this->validate($request, [
            'name' => 'required|max:35',
            'label' => 'max:355'
        ]);
        $rol->name = $request->name;
        $rol->label = $request->label;
        $rol->save();


        if (isset($request->permissions)) {
            $rol->permissions()->sync($request->permissions);
        } else {
            $rol->permissions()->sync(array());
        }

        Session::flash('success', 'Rol actualizado exitosamente!');

        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Role::find($id);
        $rol->delete();
        Session::flash('success', 'Rol Eliminado');
        return redirect()->route('roles.index');
    }
}
