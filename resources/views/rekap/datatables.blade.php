<!DOCTYPE html>
<html>

<head>
    <title>CRUD AJAX LARAVEL 8</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- MULAI STYLE CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" /> -->
    <!-- AKHIR STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
     <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  

</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="{{ route('home') }}"><img src="assets/img/kemendikbudlogo.png" alt="" class="img-fluid"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                        @guest
                            @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Admin') }}</a>
                                    </li>
                                @endif

                                

                                @if (Route::has('admin'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin') }}">{{ __('Admin') }}</a>
                                    </li>
                                @endif
                                
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        @endguest
                        
            </ul>
        </nav><!-- .nav-menu -->

        <div class="header-social-links">
            <a href="https://www.youtube.com/channel/UCx9Y522fpjdZg2vATpgFDkw" class="youtube"><i class="icofont-youtube"></i></a>
            <a href="https://web.facebook.com/lldikti5" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="https://www.instagram.com/lldikti5/" class="instagram"><i class="icofont-instagram"></i></a>
        </div>

        </div>
    </header><!-- End Header -->
    <br><br><br><br><br>
    
    <!-- MULAI CONTAINER -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="judul"> 
                    Rekap Data Pelayanan
                </div>
                <!-- MULAI DATE RANGE PICKER -->
                <div class="row input-daterange mb-3">
                    <div class="col-md-4">
                        <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date"
                            readonly />
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date"
                            readonly />
                    </div>
                    <div class="col-md-4">
                        <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                        <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                    </div>
                </div>
                <!-- AKHIR DATE RANGE PICKER -->
                <!-- MULAI TABLE -->
                <table class="table table-striped table-bordered table-sm" id="table_pegawai">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>No KTP / SIM</th>
                            <th>Instansi</th>
                            <th>Loket</th>
                            <th>Keperluan</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                </table>
                <!-- AKHIR TABLE -->
            </div>
        </div>
    </div>
    <!-- AKHIR CONTAINER -->
      <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-6">
            <div class="footer-info">
              <h3>LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH V YOGYAKARTA</h3>
              <p>
                <strong>Alamat    :</strong> Jl. Tentara Pelajar No.13, Bumijo, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55231 <br>
                <strong>Telepon   :</strong> (0274) 513538 <br>
                <strong>Email     :</strong> lldikti5@kemdikbud.go.id <br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.youtube.com/channel/UCx9Y522fpjdZg2vATpgFDkw" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="https://web.facebook.com/lldikti5" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/lldikti5/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://twitter.com/lldikti5" class="twitter"><i class="bx bxl-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2021</span></strong>. LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH V YOGYAKARTA
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
        Developed by M. Ibnu</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

    <!-- MULAI MODAL FORM TAMBAH/EDIT-->
    <!-- <div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-judul"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Nama Pegawai</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-12">
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control required">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">E-mail</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" id="email" name="email" value=""
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Alamat</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="alamat" id="alamat" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                                    value="create">Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div> -->
    <!-- AKHIR MODAL -->

    <!-- MULAI MODAL KONFIRMASI DELETE-->
    <!-- <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PERHATIAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Jika menghapus Pegawai maka</b></p>
                    <p>*data pegawai tersebut hilang selamanya, apakah anda yakin?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                        Data</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- AKHIR MODAL -->

    <!-- LIBARARY JS -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <!-- AKHIR LIBARARY JS -->

    <!-- JAVASCRIPT -->
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $('#tombol-tambah').click(function () {
            $('#button-simpan').val("create-post");
            $('#id').val('');
            $('#form-tambah-edit').trigger("reset");
            $('#modal-judul').html("Tambah Pegawai Baru");
            $('#tambah-edit-modal').modal('show');
        });

        $(document).ready(function () {
            $('#table_pegawai').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('datatables.index') }}",
                    type: 'GET'
                },
                columns: [
                    {data: 'id',name: 'id'},
                    {data: 'name',name: 'name'},
                    {data: 'email',name: 'email'},
                    {data: 'address',name: 'address'},
                    {data: 'notelp',name: 'notelp'},
                    {data: 'noktp',name: 'noktp'},
                    {data: 'instansi',name: 'instansi'},
                    {data: 'loket',name: 'loket'},
                    {data: 'keperluan',name: 'keperluan'},
                    {data: 'created_at',name: 'created_at'},
                    // {data: 'action',name: 'action'},
                ],
                order: [[0, 'asc']]
            });
        });

        // if ($("#form-tambah-edit").length > 0) {
        //     $("#form-tambah-edit").validate({
        //         submitHandler: function (form) {
        //             var actionType = $('#tombol-simpan').val();
        //             $('#tombol-simpan').html('Sending..');

        //             $.ajax({
        //                 data: $('#form-tambah-edit')
        //                     .serialize(),
        //                 url: "{{ route('datatables.store') }}",
        //                 type: "POST",
        //                 dataType: 'json',
        //                 success: function (data) {
        //                     $('#form-tambah-edit').trigger("reset");
        //                     $('#tambah-edit-modal').modal('hide');
        //                     $('#tombol-simpan').html('Simpan');
        //                     var oTable = $('#table_pegawai').dataTable();
        //                     oTable.fnDraw(false);
        //                     iziToast.success({
        //                         title: 'Data Berhasil Disimpan',
        //                         message: '{{ Session('
        //                         success ')}}',
        //                         position: 'bottomRight'
        //                     });
        //                 },
        //                 error: function (data) {
        //                     console.log('Error:', data);
        //                     $('#tombol-simpan').html('Simpan');
        //                 }
        //             });
        //         }
        //     })
        // }

        // $('body').on('click', '.edit-post', function () {
        //     var data_id = $(this).data('id');
        //     $.get('pegawai/' + data_id + '/edit', function (data) {
        //         $('#modal-judul').html("Edit Post");
        //         $('#tombol-simpan').val("edit-post");
        //         $('#tambah-edit-modal').modal('show');

        //         $('#id').val(data.id);
        //         $('#nama_pegawai').val(data.nama_pegawai);
        //         $('#jenis_kelamin').val(data.jenis_kelamin);
        //         $('#email').val(data.email);
        //         $('#alamat').val(data.alamat);
        //     })
        // });

        // $(document).on('click', '.delete', function () {
        //     dataId = $(this).attr('id');
        //     $('#konfirmasi-modal').modal('show');
        // });

        // $('#tombol-hapus').click(function () {
        //     $.ajax({

        //         url: "pegawai/" + dataId,
        //         type: 'delete',
        //         beforeSend: function () {
        //             $('#tombol-hapus').text('Hapus Data');
        //         },
        //         success: function (data) {
        //             setTimeout(function () {
        //                 $('#konfirmasi-modal').modal('hide');
        //                 var oTable = $('#table_pegawai').dataTable();
        //                 oTable.fnDraw(false);
        //             });
        //             iziToast.warning({
        //                 title: 'Data Berhasil Dihapus',
        //                 message: '{{ Session('
        //                 delete ')}}',
        //                 position: 'bottomRight'
        //             });
        //         }
        //     })
        // });

    </script>
</body>

</html>
