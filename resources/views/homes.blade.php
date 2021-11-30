<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>Users Address</h2>

<table style="width:100%">
  <tr>
    <th>Id </th>
    <th>Title</th>
    <th>Email</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Actions</th>

  </tr>
  @foreach ($data as $dt)
  <tr>
    <td>{{ $dt->id }}</td>
    <td>{{ $dt->name }}</td>
    <td>{{ $dt->email }}</td>
    <td>{{ $dt->created_at }}</td>   
     <td>{{ $dt->updated_at }}</td>
     <td><button>view</button><button>edit</button><button>delete</button></td>


  </tr>
  @endforeach
</table>

<p>Thats All for now.</p>

</body>
</html>

