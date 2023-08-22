<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update Details</title>
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
 <form action="{{ route ('saveupdateddata', $Airport->id) }}" method="post">
        @csrf
        <label for="id">id: &nbsp;</label>
        <input type="text" id="id" name="id" value="{{$Airport->id}}"><br><br>

        <label for="name">Airline Name: &nbsp;</label>
        <input type="text" id="name" name="name" value="{{$Airport->name}}"><br><br>

        <label for="number">Airline Number &nbsp;</label>
        <input type="text" id="number" name="number" value="{{$Airport->number}}"><br><br>

        <label for="air">Airport Name &nbsp;</label>
        <input type="text" id="air" name="air" value="{{$Airport->air}}"><br><br>

        <input type="submit" value="Save">
    </form>
</body>
</html>
