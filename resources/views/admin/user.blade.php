@extends('admin.index')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-item-center">
            <strong class="card-title m-0">Data Table</strong>
         
              <a href="" type="button" class="btn btn-primary float-right">Add</a>
        
        </div>
        <div class="card-body">

  <table id="noman" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>No.</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Created at</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      
      @forelse($users as $user)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td width="18%">
            <a href="" type="button" class="btn btn-primary">Edit</a>
            
            <a href="" onclick="return confirm('Are you sure want to delete?')" type="button" class="btn btn-danger">Delete</a>
          </td>
      </tr>
      @empty
        <p>No Data found</p>
      @endforelse

    </tbody>
  </table>
        </div>
    </div>
</div>




@endsection