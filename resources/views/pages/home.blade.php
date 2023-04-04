@extends('base')

@section('content')

            <li class="menu-item">
              <a href="{{url('')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Officials and Staffs">Officials and Staffs</div>
              </a>
            </li>

<!-- Basic Bootstrap Table -->
<div class="container-xxl flex-grow-1 container-p-y">
              <div class="card">
                <h5 class="card-header">PERSONNEL'S RECORD</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Type</th>
                        <th>Department</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach ($errors as $user)
                    <tr>
                      <td>{{ $user->Name }}</td>
                      <td>{{ $user->Position }}</td>
                      <td>{{ $user->Type }}</td>
                      <td>{{ $user->Department }}</td>
                      <td>{{ $user->Action }}</td>
                    </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
</div>

                        
@endsection

