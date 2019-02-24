<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact list </title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h3 style="text-align: center; width: 80%; margin:auto;">Contact List</h3><br>
			<div class="col-lg-6" style="float: left;margin:2px auto;">
				<a type="button" href="{{ URL::to('/') }}" type="button" class="btn btn-primary btn-lg btn-block" style= width: 80%;">Back to Home</a>
			</div>
			<div class="col-lg-6" style="float: right;margin:2px auto;">
				<a type="button" href="{{ route('add') }}" type="button" class="btn btn-primary btn-lg btn-block" style= width: 80%;">Add new</a>
			</div>
		</div>
		@if (session('status'))
		    <div class="alert alert-success" style="margin: 5px 10px; text-align: center;">
		        {{ session('status') }}
		    </div>
		@endif
	</div>
	<div class="row" style="padding-top: 10px;">
	<table class="table table-border" style="text-align: center; width: 80%; margin:auto;" >
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Action</th>
		</tr>
		@foreach($contact as $key=> $showdata)
		<tr>
			<td width="5%">{{ ++$key }}</td>
			<td>{{ $showdata->name }}</td>
			<td>{{ $showdata->email }}</td>
			<td>{{ $showdata->phone }}</td>
			<td>
				<a href="{{ URL::to('edit/'.$showdata->id) }}" class="btn btn-success" style="margin:1px auto;" >Edit</a>
				<a href="{{ URL::to('delete/'.$showdata->id) }}" class="btn btn-danger" style="margin:1px auto;">Delete</a>
				<a href="{{ URL::to('details/'.$showdata->id) }}" class="btn btn-info" style="margin:1px auto;">View</a>
			</td>
		</tr>
		@endforeach
	</table>
	</div>
</body>
</html>