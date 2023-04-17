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
                        <td class="fw-bolder">Action</td>
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
                      <td class="p2">{{ $user->Action }}</td>
                      <td>
                      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
                      <div class ="image-container">  
                      <a href="#"><img src="{{ asset('') }}assets/img/icons/unicons/delete-xxl.png" alt class="w-px-20 h-auto rounded-circle menu-icon"></a></div></td>
                      <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
                    </tr>
                    @endforeach
                   
                    </tbody>
                  </table>
                </div>
              </div>
</div>

                        
@endsection

