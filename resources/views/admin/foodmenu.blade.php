<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.admincss')
</head>
<body>
<div class="container-scroller">
@include('admin.navbar')
    <div style="position: relative; top:60px ; right:-150px">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label >Title</label>
                <input type="text" name="title" style="color: blue" placeholder="write a title" required>
            </div>

            <div>
                <label>Price</label>
                <input type="text" name="price" style="color: blue" placeholder="price" required>
            </div>

            <div>
                <label>Description</label>
                <input type="text" name="description" style="color: blue" placeholder="description" required>
            </div>

            <div>

                <input type='file' name="image" >
            </div>



                <input type="submit" value='Save'>


        </form>
        <div>
            <table bgcolor="black">
                <tr align="center" >
                    <th style="padding: 30px">Food name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action</th>
                </tr>
                @foreach($data as $d)
                <tr align="center" >
                    <td>{{$d->title}}</td>
                    <td>{{$d->price}}</td>
                    <td>{{$d->description}}</td>
                    <td><img width="100" height="100" src="/foodimage/{{$d->image}}"></td>
                    <td><a href="{{url('/deletemenu',$d->id)}}">Delete</a></td>
                    <td><a href="{{url('/updateview',$d->id)}}">Update</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

@include('admin.adminscript')
</div>
</body>
</html>
