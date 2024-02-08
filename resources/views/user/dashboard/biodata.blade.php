@include('user.layout.header')
{{-- @dd($user) --}}
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


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5" >
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Biodata Alumni</h1>
            <p>
                Mohon isi untuk pelengkapan data anda.
            </p>
        </div>
    </div>

    <!-- Start Map -->
 
    <!-- Ena Map -->

    <!-- Start Contact -->
    <div class="container py-5 bg-light" >
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Nama" value="{{ old('name', $user->name) }}">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">No. Handphone</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="No. Handphone">
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Departemen</label>
                    <select class="form-control mt-1" id="subject" name="subject">
                        <option value="" disabled selected>Mohon Pilih</option>
                        <option value="Ilmu Ekonomi">Departemen Ilmu Ekonomi</option>
                        <option value="Manajemen">Departemen Manajemen</option>
                        <option value="Akuntansi">Departemen Akuntansi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Prodi</label>
                    <select class="form-control mt-1" id="subject" name="subject">
                        <option value="" disabled selected>Mohon Pilih</option>
                        <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
                        <option value="Ekonomi Islam">Ekonomi Islam</option>
                        <option value="Ekonomi, Keuangan, dan Perbankan">Ekonomi, Keuangan, dan Perbankan</option>
                        <option value="Kewirausahaan">Kewirausahaan</option>
                        <option value="Akuntansi">Akuntansi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Angkatan</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Angkatan">
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Pekerjaan Saat Ini</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Pekerjaan Saat Ini">
                </div>
                
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->


@include('user.layout.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>