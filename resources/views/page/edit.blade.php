<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update contact Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1>Update contact Details</h1><hr>
		@foreach($contact as $data)
		<form action="{{ url('edit/'.$data->id) }}" method="post">
			@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $data->name }}">
		  </div>				
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ $data->email }}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Phone</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" name="phone" value="{{ $data->phone }}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Description</label>
		    <textarea type="text" class="form-control" id="exampleInputPassword1" name="description">{{ $data->description }} </textarea>
		  </div>			  
		  <button type="submit" name="submit" class="btn btn-primary">Update</button>
		  <a type="button" href="{{ URL::to('/all-contact') }}" class="btn btn-success">Back</a>
		</form>
		@endforeach
	</div>
</body>
</html>