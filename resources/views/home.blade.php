@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul class="list-group">
  <li class="list-group-item">Dashboard</li>
  <a href="{{ route('roles.index') }}">
        <li class="list-group-item">Roles</li>
  </a>

  <li class="list-group-item">Permissions</li>
  <li class="list-group-item">Users</li>

</ul>

            </div>
        </div>
    </div>
</div>
@endsection
