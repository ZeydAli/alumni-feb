@include('user.layout.header')

<body class="bg-light">
  

   @include('user.layout.navbar')

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/logo2.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>BengBengkel</b> Workshop</h1>
                                <h3 class="h2">We can satisfy your automotive desires</h3>
                                <p>
                                    BengBengkel is a automotif company from Indonesia that provides modifications, spare parts and motorbikes. This company was founded in 2022 in Malang by La Phei. Currently, BengBengkel is available in 30 cities in Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/logo2.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Our vissions</h1>
                                <h3 class="h2">we care you</h3>
                                <p>
                                    Helping to improve the transportation structure in Indonesia, making it easier for people to fulfill their desires for automotive modifications such as spare parts, finished motorbikes, using complete service facilities, and contributing to the prosperity of the lives of mechanics in the future
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/logo2.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Our Mission</h1>
                                <h3 class="h2">we care you</h3>
                                <p>
                                    making BengBengkel a means of automotive modification and sales of automotive-related products as well as increasing awareness of automotive modifications in Indonesia   
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Events</h1>
                <p>
                  An event held by the company and can be attended by those of you who want to take part in the event or are looking for inspiration for motorbike modifications for your driving satisfaction
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/g1.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Vespa Classic</h5>
                <p class="text-center"><a class="btn btn-success">Detail</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/motor3.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Honda CB</h2>
                <p class="text-center"><a class="btn btn-success">Detail</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/g3.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Tour</h2>
                <p class="text-center"><a class="btn btn-success">Detail</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Client</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/qori.jpg" class="card-img-top " alt="..." >
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">QoryGore</a>
                            <p class="card-text">
                                The youtuber that start career on music industry.
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/gibran.jpg" class="card-img-top " alt="..." >
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Gibran Rakabuming Raka</a>
                            <p class="card-text">
                                Son of 7th Indonesian presiden.
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/jefri.jpg" class="card-img-top" alt="..." >
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Jefry Nichol</a>
                            <p class="card-text">
                                Influencer, Actor, and Model.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    @include('user.layout.footer')

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>