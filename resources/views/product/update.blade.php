<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Details</title>
</head>
<body>
 <form action="{{ route ('saveUpdatedData', $Product->id) }}" method="post">
        @csrf
        <label for="id">id: &nbsp;</label>
        <input type="text" id="id" name="id" value="{{$Product->id}}"><br><br>

        <label for="price">price: &nbsp;</label>
        <input type="text" id="price" name="price" value="{{$Product->price}}"><br><br>

        <label for="name">name &nbsp;</label>
        <input type="text" id="name" name="name" value="{{$Product->name}}"><br><br>

        <label for="size">size &nbsp;</label>
        <input type="text" id="size" name="size" value="{{$Product->size}}"><br><br>

        <input type="submit" value="Save">
    </form>
</body>
</html>
