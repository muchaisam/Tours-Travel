@extends('layouts.app')


@section('content')


<div class="card card-default">
   <div class="card-header">Create Category</div>
   <div class="card-body">
      <form action="">
         <div class="form-group">
            <input type="text" id="name" class="form-control" name="name">
         </div>

         <div class="form-group">
            <button class="btn btn-success">Add Category</button>
         </div>
      </form>
   </div>

</div>


@endsection