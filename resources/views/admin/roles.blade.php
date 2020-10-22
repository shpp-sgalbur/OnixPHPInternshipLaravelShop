
<h1>Roles table</h1>
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" >
    <thead>
        <tr>
            <td><b>id</b></td>
            <td><b>name</b></td>
            <td><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
     @foreach($roles as $role)   
      <tr>
        <td>{{$role->id}}</td>
        <td>{{$role->name}}</td>          
        <td><form method="post" action="">
                @csrf
                <input type="submit" name="edit{{$role->id}}" value="edit {{$role->id}}">
                <input type="submit" name="delete{{$role->id}}" value="delete {{$role->id}}">
            </form>
        </td>
      @endforeach

    </tbody>
</table>