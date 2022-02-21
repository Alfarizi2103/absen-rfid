<!-- proses penyimpanan -->

<?php 
	include "koneksi.php";

	//jika tombol simpan diklik
	if(isset($_POST['btnSimpan']))
	{
		//baca isi inputan form
		$nokartu = $_POST['nokartu'];
		$nama    = $_POST['nama'];
		$alamat  = $_POST['alamat'];

		//simpan ke tabel karyawan
		$simpan = mysqli_query($konek, "insert into karyawan(nokartu, nama, alamat)values('$nokartu', '$nama', '$alamat')");

		//jika berhasil tersimpan, tampilkan pesan Tersimpan,
		//kembali ke data karyawan
		if($simpan)
		{
			echo "
				<script>
					alert('Tersimpan');
					location.replace('datakaryawan.php');
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('Gagal Tersimpan');
					location.replace('datakaryawan.php');
				</script>
			";
		}

	}

	//kosongkan tabel tmprfid
	mysqli_query($konek, "delete from tmprfid");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "header.php"; ?>	

	<!-- pembacaan no kartu otomatis -->
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$("#norfid").load('nokartu.php')
			}, 0);  //pembacaan file nokartu.php, tiap 1 detik = 1000
		});
	</script>

	<title>Tambah Data Karyawan</title>

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
            <!-- End of Sidebar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Karyawan</h1>
                    <p class="mb-4">Data Guru dan Karyawan SMK Wikrama Bogor</p>
					<a href="tambah.php" class="mb-2 btn btn-primary" role="button" data-bs-toggle="button">Tambah Data</a>



                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
							<form method="POST">
								<div id="norfid"></div>

								<div class="form-group">
									<label>Nama Karyawan</label>
									<input type="text" name="nama" id="nama" placeholder="nama karyawan" class="form-control" style="width: 400px">
								</div>
								<div class="form-group">
									<label>Jurusan</label>
									<textarea class="form-control" name="alamat" id="alamat" placeholder="Jurusan" style="width: 400px"></textarea>
								</div>

								<button class="btn btn-primary" name="btnSimpan" id="btnSimpan">Simpan</button>
							</form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
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

    <?php include "footer.php"; ?>

</body>

</html>