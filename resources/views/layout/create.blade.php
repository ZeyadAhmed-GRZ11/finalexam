@extends('welcome')
@section('route')

<x-slot name="title">

Users Company

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

          <form action="{{ url('create') }}" method="POST">
          
             @csrf

             <div class="mb-3">

             <label for="">Name:</label>
             <input type="name" id="name" name="name" class="form-control" value="{{ old('name') }}">

             @error('name')
               <span class="text-danger">{{ $message }}</span>
             @enderror

             <label for="">Salary:</label>
             <input type="salary" id="salary" name="salary" class="form-control" value="{{ old('salary') }}">

             @error('salary')
               <span class="text-danger">{{ $message }}</span>
             @enderror

             <br>
             <button type="submit" class="btn btn-primary">Save</button>

             </div>

          </form>

        </div>
     </div>

    </div>
  </div>
</div>









@endsection