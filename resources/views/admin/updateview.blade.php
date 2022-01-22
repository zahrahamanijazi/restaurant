<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    {{--    <link href="url({{ asset('public/css/app.css') }})" rel="stylesheet">--}}
    @include('admin.admincss')
</head>
<body>
<div class="container-scroller">
    @include('admin.navbar')

    <div style="position: relative; top:60px ; right:-150px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title" style="color: blue" value="{{$data->title}}" >
            </div>

            <div>
                <label>Price</label>
                <input type="text" name="price" style="color: blue" value="{{$data->price}}" >
            </div>

            <div>
                <label>Description</label>
                <input type="text" name="description" style="color: blue" value="{{$data->description}}" >
            </div>

            <div>
                <label>Old Image</label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}">
            </div>

            <div>
                <label>Image</label>
                <input type='file' name="image">
            </div>


            <input type="submit" value='Save'>


        </form>
    </div>

    @include('admin.adminscript')
</div>
</body>
</html>
