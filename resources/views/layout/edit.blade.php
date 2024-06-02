@extends('welcome')
@section('route')

<x-slot name="title">

Edit-Users Company

</x-slot>


<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">

@if(session('status'))

 <div class="alert alert-success"> {{ session('status') }} </div>
 
@endif


     <div class="card">
        <div class="card-header">
            <h4>Users Company</h4>
            <a href="{{url('show')}}" class="btn btn-primary float-end">Back</a>
        </div>   

        <div class="card-body">

          <form action="{{ url('show/'.$users->id.'/edit') }}" method="POST">
          
             @csrf
             @method("PUT")

             <div class="mb-3">

             <label for="">Name:</label>
             <input type="name" id="name" name="name" class="form-control" value="{{ $users->name }}">

             @error('name')
               <span class="text-danger">{{ $message }}</span>
             @enderror

             <label for="">Salary:</label>
             <input type="salary" id="salary" name="salary" class="form-control" value="{{  $users->salary }}">

             @error('salary')
               <span class="text-danger">{{ $message }}</span>
             @enderror

             <br>
             <button type="submit" class="btn btn-primary">Update</button>

             </div>

          </form>

        </div>
     </div>

    </div>
  </div>
</div>

