<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::whereNotIn('name', ['admin'])->get();
        return view('admin.role.index', compact('roles'));
    }

    public function create() {
        return view('admin.role.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'min:3'
            ]]);
        Role::create($validated);
        return to_route('adminroles.index')->with('message', 'Role Created successfully.');
    }

    public function edit(Role $role) {
        $permissions = Permission::all();
        return view('admin.role.edit', compact('role','permissions'));
    }

    public function update(Request $request, Role $role) {
        $validated = $request->validate(['name'=> 'required']);
        $role->update($validated);

        return to_route('adminroles.index');
    }

    public function destroy(Role $role) {
        $role->delete();
        return back();
    }

    public function givePermission(Request $request, Role $role) {
        if($role->hasPermissionTo($request->permission)) {
            return back();
        }
        $role->givePermissionTo($request->permission);
        return back();
    }

    public function revokePermission(Role $role, Permission $permission) {
        if($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            return back();
        }
        return back();
    }
}
