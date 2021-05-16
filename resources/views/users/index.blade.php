<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 


<div class="container">
    <h1 class="mt-5">Users</h1>
    {{session('msg')}}
    <a href="/users/create" class="btn btn-primary">Add user</a>
    <table class="table  table-bordered table-striped table-hover">
        <tr>
            <th>#</th>
            <th> NAME</th>
            <th>EMAIL</th>
            <th>PHONENO</th>
            <th>STATUS</th>
            <th>ROLE</th>
            <th>ACTION</th>
        </tr>
        @foreach($users as $user)
        
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->status}}</td>
            <td>{{$user->role}}</td>
            <td>
                <a href="delete/{{$user->id}}" class="btn btn-primary"> Delete</a>
                <a href="/users/edit/{{$user->id}}" class="btn btn-danger"> edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>