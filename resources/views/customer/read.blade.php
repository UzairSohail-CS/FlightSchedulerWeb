<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
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
            <th> name </th>
            <th> email </th>
            <th> address </th>
            <th> phone_no </th>
            <th> Update </th>
            <th> Delete </th>
        </tr>

        <!-- Blade For Loop -->
        @foreach ($customer ?? '' as $customer)
        <tr>
            <td> {{$customer->id}} </td>
            <td> {{$customer->name}} </td>
            <td> {{$customer->email}} </td>
            <td> {{$customer->address}} </td>
            <td> {{$customer->phone_no}} </td>

            <td>
                <a href="{{URL::to('customer/update', $customer->id)}}" title="Edit -> {{$customer->name}}"> Update </a>
            </td>
             <td>
                <a href="{{URL::to('customer/delete', $customer->id)}}" title="Edit -> {{$customer->name}}"> delete </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
