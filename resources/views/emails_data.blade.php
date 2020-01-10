@extends('layouts.main')

@section('content')

<!-- This Page for Mona -->
<!-- To open this page just write serve link with regstrtion : 127.0.0.1:8000/regstrtion -->

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


<h2>Data Table</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Last NAme</th>
    <th>Created At</th>
  </tr>
  <?php
    $id = 0;
  ?>
  @foreach ($names as $name)
  <tr>
      <td>{{++$id}}</td>
      <td>{{$name->name}}</td>
      <td>{{$name->created_at}}</td>
  </tr>
@endforeach


</table>




@endsection