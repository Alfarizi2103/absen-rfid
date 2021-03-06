<?php date_default_timezone_set('Asia/Jakarta') ;
$tanggal = date('d-m-Y');
$jam     = date('H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('file_native.src.header')
     <title>Absensi - Dashboard</title>
    <!-- Membaca RFID -->
    <script type="text/javascript" src="{{asset('aset/jquery/jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
    <script type="text/javascript" src="{{asset('aset/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        setInterval(function () {
          $("#cekkartu").load("/bacakartu");
        }, 1000);
        $('#logoutModal').modal('show');
        
      });
    </script>
      <script type="text/javascript">
      $(document).ready(function () {
        setInterval(function () {
          $("#waktu").load("/waktu");
        }, 1000);
        
      });
    </script>

    
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    
    <div id="wrapper">
      <!-- Sidebar -->
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column mt-4">
        <!-- Main Content -->
        <div id="content">
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Data Guru Yang Sudah Hadir</h1>
            </div>



            <!-- Content Row -->
            <div class="card shadow">
            <div id="waktu"></div>
            </div>

            <div class="card shadow mb-4">
              <div id="cekkartu"></div>
            </div>

            
 
        <!-- End of Main Content -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->


    <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


   <!-- Bootstrap core JavaScript-->
    <script src="{{asset('aset/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('aset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('aset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('aset/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('aset/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('aset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('aset/js/demo/datatables-demo.js')}}"></script>

    <!-- <script type="text/javascript">
			$("bacakartu.php").on('load', function(){
				$('#logoutModal').modal('show');
			});
		</script> -->
  </body>
</html>
