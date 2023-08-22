<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U of CRUD</title>
</head>
<body>
 <form action="{{ route ('saveUpdatedData', $Customer->id) }}" method="post">
        @csrf
        <label for="id">id: &nbsp;</label>
        <input type="text" id="id" name="id" value="{{$Customer->id}}"><br><br>

        <label for="name">name: &nbsp;</label>
        <input type="text" id="name" name="name" value="{{$Customer->name}}"><br><br>

        <label for="email">email &nbsp;</label>
        <input type="text" id="email" name="email" value="{{$Customer->email}}"><br><br>

        <label for="address">address &nbsp;</label>
        <input type="text" id="address" name="address" value="{{$Customer->address}}"><br><br>

        <label for="phone_no">phone_no &nbsp;</label>
        <input type="text" id="phone_no" name="phone_no" value="{{$Customer->phone_no}}"><br><br>

        <input type="submit" value="Save">
    </form>
</body>
</html>
