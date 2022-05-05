<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use RealRashid\SweetAlert\Facades\Alert;


class PermissionController extends Controller
{
    public function index() {
        $permissions = Permission::all();
        return view('admin.permission.index', compact('permissions'));
    }

    public function create() {
        return view('admin.permission.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => ['required',
            ]]);
        Permission::create($validated);
        Alert::success('Success', 'Permission has been added');
        return to_route('adminpermissions.index');
    }

    public function edit(Permission $permission) {
        return view('admin.permission.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission) {
        $validated = $request->validate(['name'=> 'required']);
        $permission->update($validated);
        Alert::success('Updated', 'Permission has been changed');
        return to_route('adminpermissions.index');
    }

    public function destroy(Permission $permission) {
        $permission->delete();
        Alert::warning('Warning', 'Permission has been deleted');
        return back();
    }
}
