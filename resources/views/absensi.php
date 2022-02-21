<?php
    date_default_timezone_set('Asia/Makassar');
    $tanggal = date('d-m-Y');
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "header.php"; ?>
    <title>Absensi</title>
</head>

<body id="page-top"> 

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Absensi</h1>
                    <p class="mb-4">Data Rekab Kehadiran Guru dan Karyawan SMK Wikrama Bogor</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kehadiran</h6>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px; text-align: center">No.</th>
                                        <th style="text-align: center">Nama</th>
                                        <th style="text-align: center">Tanggal</th>
                                        <th style="text-align: center">Jam Datang</th>
                                        <th style="text-align: center">Jam Pulang</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th style="width: 10px; text-align: center">No.</th>
                                        <th style="text-align: center">Nama</th>
                                        <th style="text-align: center">Tanggal</th>
                                        <th style="text-align: center">Jam Datang</th>
                                        <th style="text-align: center">Jam Pulang</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            include "koneksi.php";

                                            //baca tabel absensi dan relasikan dengan tabel karyawan berdasarkan nomor kartu RFID untuk tanggal hari ini

                                            //baca tanggal saat ini
                                            date_default_timezone_set('Asia/Makassar');
                                            $tanggal = date('Y-m-d');
                                          //  $tanggal = $_POST['nokartu'];
                                            // if(isset($_POST['btnSimpan'])){
                                            //     $tanggal = $_POST['nokartu'];
                                                
                                            // }

                                            //filter absensi berdasarkan tanggal saat ini
                                            $sql = mysqli_query($konek, "select b.nama, b.id, a.tanggal, a.jam_masuk, a.jam_pulang from absensi a, karyawan b where a.nokartu=b.nokartu AND a.tanggal='$tanggal' ORDER BY a.tanggal DESC, a.jam_masuk ASC");

                                            $no = 0;
                                            while($data = mysqli_fetch_array($sql))
                                            {
                                                $no++;
                                        ?>
                                        <tr>
                                            <td> <?php echo $no; ?> </td>
                                            <td> <?php echo $data['nama']; ?> </td>
                                            <td> <?php echo $data['tanggal']; ?> </td>
                                            <td> <?php echo $data['jam_masuk']; ?> </td>
                                            <td> <?php echo $data['jam_pulang']; ?> </td>
                                            
                                            
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
 

    <?php include "footer.php"; ?>
    

</body>

</html>