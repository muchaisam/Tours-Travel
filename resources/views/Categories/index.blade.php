@extends('layouts.app')


@section('content')

<div class="d-flex justify-content-end mb-2">
   <a href="{{route('categories.create')}}" class="btn btn-success ">Add Category</a>
</div>
<div class="card card-default">
   <div class="card-header">Categories</div>
</div>

<div class="card-body">
   <table class="table">
      <thead>
         <th>Name</th>
         <th>

         </th>

      <tbody>
         @foreach ($categories as $category )
         <tr>
            <td>
               {{$category->name}}
            </td>
            <td>
               <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm">
                  Edit
               </a>
            </td>
         </tr>
         @endforeach

      </tbody>


      </thead>
   </table>


   @endsection