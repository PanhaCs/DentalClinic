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
                        <th style="color: black; padding: 15px; font-size: 200">Customer Name</th>
                        <th style="color: black; padding: 15px; font-size: 200">Email</th>
                        <th style="color: black; padding: 15px; font-size: 200">Phone</th>
                        <th style="color: black; padding: 15px; font-size: 200">Doctor Name</th>
                        <th style="color: black; padding: 15px; font-size: 200">Date</th>
                        <th style="color: black; padding: 15px; font-size: 200">Message</th>
                        <th style="color: black; padding: 15px; font-size: 200">Status</th>
                        <th style="color: black; padding: 15px; font-size: 200">Action</th>
                    </tr>
                    @foreach ($data as $datas)
                        <tr align="center" style="background-color: rgb(179, 224, 219);color:black;">
                            <td style="padding:10px;">{{ $datas->name }}</td>
                            <td>{{ $datas->email }}</td>
                            <td>{{ $datas->phone }}</td>
                            <td>{{ $datas->doctor }}</td>
                            <td>{{ $datas->date }}</td>
                            <td>{{ $datas->message }}</td>
                            <td>{{ $datas->status }}</td>
                            <td style="">
                                <a href="{{url('approve',$datas->id)}}" class="btn btn-success" >Accept</a> - 
                                <a href="{{url('cancel',$datas->id)}}" class="btn btn-danger">Cancel</a>
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
