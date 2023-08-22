<!DOCTYPE html>
<html>
<head>
 <title>Add Flight Attendant Details</title>
 <!-- For Success alert that appears after deletion -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.
css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<body>
 <h2 style="border: 1px solid black; background-color:darkslateblue; text-align:center;">
 Flight Attendant Details
 </h2>
 <!-- For Redirecting With Flashed Session Data when 'Submit' button -->
 <!-- is pressed in the 'create.blade.php' view which calls the relevant -->
 <!-- function 'store' in the StudentController and then this -->
 <!-- view, 'create.blade.php' is again called -->
 <!-- START -->
 @if (session('status'))
 <div class="alert alert-success alert-dismissible">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {{ session('status') }}
 </div>
 @endif
 <!-- END -->
 <form action="{{ route ('attendant.save') }}" method="post">
 @csrf
 <label for="id">id: &nbsp;</label>
 <input type="text" id="id" name="id" value=""><br><br>

 <label for="name">Name: &nbsp;</label>
 <input type="text" id="name" name="name" value=""><br><br>

 <label for="seat_no">Seat_no: &nbsp;</label>
 <input type="text" id="seat_no" name="seat_no" value=""><br><br>

 <!-- For the dropdown Department-->
 <label for="type">Seat_type: &nbsp;</label>
 <select id="dropdown" name="type">
 @foreach($Type as $type)
 <option value="{{$type->id}}">
 {{$type->type}}
 </option>
 @endforeach
 </select>
 <br><br>

 <input type="submit" value="Submit">
 </form>
</body>
</html>
