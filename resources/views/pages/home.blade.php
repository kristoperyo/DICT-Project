@extends('base')

@section('content')


<!-- Basic Bootstrap Table -->
<div class="container-xxl container-p-y">
              <div class="card">
                <h5 class="card-header">PERSONNEL'S RECORD</h5>
                <div class="table-responsive text-nowrap">
                <div class="col-md-4">
                <div class="text-center">
               
              </div>
            </div>
          </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <td class="fw-bolder">Name</td>
                        <td class="fw-bolder">Position</td>
                        <td class="fw-bolder">Type</td>
                        <td class="fw-bolder">Department</td>
                        <td class="fw-bolder" width="280px">Action</td>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                    <link rel="stylesheet" type="tect/css" href="{{url('css/app.css')}}">
                    <tr>
                      <td class="p2">{{ $user->Name }}</td>
                      <td class="p2">{{ $user->Position }}</td>
                      <td class="p2">{{ $user->Type }}</td>
                      <td class="p2">{{ $user->Department }}</td>
                      <td>

                      <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
            
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
                      </td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                  </table>
                </div>
              </div>
</div>

                        
@endsection

