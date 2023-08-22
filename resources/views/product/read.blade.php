<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Details</title>
    <style>
        table{
            border: 4px solid black; width: 60%;
        }
        th,td,tr{
            border 4px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <!-- <th> Student ID </th> -->
            <th> id </th>
            <th> price </th>
            <th> name </th>
            <th> size </th>
            <th> Update </th>
            <th> Delete </th>
        </tr>

        <!-- Blade For Loop -->
        @foreach ($product ?? '' as $product)
        <tr>
            <td> {{$product->id}} </td>
            <td> {{$product->price}} </td>
            <td> {{$product->name}} </td>
            <td> {{$product->size}} </td>

            <td>
                <a href="{{URL::to('product/update', $product->id)}}" title="Edit -> {{$product->name}}"> Update </a>
            </td>
             <td>
                <a href="{{URL::to('product/delete', $product->id)}}" title="Edit -> {{$product->name}}"> delete </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
