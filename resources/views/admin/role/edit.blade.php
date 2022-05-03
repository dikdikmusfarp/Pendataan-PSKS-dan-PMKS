@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Role Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('adminroles.index') }}">Roles</a></li>
                            <li class="breadcrumb-item active">edit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Edit {{ $role->name }} Role</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="roleForm" method="POST" action="{{ route('adminroles.update', $role->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $role->name }}" placeholder="Enter name of role">
                                    </div>
                                    @error('name')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-danger">Update</button>
                                    <a href="{{ route('adminroles.index') }}">
                                        <button type="button" class="btn btn-info">Cancel</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Role permission for {{ $role->name }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <label for="permission">Permission</label>
                                <div class="flex">
                                    @if ($role->permissions)

                                        @forelse ( $role->permissions as $role_permission )
                                        <form class="px-4 py-2" method="POST" action="{{ route('adminroles.permissions.revoke', [$role->id, $role_permission->id]) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger btn-sm" value="{{ $role_permission->name }}">
                                        </form>
                                        @empty
                                            <span><p>No Permission yet</p></span>
                                        @endforelse
                                    @endif
                                </div>
                            </div>
                            <form id="roleForm" method="POST" action="{{ route('adminroles.permissions', $role->id) }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="permission">Add Permission</label>
                                        <select id="permission" name="permission" autocomplete="permission-name"
                                            class="form-control select2bs4" style="width: 100%;">
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->name }}">{{ $permission->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('name')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-danger">Assign</button>
                                    <a href="{{ route('adminroles.index') }}">
                                        <button type="button" class="btn btn-info">Cancel</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
