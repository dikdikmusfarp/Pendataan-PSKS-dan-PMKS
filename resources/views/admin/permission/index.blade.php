@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Permissions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item active">Permissions</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Permission Data</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="col-md-2 mb-2">
                <a href="{{ route('adminpermissions.create') }}">
                    <button type="button" class="btn btn-primary btn-block"><i class="fa-solid fa-circle-plus"></i> Add New</button>
                </a>
            </div>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Permission</th>
                  <th style="width: 20%">Option</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($permissions as $key => $permission)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $permission->name }}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('adminpermissions.edit', $permission->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" align="center"> No Data Recorded </td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection
