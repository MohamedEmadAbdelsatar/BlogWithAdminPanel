<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\permission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PermissionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->can('users.permission')){
            $permissions = permission::all();
            return view('admin.permission.show',compact('permissions'));
        }
        return redirect(route('admin.home'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:50|unique:permissions',
            'for' => 'required'
        ]);

        $permission = new permission;
        $permission->name = $request->name;
        $permission->for = $request->for;
        $permission->save();
        return redirect(route('permission.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(permission $permission)
    {
        if(Auth::user()->can('users.permission')){
            return view('admin.permission.edit',compact('permission'));
        }
        return redirect(route('admin.home'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permission $permission)
    {
        $this->validate($request,[
            'name' => 'required|max:50|unique:permissions',
            'for' => 'required'
        ]);

        $permission->name = $request->name;
        $permission->for = $request->for;
        $permission->save();
        return redirect(route('permission.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(permission $permission)
    {
        permission::where('id',$permission->id)->delete();
        return redirect()->back();
    }
}
