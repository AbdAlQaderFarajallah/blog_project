<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <base href="/public">
    @include('home.homecss')
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
    </div>
    <!-- header section end -->
    <div class="col-md-12" style="text-align: center">
        <div><img src="storage/{{ $post->image }}"
                style="padding: 20px; margin: auto; height: 450px; width: 450px;"></div>
        <h3><b>{{ $post->title }}</b></h3>
        <h4>{{ $post->description }}</h4>
        <p>Posted by <b>{{ $post->name }}</b> </p>
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
