<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">

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

                <form action="{{ url('sendemail',$data->id) }}" method="POST" 
                    class="form-create">

                    @csrf

                    <div style="padding: 15px;">
                        <label for="">Greeting</label>
                        <input type="text" style="color:black" name="greeting" placeholder="Doctor Name"
                            id="" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Body</label>
                        <input type="text" style="color:black" name="number" placeholder="Body"
                            id="" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Action Text</label>
                        <input type="text" style="color:black" name="actiontext" placeholder="Room Number" required
                            id="">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Action Url</label>
                        <input type="text" style="color:black" name="actionurl" placeholder="Room Number" required
                            id="">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">End Part</label>
                        <input type="text" style="color:black" name="endpart" placeholder="Room Number" required
                            id="">
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
