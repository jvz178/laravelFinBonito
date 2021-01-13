<form action="" method="post" enctype="multipart/form-data">
<h1>Gestion de usuarios</h1>

<table class= "table table-light table-hover">
<thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>surname</th>
        </tr>
    </thead>

<tbody>
@foreach ($users as $user)
<tr></tr>
<td>{{$user->id}}</td> 
<td>{{$user->name}}</td>
<td>{{$user->firstname}}</td>
</tbody>
</form>