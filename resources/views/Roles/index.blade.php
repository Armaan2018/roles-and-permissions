@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form method="POST" action="{{ route('roles.store') }}">
                    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Create New Role</label>
    <input type="text" class="form-control" name="name" value="{{ old('name')}}">
    @error('name')
    <span class="text-danger">{{ $message }}</span>

    @enderror

  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </div>
        </div>
    </div>
</div>
@endsection
