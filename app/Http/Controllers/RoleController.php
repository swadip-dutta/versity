<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    function Role(){


        // $role = Role::create(['name' => 'student']);
        // $permission = Permission::create(['name' => 'restore class']);

        return view('backend.role', [
            'roles' => Role::all(),
            'permissions' => Permission::all(),
            'users' => User::all(),
        ]);
    }


    function RolePermission(Request $request){

        $role_name = $request->role_name;
        $permission_name = $request->permission_name;
        $role = Role::where('name', $role_name)->first();
        $role->givePermissionTo($permission_name);

        return back();
    }


    function RoleToUser(Request $request){

        $user_id = $request->user_id;
        $role_name = $request->role_name;
        $users = User::findOrFail($user_id);

        $users->assignRole($role_name);

        return back();
    }

    function PermissionChangeToUser($id){

        $user = User::findOrFail($id);
        return view('backend.edit_permission', [
            'permission' => Permission::all(),
            'user' => $user
        ]);
    }


    function PermissionUpdateToUser(Request $request){

        $user = User::findOrFail($request->user_id);
        $user->syncPermissions($request->permission);
        return back();
    }


}
