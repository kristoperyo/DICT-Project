@extends('base')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>WHOOPS</strong> There were some problems<br><br>
        <ul>
            @foreach($errors->all as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


<form action="{{ route('users.update', $users->id) }}" method="POST">
    @csrf
  
@method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" value="{{ $users->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Position</strong>
                <input type="text" name="name" value="{{ $users->position }}" class="form-control" placeholder="Position">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type</strong>
                <input type="text" name="type" value="{{ $users->type }}" class="form-control" placeholder="Type">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department</strong>
                <input type="text" name="department" value="{{ $users->department }}" class="form-control" placeholder="Department">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


@endsection