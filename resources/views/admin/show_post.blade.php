<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .title {
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .table {
            border: 2px solid white;
            width: 80%;
            text-align: center;
            margin-left: 70px;
        }

        .tr {
            color: #000;
            background-color: antiquewhite;
        }

        .image {
            width: 150px;
            height: 100px;
            padding: 10px
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

            <h1 class="title">All Posts</h1>

            <table class="table">
                <tr class="tr">
                    <th>Post Title</th>
                    <th>Description</th>
                    <th>Post By</th>
                    <th>Post Status</th>
                    <th>User Type</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Status Accept</th>
                    <th>Status Reject</th>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->post_status }}</td>
                        <td>{{ $post->usertype }}</td>
                        <td><img src="storage/{{ $post->image }}" class="image"></td>
                        <td><a href="{{ url('edit_page', $post->id) }}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{ url('delete_post', $post->id) }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete it ?')">Delete</a></td>
                        <td><a href="{{ url('accept_post', $post->id) }}" class="btn btn-primary">Accept</a></td>
                        <td><a href="{{ url('reject_post', $post->id) }}" class="btn btn-secondary">Reject</a></td>
                    </tr>
                @endforeach

            </table>

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
