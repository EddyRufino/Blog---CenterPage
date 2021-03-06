@extends('admin.layout')

@section('content')

  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="box-title">Datos personales</div>
        </div>
        <div class="box-body">
          <form method="POST" action="{{ route('admin.users.store') }}">
            {{ csrf_field() }}

            @include('admin.partials.errors-messages')

            <div class="form-group">
              <label for="name">Nombre:</label>
              <input name="name" value="{{ old('name') }}" type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input name="email" value="{{ old('email') }}" type="text" class="form-control">
            </div>

            <div class="form-group col-md-6">
              <label>Roles</label>
              @include('admin.roles.checkboxes')
            </div>

            <div class="form-group col-md-6">
                <label>Permisos</label>
              @include('admin.permissions.checkboxes', ['model' => $user])
            </div>

            <span class="help-block">La contraseña será enviada al correo de usuario</span>

            <button class="btn btn-primary btn-block">Crear usuario</button>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
