<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss='alert' aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="container mt-4 d-flex justify-content-center">
                <div class="col-md-8">
                    <h3 class="title text-center mb-4">Add Post</h3>
                    <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <th class="text-end bg-dark" style="width: 15%;">Title</th>
                                    <td><input type="text" name="title" class="form-control bg-dark" required></td>
                                </tr>
                                <tr>
                                    <th class="text-end bg-dark">Description</th>
                                    <td>
                                        <textarea name="description" class="form-control" rows="4" required></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-end bg-dark">Add Image</th>
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

            @include('admin.footer')
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="adminDash/vendor/jquery/jquery.min.js"></script>
    <script src="adminDash/vendor/popper.js/umd/popper.min.js"></script>
    <script src="adminDash/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="adminDash/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="adminDash/vendor/chart.js/Chart.min.js"></script>
    <script src="adminDash/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="adminDash/js/charts-home.js"></script>
    <script src="adminDash/js/front.js"></script>
</body>

</html>
