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

    <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Name</label>
            <input style="color: blue" type="text" name="name"
                   placeholder="Enter a name" required>
        </div>

        <div>
            <label>Specialty</label>
            <input style="color: blue" type="text" name="specialty"
                   placeholder="specialty" required>
        </div>

        <div>

            <input type="file" name="image" required>
        </div>

        <input type="submit" value="Save">
    </form>

    <div>
        <table bgcolor="black">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Specialty</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Action</th>
            </tr>
            @foreach($data as $d)
                <tr align="center">
                    <td>{{$d->name}}</td>
                    <td>{{$d->specialty}}</td>
                    <td><img width="100" height="100" src="/chefimage/{{$d->image}}"></td>
                    <td> <a href="{{url('/updatechef',$d->id)}}">Update</a></td>
                </tr>
            @endforeach
        </table>
    </div>

</div>
@include('admin.adminscript')

</body>
</html>
