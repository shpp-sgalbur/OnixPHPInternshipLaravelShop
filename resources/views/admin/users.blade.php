@extends('admin.content')

@section('users')
<h1>Users table</h1>
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" >
    <thead>
      <tr>
        <td><b>id</b></td>
        <td><b>role_id</b></td>
        <td><b>name</b></td>       
        <td><b>emailid</b></td>
        <td><b>password</b></td>
        <td><b>Action</b></td>
      </tr>
    </thead>
    <tbody>
     @foreach($users as $user)   
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->role_id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>    
        <td>
            
            <form method="post" action="{{route('admin_edit_user',['id'=>$user->id])}}">
                @csrf
                <input type="submit" name="edit{{$user->id}}" value="edit {{$user->id}}">
                <input type="submit" name="delete{{$user->id}}" value="delete {{$user->id}}">
            </form>
        </td>
      @endforeach

    </tbody>
</table>




@endsection