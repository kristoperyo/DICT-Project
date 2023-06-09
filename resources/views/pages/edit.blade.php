@extends('base')

@section('content')


        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h3>Edit User</h3>
        </div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <strong>WHOOPS!!</strong>There were some problems with your input<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <form action="{{ route('users.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="container" style="padding-top: 10px">
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="form-label">Full Name</label>
                <input type="text" name="name" value="{{ $users->Name }}" class="form-control" placeholder="Full Name"><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="form-label">Positon</label>
                <input type="text" name="position" value="{{ $users->Position }}" class="form-control" placeholder="Position"><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="form-label">Department</label>
                <input type="text" name="department" value="{{ $users->Department }}" class="form-control" placeholder="Department"><br>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="form-label">Contact</label>
                <input type="number" name="contact" value="{{ $users->Contact }}" class="form-control" placeholder="Contact"><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="form-label">Email</label>
                <input type="text" name="email" value="{{ $users->Email }}" class="form-control" placeholder="Email"><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
            <button type="submit" class="btn btn-info">Update</button>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary"href="{{ route('users.index') }}">Back</a>
    </div>
    </div>
</div>

        </div>
       
    </form>



@endsection