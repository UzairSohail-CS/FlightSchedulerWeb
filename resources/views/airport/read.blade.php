<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport Details</title>
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
            <th> Airline Name </th>
            <th> Airline Number </th>
            <th> Airport Name </th>
            <th> Traveller Type </th>
            <th> Update </th>
            <th> Delete </th>
        </tr>

        <!-- Blade For Loop -->
        @foreach ($airport ?? '' as $airport)
        <tr>
            <td> {{$airport->id}} </td>
            <td> {{$airport->name}} </td>
            <td> {{$airport->number}} </td>
            <td> {{$airport->air}} </td>
            <td> {{$airport->traveller->traveller}} </td>
            <td>
                <a href="{{URL::to('airport/update', $airport->id)}}" title="Edit -> {{$airport->name}}"> Update </a>
            </td>
             <td>
                <a href="{{URL::to('airport/delete', $airport->id)}}" title="Edit -> {{$airport->name}}"> delete </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
