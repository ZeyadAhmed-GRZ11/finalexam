@extends('welcome')
@section('route')

<x-slot name="title">

Users Company

</x-slot>


<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">

     <div class="card">
        <div class="card-header">
            <h4>Users Company</h4>
            <a href="{{url('users/create')}}" class="btn btn-primary float-end">Add User</a>
        </div>   

        <div class="card-body">

          <!-- {{ $users }} -->
          <table class="table table-bordered">

            <thead>
                <tr>
                  <th>Name</th>
                  <th>Salary</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($users as $user)

                <tr>
                    <td>{{$user ->id}}</td>
                    <td>{{$user ->name}}</td>
                    <td>{{$user ->salary}}</td>
                
               
                <td>
                    <a href="{{url('show/'.$user->id.'/edit')}}" class="btn btn-primary">Edit</a>
                    <a href="{{url('show/'.$user->id.'/delete')}}" class="btn btn-danger">Delete</a>
                </td>
              
                </tr>
                @endforeach

            </tbody>

          </table>
            

        </div>
     </div>

    </div>
  </div>
</div>









@endsection