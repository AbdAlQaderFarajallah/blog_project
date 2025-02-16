<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    @include('home.homecss')
    <style type="text/css">
        .post {
            padding: 30px;
            text-align: center;
        }

        .title {
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
        }

        .description {
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
        }

        .imgg {
            width: 200px;
            height: 200px;
            padding: 30px;
            margin: auto;
        }

        .div{
            padding: 50px;
        }

    </style>
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
    </div>
    <!-- header section end -->

    <div>
        <div class="row d-flex flex-wrap justify-content-center"> <!-- عرض المنشورات بشكل أفقي -->
            @foreach ($data as $post)
                <div class="div col-md-4 mb-4"> <!-- تحديد عرض كل منشور -->
                    <div class="card shadow-sm">
                        <img class="card-img-top img-fluid" src="storage/{{ $post->image }}" alt="Post Image">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->description, 100) }}</p> <!-- تقليل الوصف -->
                            
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-danger" href="{{ url('my_post_delete', $post->id) }}">Delete</a>
                                <a class="btn btn-primary" href="{{ url('update_post', $post->id) }}">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
