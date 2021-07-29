<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Aplikasi Artikel Sederhana</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('addon/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('addon/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('addon/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('addon/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('addon/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('addon/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('addon/plugins/iCheck/all.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('addon/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('addon/plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('addon/bower_components/select2/dist/css/select2.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('addon/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('addon/dist/css/skins/_all-skins.min.css') }}">

  <link rel="stylesheet" href="{{ asset('addon/dist/sweetalert/dist/sweetalert2.min.css') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js'"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ asset('addon/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>-</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>App</b> Artikel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://127.0.0.1:8000/addon/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">
                {!! Session::get('nama') !!}
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://127.0.0.1:8000/addon/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 {!! Session::get('nama') !!}
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="<?= url('/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://127.0.0.1:8000/addon/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            {!! Session::get('nama') !!}
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      @if (Session::get('role') === "admin")
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= url('/artikel') ?>"><i class="fa fa-circle-o"></i>ArtikelKu</a></li>
          </ul>
        </li>
      </ul>
      @else
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= url('/artikel') ?>"><i class="fa fa-circle-o"></i>ArtikelKu</a></li>
          </ul>
        </li>
      </ul>
      @endif
    </section>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="#">Nothing</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('addon/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('addon/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('addon/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('addon/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- Sweetalert -->
<script src="{{ asset('addon/dist/sweetalert/dist/sweetalert2.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('addon/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('addon/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('addon/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('addon/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('addon/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('addon/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('addon/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('addon/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('addon/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('addon/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('addon/plugins/iCheck/icheck.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('addon/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('addon/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('addon/dist/js/demo.js') }}"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })

  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@if ($halaman === "IndexArtikel")
    <script>
      $(document).ready(function(){
        $("#openAddModal").click(function(){
          $("#modal-default").modal();
        });
      });

      function getData(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
          method: "POST",
          url: "/data/getDataArtikel",
          data: {
            id_artikel: id
          },
          success: function(res) {
            var obj = JSON.parse(res);
            $("#id_artikel_edit").val(obj['data'].id_artikel);
            $("#judul_artikel_edit").val(obj['data'].judul_artikel);
            $("#isi_artikel_edit").val(obj['data'].isi_artikel);
            $("#modal-default-edit").modal();
          }
        })
      }

      function tambah() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var fd = new FormData();
        var files = $('#gambar_artikel')[0].files;
        fd.append('gambar_artikel', files[0]);
        fd.append('judul_artikel', $('#judul_artikel').val());
        fd.append('isi_artikel', $('#isi_artikel').val());

        $.ajax({
          method: "POST",
          url: "{{ url('artikel/store') }}",
          data: fd,
          processData: false,
          contentType: false,
          success: function(res) {
            if (res == "success") {
              Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Berhasil menambahkan data artikel.',
                showConfirmButton: false,
                timer: 1500
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  location.reload();
                }
              })
            }else{
              Swal.fire(
                'Error!',
                'Gagal menambahkan data artikel.',
                'error'
              )
            }
          }
        })
      }

      function edit() {
        Swal.fire({
          title: 'Edit Artikel?',
          text: "Apakah Anda yakin ingin merubah data ini?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, do it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var fd = new FormData();
            var files = $('#gambar_artikel_edit')[0].files;
            fd.append('gambar_artikel', files[0]);
            fd.append('judul_artikel', $('#judul_artikel_edit').val());
            fd.append('isi_artikel', $('#isi_artikel_edit').val());
            fd.append('id_artikel', $('#id_artikel_edit').val());

            $.ajax({
              method: "POST",
              url: "/artikel/updateArtikel",
              data: fd,
              processData: false,
              contentType: false,
              success: function(res) {
                if (res == "success") {
                  Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Berhasil merubah data artikel.',
                    showConfirmButton: false,
                    timer: 1500
                  }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                      location.reload();
                    }
                  })
                }else{
                  Swal.fire(
                    'Error!',
                    'Gagal merubah data artikel.',
                    'error'
                  )
                }
              }
            })
            
          }
        })
      }

      function hapus(id) {
        Swal.fire({
          title: 'Hapus Artikel?',
          text: "Apakah Anda yakin ingin menghapus data ini?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
              method: "POST",
              url: "/artikel/deleteArtikel",
              data: {
                id_artikel: id
              },
              success: function(res) {
                if (res == "success") {
                  Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Berhasil menghapus data artikel.',
                    showConfirmButton: false,
                    timer: 1500
                  }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                      //console.log('I was closed by the timer')
                      location.reload();
                    }
                  })
                }else{
                  Swal.fire(
                    'Error!',
                    'Gagal menghapus data artikel.',
                    'error'
                  )
                }
              }
            })
            
          }
        })
      }
    </script>
@elseif ($halaman === "PenjualanMobil")
    <script>
      $(document).ready(function(){
        $("#openAddModal").click(function(){
          $("#modal-default").modal();
        });
      });

      function getData(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
          method: "POST",
          url: "/data/getDataMobil",
          data: {
            id: id
          },
          success: function(res) {
            var obj = JSON.parse(res);
            $("#id_edit").val(obj['data'].id);
            $("#nama_mobil_edit").val(obj['data'].nama_mobil);
            $("#harga_mobil_edit").val(obj['data'].harga_mobil);
            $("#stok_mobil_edit").val(obj['data'].stok_mobil);  
            $("#modal-default-edit").modal();
          }
        })
      }

      function tambah() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
          method: "POST",
          url: "/penjualanMobil/store",
          data: {
            nama_pembeli: $("#nama_pembeli").val(),
            email_pembeli: $("#email_pembeli").val(),
            nomor_telepon_pembeli: $("#nomor_telepon_pembeli").val(),
            id_mobil: $("#id_mobil").val(),
            jumlah_mobil: $("#jumlah_mobil").val()
          },
          success: function(res) {
            if (res == "success") {
              Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Berhasil menambahkan Penjualan Mobil.',
                showConfirmButton: false,
                timer: 1500
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  location.reload();
                }
              })
            }else{
              Swal.fire(
                'Error!',
                'Gagal melakukan Transaksi / Stok tidak cukup.',
                'error'
              )
            }
          }
        })
      }

      function hapus(id, id_mobil, jumlah_mobil) {
        Swal.fire({
          title: 'Hapus Data Penjualan Mobil',
          text: "Apakah Anda yakin ingin menghapus data ini?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
              method: "POST",
              url: "/penjualanMobil/delete",
              data: {
                id: id,
                id_mobil: id_mobil,
                jumlah_mobil: jumlah_mobil
              },
              success: function(res) {
                if (res == "success") {
                  Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Berhasil menghapus data penjualan mobil.',
                    showConfirmButton: false,
                    timer: 1500
                  }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                      //console.log('I was closed by the timer')
                      location.reload();
                    }
                  })
                }else{
                  Swal.fire(
                    'Error!',
                    'Gagal menghapus data penjualan mobil.',
                    'error'
                  )
                }
              }
            })
            
          }
        })
      }
    </script>
@endif
</body>
</html>