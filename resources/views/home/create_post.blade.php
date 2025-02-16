<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    @include('home.homecss')

    <style type="text/css">
        .div {
            text-align: center;
        }

        .title {
            font-size: 30px;
            font-weight: bold;
            color: #000;
            padding-top: 40px;
            padding-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 200px;
            color: #000;
            font-size: 18px;
            font-weight: bold;
        }

        input {
            border-color: #000;
            border-width: 1px;
        }

        textarea {
            border-color: #000;
            border-width: 1px;
        }

        .field {
            padding: 25px;
        }
    </style>
</head>

<body>
    <div class="header_section">
        @include('home.header')
    </div>

    <div class="container mt-4 d-flex justify-content-center">
        <div class="col-md-8">
            <h3 class="title text-center mb-4">Add Post</h3>
            <form action="{{ url('user_post') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <table class="table table-bordered border-dark">
                    <tbody>
                        <tr>
                            <th class="text-end bg-light" style="width: 15%;">Title</th>
                            <td><input type="text" name="title" class="form-control" required></td>
                        </tr>
                        <tr>
                            <th class="text-end bg-light">Description</th>
                            <td>
                                <textarea name="description" class="form-control" rows="4" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-end bg-light">Add Image</th>
                            <td><input type="file" name="image" class="form-control" accept="image/*"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                                <button type="submit" class="btn btn-primary px-4">Add Post</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

    <!-- footer section start -->
    @include('home.footer')
    <!-- footer section end -->
    <!-- copyright section start -->
    @include('home.copyright')
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
