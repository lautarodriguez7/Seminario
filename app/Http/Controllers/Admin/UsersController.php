<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index'); //Para asegurar la url que nadie pueda entrar sin permiso
        $this->middleware('can:admin.users.edit')->only('edit', 'update');
    }
    
    public function index()
    {
        return view('admin.users.index');
    }
   
    public function edit(User $user)
    { 
        // return $user;
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit', $user)->with('info', 'Se asignaron los roles correctamente');
    }

}
