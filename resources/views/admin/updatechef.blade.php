<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.admincss')
</head>
<body>
<div class="container-scroller">


@include('admin.navbar')


<form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Chef Name</label>
        <input style="color: blue;" type="text" name="name"
               value="{{$data->name}}">
    </div>

    <div>
        <label>Chef specialty</label>
        <input style="color: blue;" type="text" name="specialty"
               value="{{$data->specialty}}">
    </div>

    <div>

        <img width="200" height="200" src="/chefimage/{{$data->image}}">
    </div>

    <div>
        <label>New image</label>
        <input type="file" required="">
    </div>
    <div>

        <input type="submit" value='Save'>
    </div>

</form>
@include('admin.adminscript')
</div>
</body>
</html>
