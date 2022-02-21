<?php date_default_timezone_set('Asia/Jakarta') ;
$tanggal = date('d-m-Y');
$jam     = date('H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include "header.php"; ?>
     <title>Absensi - Dashboard</title>
    <!-- Membaca RFID -->
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        setInterval(function () {
          $("#cekkartu").load("bacakartu.php");
        }, 1000);
        $('#logoutModal').modal('show');
        
      });
    </script>
      <script type="text/javascript">
      $(document).ready(function () {
        setInterval(function () {
          $("#waktu").load("waktu.php");
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- <script type="text/javascript">
			$("bacakartu.php").on('load', function(){
				$('#logoutModal').modal('show');
			});
		</script> -->
  </body>
</html>
