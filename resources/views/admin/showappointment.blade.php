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

            <div align="center" style="padding: 100px 20px;">
                <table style="width: 100%">
                    <tr align="center" style="background-color: #53596d;font: bold;">
                        <th style="padding: 15px; font-size: 200">Customer Name</th>
                        <th style="padding: 15px; font-size: 200">Email</th>
                        <th style="padding: 15px; font-size: 200">Phone</th>
                        <th style="padding: 15px; font-size: 200">Doctor Name</th>
                        <th style="padding: 15px; font-size: 200">Date</th>
                        <th style="padding: 15px; font-size: 200">Message</th>
                        <th style="padding: 15px; font-size: 200">Status</th>
                        <th style="padding: 0px; font-size: 200">Action</th>
                        <th style="padding: 15px; font-size: 200">Send Mail</th>
                    </tr>
                    @foreach ($data as $datas)
                        <tr align="center" style="background-color: rgb(179, 224, 219);color:black;">
                            <td style="width: 200px;padding: 10px">{{ $datas->name }}</td>
                            <td style="width: 200px;">{{ $datas->email }}</td>
                            <td style="width: 200px;">{{ $datas->phone }}</td>
                            <td style="width: 200px;">{{ $datas->doctor }}</td>
                            <td style="width: 200px;">{{ $datas->date }}</td>
                            <td style="width: 200px;">{{ $datas->message }}</td>
                            <td style="width: 100px;">{{ $datas->status }}</td>
                            <td style="width: 300px;">
                                <a href="{{url('approve',$datas->id)}}" class="btn btn-success" >Accept</a> - 
                                <a href="{{url('cancel',$datas->id)}}" class="btn btn-danger">Cancel</a>
                            </td>
                            <td style="width: 200px;">
                                <a href="{{url('emailview',$datas->id)}}" class="btn btn-primary">Send Mail</a>
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
