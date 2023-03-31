@extends('base')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-md-6">
          <form action="{{url('/update-user/'.$id)}}" method="post">
            @csrf
             @method('PUT')
                  <div class="card mb-4">
                    <h5 class="card-header">Default</h5>
                    <div class="card-body">
                       @if(Session::has('success'))
                          <div><p>{{ session()->get('success') }}</p></div>
                        @endif
                      <div>
                        <label for="defaultFormControlInput" class="form-label">First Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          name="first_name"
                          aria-describedby="defaultFormControlHelp"
                          value="{{$user->first_name}}"
                        />
                        @error('first_name')
                        <div id="defaultFormControlHelp" class="form-text">
                          {{ $errors->first('first_name') }}
                        </div>
                        @enderror
                        
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Last Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          name="last_name"
                          aria-describedby="defaultFormControlHelp"
                          value="{{$user->last_name}}"
                        />
                        <div id="defaultFormControlHelp" class="form-text">
                          We'll never share your details with anyone else.
                        </div>
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Username</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          name="username"
                          aria-describedby="defaultFormControlHelp"
                          value="{{$user->username}}"
                        />
                        <div id="defaultFormControlHelp" class="form-text">
                          We'll never share your details with anyone else.
                        </div>
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input
                          type="email"
                          class="form-control"
                          id="defaultFormControlInput"
                          name="email"
                          aria-describedby="defaultFormControlHelp"
                          value="{{$user->email}}"
                        />
                        <div id="defaultFormControlHelp" class="form-text">
                          We'll never share your details with anyone else.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </form>
                </div>
                
    </div>
@endsection