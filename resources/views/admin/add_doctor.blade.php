<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    @include('admin.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        input,
        select {
            display: inline-block;
            ;
            width: 200px;
        }

        .form-create {
            display: inline;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 100px;">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert">X</button>
                    </div>
                @endif

                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data"
                    class="form-create">

                    @csrf

                    <div style="padding: 15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" style="color:black" name="name" placeholder="Doctor Name"
                            id="" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Phone</label>
                        <input type="number" style="color:black" name="number" placeholder="Phone Number"
                            id="" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Speciality</label>
                        <select name="speciality" id="" style="color:black" required>
                            <option>--Select--</option>
                            <option value="Orthodontics">Orthodontics</option>
                            <option value="Endodontics">Endodontics</option>
                            <option value="Periodontist">Periodontist</option>
                            <option value="Prosthodontist">Prosthodontist</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Room No</label>
                        <input type="text" style="color:black" name="room" placeholder="Room Number" required
                            id="">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Doctor Image</label>
                        <input type="file" name="file" required>
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
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
