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
            @include('admin.body')
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
