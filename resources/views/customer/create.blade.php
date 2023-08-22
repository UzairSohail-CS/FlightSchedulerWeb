<!DOCTYPE html>
<html>
<head>
 <title>Add Customer Details</title>
 <!-- For Success alert that appears after deletion -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.
css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <h2 style="border: 1px solid black; background-color:darkslateblue; text-align:center;">
 Customer Details
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
 <form action="{{ route ('customer.save') }}" method="post">
 @csrf
 <label for="id">id: &nbsp;</label>
 <input type="text" id="id" name="id" value=""><br><br>

 <label for="name">name: &nbsp;</label>
 <input type="text" id="name" name="name" value=""><br><br>

 <label for="email">email: &nbsp;</label>
 <input type="text" id="email" name="email" value=""><br><br>

 <label for="password">password: &nbsp;</label>
 <input type="text" id="password" name="password" value=""><br><br>

 <label for="address">address: &nbsp;</label>
 <input type="text" id="address" name="address" value=""><br><br>

 <label for="phone_no">phone_no: &nbsp;</label>
 <input type="text" id="phone_no" name="phone_no" value=""><br><br>

 <input type="submit" value="Submit">
 </form>
</body>
</html>
