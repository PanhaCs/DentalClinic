<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid ">
            
            <div align="center" style="padding: 100px 250px;">
                <table>
                    <tr align="center" style="background-color: rgb(164, 241, 234);">
                        <th style="color: black; padding: 15px; font-size: 200">Doctor Name</th>
                        <th style="color: black; padding: 15px; font-size: 200">Phone</th>
                        <th style="color: black; padding: 15px; font-size: 200">Speciality</th>
                        <th style="color: black; padding: 15px; font-size: 200">Room No</th>
                        <th style="color: black; padding: 15px; font-size: 200">Image</th>
                        <th style="color: black; padding: 15px; font-size: 200">Action</th>
                    </tr>
                    @foreach ($data as $datas)
                        <tr align="center" style="background-color: rgb(179, 224, 219);color:black;">
                            <td>{{ $datas->name }}</td>
                            <td>{{ $datas->phone }}</td>
                            <td>{{ $datas->speciality }}</td>
                            <td>{{ $datas->room }}</td>
                            <td><img src="doctorimage/{{ $datas->image }}" style="width: 50px" alt=""></td>
                            <td style="">
                                <a href="{{url('updatedoctor',$datas->id)}}" class="btn btn-warning" >Edit</a> - 
                                <a href="{{url('deletedoctor',$datas->id)}}" onclick="return confirm('Are you sure to Delete {{$datas->name}}')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>

        </div>



    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
