<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        .post_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .div_center {
            text-align: center;
            padding: 30px;
        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>

</head>

<body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">

            <h1 class="post_title">Update Post </h1>

            <div>
                <form action="{{ url('edit_page', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_center">
                        <label>Post Title</label>
                        <input type="text" name="title" value="{{ $post->title }}">
                    </div>
                    <div class="div_center">
                        <label>Post Description</label>
                        <textarea name="description"> {{ $post->description }} </textarea>
                    </div>
                    <div class="div_center">
                        <label>Old Image</label>
                        <img src="storage/{{ $post->image }}" height="150px" width="150px" style="margin: auto">
                    </div>
                    <div class="div_center">
                        <label>update Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="div_center">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </form>
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
