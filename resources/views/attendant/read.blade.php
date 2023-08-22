<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Attendent Details</title>
    <style>
        table {
        font-family: 'Operator Mono', 'Source Code Pro', Menlo, Monaco, Consolas, Courier New, monospace;
        border-collapse: collapse;
        width: 50%;
        margin-bottom: 10px;
        background: transparent;
        border-spacing: 20px;
        margin-left: 15%;
        }

        td, th {
        border: 2px solid white;
        text-align: left;
        padding: 10px;
        font-size: 25px;
        margin-bottom: 600px;
        color: black;
        text-align:center;
        }
        th{
        color: yellow;
        background-color:dodgerblue;
        }
        tr:nth-child(even){
        background-color:#17cf8b;
        }
        tr:hover{
        background-color: #477d94;
        }
        h1{
          text-align: center;
        }
        body{
        background-color:#c5bccc;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <!-- <th> Student ID </th> -->
            <th> id </th>
            <th> name </th>
            <th> seat_no </th>
            <th> Seat_type</th>
            <th> Update </th>
            <th> Delete </th>
        </tr>

        <!-- Blade For Loop -->
        @foreach ($attendant ?? '' as $attendant)
        <tr>
            <td> {{$attendant->id}} </td>
            <td> {{$attendant->name}} </td>
            <td> {{$attendant->seat_no}} </td>
            <td> {{$attendant->type->type}} </td>
            <td>
                <a href="{{URL::to('attendant/update', $attendant->id)}}" title="Edit -> {{$attendant->name}}"> Update </a>
            </td>
             <td>
                <a href="{{URL::to('attendant/delete', $attendant->id)}}" title="Edit -> {{$attendant->name}}"> delete </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
