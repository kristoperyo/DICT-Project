@extends('base')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left"  style="padding-left: 10px">
            <h3>Add User</h3>
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

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="container" style="padding-top: 10px" >
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{old('name')}}"><br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="form-label">Email</label>
                <!-- <strong>E-mail</strong> -->
                <input type="text" name="email" class="form-control"  placeholder="Email" value="{{old('email')}}"><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="form-label">Position</label>
                <input type="text" name="position" class="form-control" placeholder="Position" value="{{old('position')}}"><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="form-label">Department</label>
                <input type="text" name="department" class="form-control" placeholder="Department" value="{{old('department')}}"><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="form-label">Contact</label>
                <input type="number" name="contact" class="form-control" placeholder="Contact" value="{{old('contact')}}"><br>
            </div>
        </div>
        </div>
        <div class=" m-2 text-center col-sm-30 ">
            <button type="submit" id="submit" class="btn btn-info">Submit</button>
        </div>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
    </div>
        @include('sweetalert::alert')
    </form>
    @endsection
