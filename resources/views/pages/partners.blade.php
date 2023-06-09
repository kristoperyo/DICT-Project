@extends('base')

@section('content')

<link rel="stylesheet" href="{{ asset('') }}assets/css/partner.css"/>
<link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



<div class="container">
    <div class="-item">

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addprofile">
      <i class='bx bx-image-add'></i>
    </button>
  </div>
</div>

<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->
<!-- Modal -->
<div class="modal fade" id="addprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection