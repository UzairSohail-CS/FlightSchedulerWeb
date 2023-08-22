<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Details</title>
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
            <th> ID </th>
            <th> Name </th>
            <th> From Location </th>
            <th> Destination </th>
            <th> Passenger Type </th>
            <th> Update </th>
            <th> Delete </th>
        </tr>

        <!-- Blade For Loop -->
        @foreach ($flight ?? '' as $flight)
        <tr>
            <td> {{$flight->id}} </td>
            <td> {{$flight->name}} </td>
            <td> {{$flight->from_location}} </td>
            <td> {{$flight->destination}} </td>
            <td> {{$flight->passenger->passenger}} </td>
            <td>
                <a href="{{URL::to('flight/update', $flight->id)}}" title="Edit -> {{$flight->name}}"> Update </a>
            </td>
             <td>
                <a href="{{URL::to('flight/delete', $flight->id)}}" title="Edit -> {{$flight->name}}"> delete </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
