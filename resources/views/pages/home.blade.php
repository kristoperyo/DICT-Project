@extends('base')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Basic Bootstrap Table -->
<div class="container-xl container-p-y">
              <div class="card">
                <h5 class="card-header">PERSONNEL'S RECORD</h5>
                      <a class="navbar-nav flex-row align-items-center ms-auto" href="{{ url('create') }}">
                        <i class="bx bx-user-plus me-2"></i>
                      </a> 
                <div class="table-responsive text-nowrap">
                <div class="col-md-4">
                <div class="text-center">
               
              </div>
            </div>
          </div>
                  <table class="table table-hover">
                    <thead class="table-dark">
                      <tr>
                        <td class="fw-bolder">Full Name</td>
                        <td class="fw-bolder">Position</td>
                        <td class="fw-bolder">Department</td>
                        <td class="fw-bolder">Contact Details</td>
                        <td class="fw-bolder">E-mail</td>
                        <td class="fw-bolder">Action</td>
                      </tr>
                    </thead>

                    @if(session("success"))
                      <strong>{{session("success")}}</strong>
                    @endif

                    <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)  
                    <tr>
                      <td class="p2" width="20%">{{ $user->Name }}</td>
                      <td class="p2" width="20%">{{ $user->Position }}</td>
                      <td class="p2" width="28%">{{ $user->Department }}</td>
                      <td class="p2" width="20%">{{ $user->Contact }}</td>
                      <td class="p2">{{ $user->Email }}</td>
                      <td>

                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
            
                      <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                      <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}"><i class="bx bx-edit-alt me-1"></i>Edit</a>
            
                        @csrf
                        @method('DELETE')
                          <button type="submit" class="dropdown-item" onclick="confirmation(event)"><i class="bx bx-trash me-1"></i>Delete</button>
                       </div>

                      </form>
                      </td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                  </table>
                  
                </div>
              </div>
              {{  $users->links() }}
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

                        
@endsection