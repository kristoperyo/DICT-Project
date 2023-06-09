@extends('base')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Basic Bootstrap Table -->

<div class="container-xl container-p-y">
              <div class="card">
                <h5 class="card-header">SPEAKER'S RECORD</h5>
                <div class="table-responsive text-nowrap">
                        <button type="button" class="btn btn-primary me-md-2 justify-content-md-end" data-bs-toggle="modal" data-bs-target="#addspeaker">
                        <i class="bx bx-user-plus me-2"></i></button>
              </div>
          </div>
                  <table class="table table-hover">
                    <thead class="table-dark">
                      <tr>
                        <td class="fw-bolder">Full Name</td>
                        <td class="fw-bolder">Contact Details</td>
                        <td class="fw-bolder">E-mail</td>
                        <td class="fw-bolder">Action</td>
                      </tr>
                    </thead>

                    @if(session("success"))
                      <strong>{{session("success")}}</strong>
                    @endif

                    <tbody class="table-border-bottom-0">
                    @foreach ($speaker as $speakers)
                    <tr>
                      <td class="p2" width="20%">{{ $speakers->Name }}</td>
                      <td class="p2" width="20%">{{ $speakers->Contact }}</td>
                      <td class="p2">{{ $speakers->Email }}</td>
                      <td>

                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                      <div class="dropdown-menu">

                      <a class="dropdown-item" href="#"><i class="bx bx-edit-alt me-1"></i>Edit</a>
            
                @csrf
                @method('DELETE')
                <button type="submit" class="dropdown-item" onclick="confirmation(event)"><i class="bx bx-trash me-1"></i>Delete</button>
                  @csrf 
                    </td>
                        </form>
                    </tr>
                    @endforeach
                   
                    </tbody>
                  </table>
                  
                </div>
              </div>
</div>
<script>
  function confirmation(ev)
  {
    swal({
      title:"Are you sure to delete this?",
      text:"You will not be able to undo this",
      icon:"warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willCancel)=>{
      if(willCancel) {
        window,location.hreef = urlToRedirect;
      }
    })
  }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="modal fade" id="addspeaker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Speaker Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
    <form action="{{ route('speaker.store') }}" method="POST">
        @csrf

        <div class="container" style="padding-top: 10px" >
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{old('Name')}}"><br>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <label class="form-label">Contact</label>
                <input type="number" name="contact" class="form-control" placeholder="Contact" value="{{old('Contact')}}"><br>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="form-label">Email</label>
                <!-- <strong>E-mail</strong> -->
                <input type="text" name="email" class="form-control"  placeholder="Email" value="{{old('Email')}}"><br>
            </div>
        </div>
        <div class=" m-2 text-center col-sm-30 ">
            <button type="submit" id="submit" class="btn btn-info">Submit</button>
        </div>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('speaker.index') }}">Back</a>
    </div>
        @include('sweetalert::alert')
    </form>
      </div>
    </div>
  </div>
</div>                
@endsection