<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::all();
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
        return view('admin.role.edit', compact('role'));
    }

    public function update(Request $request, Role $role) {
        $validated = $request->validate(['name'=> 'required']);
        $role->update($validated);

        return to_route('adminroles.index');
    }
}
