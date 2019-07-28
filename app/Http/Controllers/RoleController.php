<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = null;
    
        $roles = Role::orderByDesc('id')->paginate(config('role.number_row_per_page'));
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = new Role();
        return view('roles.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
        if ($role) {
            return redirect('/roles')->with('message', trans_choice('message.object_inserted_success', 0));
        } else {
            return redirect('/role/create')->with('message', trans_choice('message.object_inserted_fail', 0));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return view('roles.edit', compact(['role']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->name;
        $result = $role->save();
        if($result > 0)
            return redirect()->action('RoleController@index')->with('message', trans_choice('message.object_updated_success', 0));
        return redirect()->action('RoleController@index')->with('message', trans_choice('message.object_updated_fail', 0));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Role::destroy($id);
        if ($result > 0)
            return redirect()->action('RoleController@index')->with('message', trans_choice('message.object_deleted_success', 0));
        return redirect()->action('RoleController@index')->with('message', trans_choice('message.object_deleted_fail', 0));
    }
}
