<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::success('Success', 'Role has been added');
        return to_route('adminroles.index');
    }

    public function edit(Role $role) {
        $permissions = Permission::all();
        return view('admin.role.edit', compact('role','permissions'));
    }

    public function update(Request $request, Role $role) {
        $validated = $request->validate(['name'=> 'required']);
        $role->update($validated);
        Alert::success('Updated', 'Permission has been changed');
        return to_route('adminroles.index');
    }

    public function destroy(Role $role) {
        $role->delete();
        Alert::warning('Warning', 'Permission has been deleted');
        return back();
    }

    public function givePermission(Request $request, Role $role) {
        if($role->hasPermissionTo($request->permission)) {
            Alert::toast('Role already has that permission', 'error');
            return back();
        }
        $role->givePermissionTo($request->permission);
        Alert::toast('Adding Permission completed', 'success');
        return back();
    }

    public function revokePermission(Role $role, Permission $permission) {
        if($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            Alert::toast('Permission has been deleted', 'warning');
            return back();
        }
        return back();
    }
}
