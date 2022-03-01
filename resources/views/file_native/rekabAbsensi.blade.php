<?php
    date_default_timezone_set('Asia/Makassar');
    $tanggal = date('d-m-Y');
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "header.php"; ?>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
                        <div class="row mt-4 ml-2">
                                <div class="col-md-4">
                                    <form action="" method="GET">
                                        <div class="input-group">
                                            <input type="date" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                            <button type="submit" class="btn btn-primary ml-2">Tampil</button>
                                        </div>
                                    </form>
                                    <form action="exportExel.php" method="GET" class="mt-2">
                                        <div class="input-group">
                                            <input type="date" visibility: hidden name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Unduh Exel</button>
                                        </div>
                                    </form>
                                </div>
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
                            <tbody>
                                <?php 
                                    //include "koneksi.php";
                                    $con = mysqli_connect("localhost","root","","absen_rfid");


                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                       // $query = "SELECT * FROM users WHERE CONCAT(firstname,lastname,email) LIKE '%$filtervalues%' ";
                                        $query = "select b.nama, b.id, a.tanggal, a.jam_masuk, a.jam_pulang from absensi a, karyawan b where a.nokartu=b.nokartu AND a.tanggal='$filtervalues' ORDER BY a.tanggal DESC, a.jam_masuk ASC";
                                        
                                        //$sql = mysqli_query($konek, "select b.nama, b.id, a.tanggal, a.jam_masuk, a.jam_pulang from absensi a, karyawan b where a.nokartu=b.nokartu AND a.tanggal='$tanggal' ORDER BY a.tanggal DESC, a.jam_masuk ASC");

                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        { $no = 0;
                                            foreach($query_run as $items)
                                            {
                                                $no++;
                                                ?>
                                                <tr>
                                                <td> <?php echo $no; ?> </td>
                                                <td><?= $items['nama']; ?></td>
                                                <td><?= $items['tanggal']; ?></td>
                                                <td><?= $items['jam_masuk']; ?></td>
                                                <td><?= $items['jam_pulang']; ?></td>
                                                   
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="5">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</body>

</html>