@include('user.layout.header')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                            <img class="img-fluid" src="img/logoUB.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Alumni FEB</b></h1>
                                <h3 class="h2">Mohon register untuk alumni agar dapat mendata alumni</h3>
                                <p>
                                    Aplikasi ini dibuat untuk mendata alumni yang kemudian data tersebut digunakan dengan semestinya.
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
                            <img class="img-fluid" src="img/logoUB.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Menemukan teman anda</h1>
                                <h3 class="h2"></h3>
                                <p>
                                    Untuk menciptakan ikatan yang kuat anda dapat menemukan no. telepon untuk saling menghubungi sesama alumni. 
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
                            <img class="img-fluid" src="img/logoUB.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Fungsi aplikasi</h1>
                                <h3 class="h2"></h3>
                                <p>
                                    aplikasi ini akan digunakan untuk monitoring persebaran lulusan dan bahan evaluasi pembelajaran. 
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
        <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6" style="margin-bottom: 2rem">
                  <div class="card">
                    <div class="card-header border-0">
                      <div class="d-flex justify-content-between">
                        <h3 class="card-title">Umum</h3>
                        {{-- <a href="javascript:void(0);">View Report</a> --}}
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex">
                        {{-- <p class="d-flex flex-column">
                          <span class="text-bold text-lg">820</span>
                          <span>Visitors Over Time</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                          <span class="text-success">
                            <i class="fas fa-arrow-up"></i> 12.5%
                          </span>
                          <span class="text-muted">Since last week</span>
                        </p> --}}
                      </div>
                      <!-- /.d-flex -->
      
                      <div class="position-relative mb-4">
                        <canvas id="umum" height="200"></canvas>
                      </div>
      
                      <div class="d-flex flex-row justify-content-end">
                        
                      </div>
                    </div>
                  </div>
                  <!-- /.card -->
      
                  <!-- /.card -->
                </div>
                <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                          <h3 class="card-title">Ilmu Ekonomi</h3>
                          {{-- <a href="javascript:void(0);">View Report</a> --}}
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex">
                          {{-- <p class="d-flex flex-column">
                            <span class="text-bold text-lg">820</span>
                            <span>Visitors Over Time</span>
                          </p>
                          <p class="ml-auto d-flex flex-column text-right">
                            <span class="text-success">
                              <i class="fas fa-arrow-up"></i> 12.5%
                            </span>
                            <span class="text-muted">Since last week</span>
                          </p> --}}
                        </div>
                        <!-- /.d-flex -->
        
                        <div class="position-relative mb-4">
                          <canvas id="ekonomi" height="200"></canvas>
                        </div>
        
                        <div class="d-flex flex-row justify-content-end">
                          
                        </div>
                      </div>
                    </div>

                    
                    
                    <!-- /.card -->
        
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6" >
                    <div class="card">
                      <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                          <h3 class="card-title">Akuntansi</h3>
                          {{-- <a href="javascript:void(0);">View Report</a> --}}
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex">
                          {{-- <p class="d-flex flex-column">
                            <span class="text-bold text-lg">820</span>
                            <span>Visitors Over Time</span>
                          </p>
                          <p class="ml-auto d-flex flex-column text-right">
                            <span class="text-success">
                              <i class="fas fa-arrow-up"></i> 12.5%
                            </span>
                            <span class="text-muted">Since last week</span>
                          </p> --}}
                        </div>
                        <!-- /.d-flex -->
        
                        <div class="position-relative mb-4">
                          <canvas id="akuntansi" height="200"></canvas>
                        </div>
        
                        <div class="d-flex flex-row justify-content-end">
                          
                        </div>
                      </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                          <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                              <h3 class="card-title">Manajemen</h3>
                              {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="d-flex">
                              {{-- <p class="d-flex flex-column">
                                <span class="text-bold text-lg">820</span>
                                <span>Visitors Over Time</span>
                              </p>
                              <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                  <i class="fas fa-arrow-up"></i> 12.5%
                                </span>
                                <span class="text-muted">Since last week</span>
                              </p> --}}
                            </div>
                            <!-- /.d-flex -->
            
                            <div class="position-relative mb-4">
                              <canvas id="manajemen" height="200"></canvas>
                            </div>
            
                            <div class="d-flex flex-row justify-content-end">
                              
                            </div>
                          </div>
                        </div>

                        
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </div>
    </section>
    <!-- End Categories of The Month -->




    @include('user.layout.footer')

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->


    <!-- chart umum -->
    @if(isset($data['kategori']) && $data['kategori'])
    <script>
        // Data untuk chart
        var alumniData = {!! json_encode($data['kategori']) !!};

        // Labels untuk chart
        var labels = Object.keys(alumniData);
        
        // Data untuk chart
        var data = Object.values(alumniData);

        // Konfigurasi chart
        var options = {
            aspectRatio: 1,
            plugins: {
                legend: {
                    position: 'right',
                },
            },
        };

        // Inisialisasi chart
        var ctx = document.getElementById('umum').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: options
        });
    </script>
    @endif
    <!-- chart umum -->

        <!-- chart ekonomi -->
        @if(isset($data['departemen']['Ilmu Ekonomi']) && $data['departemen']['Ilmu Ekonomi'])
        <script>
            // Data untuk chart
            var alumniData = {!! json_encode($data['departemen']['Ilmu Ekonomi']) !!};
    
            // Labels untuk chart
            var labels = Object.keys(alumniData);
            
            // Data untuk chart
            var data = Object.values(alumniData);
    
            // Konfigurasi chart
            var options = {
                aspectRatio: 1,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                },
            };
    
            // Inisialisasi chart
            var ctx = document.getElementById('ekonomi').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah Alumni',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: options
            });
                  
        </script>
        @endif
        <!-- chart ekonomi -->

                <!-- chart Akuntansi -->
                @if(isset($data['departemen']['Ilmu Ekonomi']) && $data['departemen']['Akuntansi'])
                <script>
                    // Data untuk chart
                    var alumniData = {!! json_encode($data['departemen']['Akuntansi']) !!};
            
                    // Labels untuk chart
                    var labels = Object.keys(alumniData);
                    
                    // Data untuk chart
                    var data = Object.values(alumniData);
            
                    // Konfigurasi chart
                    var options = {
                        aspectRatio: 1,
                        plugins: {
                            legend: {
                                position: 'right',
                            },
                        },
                    };
            
                    // Inisialisasi chart
                    var ctx = document.getElementById('akuntansi').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Jumlah Alumni',
                                data: data,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: options
                    });

                </script>
                @endif
                <!-- chart ekonomi -->

                        <!-- chart ekonomi -->

        @if(isset($data['departemen']['Ilmu Ekonomi']) && $data['departemen']['Manajemen'])
        <script>
            // Data untuk chart
            var alumniData = {!! json_encode($data['departemen']['Manajemen']) !!};
    
            // Labels untuk chart
            var labels = Object.keys(alumniData);
            
            // Data untuk chart
            var data = Object.values(alumniData);
    
            // Konfigurasi chart
            var options = {
                aspectRatio: 1,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                },
            };
    
            // Inisialisasi chart
            var ctx = document.getElementById('manajemen').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah Alumni',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: options
            });
        </script>
        @endif
        <!-- chart ekonomi -->

</body>

</html>