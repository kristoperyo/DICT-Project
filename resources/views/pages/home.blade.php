@extends('base')

@section('content')

<!-- Basic Bootstrap Table -->
<div class="container-xxl flex-grow-1 container-p-y">
              <div class="card">
                <h5 class="card-header">PERSONNEL'S RECORD</h5>
                <div class="table-responsive text-nowrap">
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
                    <tr>
                      <td class="p2">{{ $user->Name }}</td>
                      <td class="p2">{{ $user->Position }}</td>
                      <td class="p2">{{ $user->Type }}</td>
                      <td class="p2">{{ $user->Department }}</td>
                      <td>
                      <div class ="image-container">  
                      <a href="#"><img src="{{ asset('') }}assets/img/icons/unicons/delete-xxl.png" alt class="w-px-20 h-auto rounded-circle"></a></div></td>
                    </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
</div>

                        
@endsection

