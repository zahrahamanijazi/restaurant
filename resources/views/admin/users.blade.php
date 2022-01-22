<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<x-app-layout>

</x-app-layout>


<head>
    @include('admin.admincss')
</head>
<body>
<div class="container-scroller">
    @include('admin.navbar')
    <div style="position: relative; top:60px ; right: -150px">
        <table bgcolor="#8a2be2" border="3px">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Action</th>
            </tr>
            @foreach($data as $d)
            <tr align="center">
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                @if($d->usertype=="0")
                   <td><a href="{{url('/deleteuser',$d->id)}}">Delete</a></td>
                @else
                    <td><a href="">Not Allowed</a></td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>


</div>
@include('admin.adminscript')


</body>
</html>



