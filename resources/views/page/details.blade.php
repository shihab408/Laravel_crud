<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-md-4" style="background: red; border: 1 px solid #000; color:white; font-size: 20px;"><h3>{{ $contactdata->name }}</h3></div>
  <div class="col-md-5" style="background: red; border: 1 px solid #000; color:white; font-size: 20px;"><h3>{{ $contactdata->email }}</h3></div>
  <div class="col-md-3" style="background: red; border: 1 px solid #000; color:white; font-size: 20px;"><h3>{{ $contactdata->phone }}</h3></div>
  <div class="col-md-12" style="background: gray; padding: 4px 20px; border: 1 px solid #000; color:white; font-size: 20px;"><p>{{ $contactdata->description }}</p>
  </div>
      <div class="col-lg-12" style="margin-top:10px;">
      <a type="button" href="{{ URL::to('/all-contact') }}" type="button" class="btn btn-primary btn-lg btn-block" style= width: 80%;">Back to Contact list</a>
    </div>
</div>

</body>
</html>