@extends('layouts.main')

@section('content')

<!-- This Page for Mona -->
<!-- To open this page just write serve link with regstrtion : 127.0.0.1:8000/regstrtion -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
<br><br>
<form action="{{route('store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">First Name </label>
      <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First NAme">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Last Name</label>
      <input type="text" name="last_name" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
    </div>
    <button type="submit" class="btn btn-primary">Gooo</button>
  </form>


</div>
</div>
</div>


@endsection