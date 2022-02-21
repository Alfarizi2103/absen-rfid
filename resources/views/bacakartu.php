<?php 
	include "koneksi.php";
  include "header.php";
	//baca tabel status untuk mode absensi
	$sql = mysqli_query($konek, "select * from status");
	$data = mysqli_fetch_array($sql);
	$mode_absen = $data['mode'];

	//uji mode absen
  date_default_timezone_set('Asia/jakarta') ;
			$tanggal = date('Y-m-d');
			$jam     = date('H:i:s');

  // if($jam > '12:00:00'){
  //   mysqli_query($konek, "update status set mode = 2");
  //  } else if ($jam < '12:00:00'){
  //   mysqli_query($konek, "update status set mode = 1");
  //  }

	$mode = "";
	if($mode_absen==1)
		$mode = "Datang";
	else if($mode_absen==2)
		$mode = "Pulang";

	//baca tabel tmprfid
	@$baca_kartu = mysqli_query($konek, "select * from tmprfid");
	@$data_kartu = mysqli_fetch_array($baca_kartu);
	@$nokartu    = $data_kartu['nokartu'];
  @$suhu    = $data_kartu['suhu'];
	
?>
<div class="container-fluid" style="text-align: center;">
	<?php if($nokartu=="") { ?>
		

	<h3 class="h3 mb-0 text-gray-800"> Absen : <?php echo $mode; ?> </h3>
	<h3 class="h3 mb-0 text-gray-800">Silahkan Tempelkan Kartu RFID Anda</h3>
	

	<?php } else {
		//cek nomor kartu RFID tersebut apakah terdaftar di tabel karyawan
		$cari_karyawan = mysqli_query($konek, "select * from karyawan where nokartu='$nokartu'");
		$jumlah_data = mysqli_num_rows($cari_karyawan);

		if($jumlah_data==0)
			echo "<h1>Maaf! Kartu Tidak Dikenali</h1>";
		else
		{
			//ambil nama karyawan
			$data_karyawan = mysqli_fetch_array($cari_karyawan);
			$nama = $data_karyawan['nama'];

			//tanggal dan jam hari ini
			date_default_timezone_set('Asia/jakarta') ;
			$tanggal = date('Y-m-d');
			$jam     = date('H:i:s');

			//cek di tabel absensi, apakah nomor kartu tersebut sudah ada sesuai tanggal saat ini. Apabila belum ada, maka dianggap absen masuk, tapi kalau sudah ada, maka update data sesuai mode absensi
			$cari_absen = mysqli_query($konek, "select * from absensi where nokartu='$nokartu' and tanggal='$tanggal'");
			//hitung jumlah datanya
			$jumlah_absen = mysqli_num_rows($cari_absen);
			if($jumlah_absen == 0)
			{
				
        echo "<h1>Selamat Datang <br> $nama</h1>";
				mysqli_query($konek, "insert into absensi(nokartu, tanggal, jam_masuk, suhu)values('$nokartu', '$tanggal', '$jam', $suhu)");
			}
			else
			{
			//update sesuai pilihan mode absen
      if($mode_absen == 2)
      {
        echo "<h1>Selamat Jalan <br> $nama</h1>";
        mysqli_query($konek, "update absensi set jam_pulang='$jam' where nokartu='$nokartu' and tanggal='$tanggal'");
      }
			}
		}

		//kosongkan tabel tmprfid
		mysqli_query($konek, "delete from tmprfid");
	} ?>
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
                                <th style="text-align: center">Jam Masuk</th>
                                <th style="text-align: center">Jam Pulang</th>
                                <th style="text-align: center">Suhu</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th style="width: 10px; text-align: center">No.</th>
                                <th style="text-align: center">Nama</th>
                                <th style="text-align: center">Jam Masuk</th>
                                <th style="text-align: center">Jam Pulang</th>
                                <th style="text-align: center">Suhu</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    include "koneksi.php";

                                    //baca tabel absensi dan relasikan dengan tabel karyawan berdasarkan nomor kartu RFID untuk tanggal hari ini

                                    //baca tanggal saat ini
                                    date_default_timezone_set('Asia/Jakarta');
                                    $tanggal = date('Y-m-d');

                                    //filter absensi berdasarkan tanggal saat ini
                                    if($mode_absen == 1)
                                      {
                                        $sql = mysqli_query($konek, "select b.nama, b.id, a.tanggal, a.jam_masuk, a.jam_pulang, a.suhu from absensi a, karyawan b where a.nokartu=b.nokartu and a.tanggal='$tanggal' ORDER BY  a.jam_masuk DESC, a.jam_pulang Desc");
                                      }else if($mode_absen == 2)
                                      {
                                        $sql = mysqli_query($konek, "select b.nama, b.id, a.tanggal, a.jam_masuk,  a.jam_pulang, a.suhu from absensi a, karyawan b where a.nokartu=b.nokartu and a.tanggal='$tanggal' ORDER BY  a.jam_pulang Desc, a.jam_masuk DESC");
                                      }
                                   
                                    $no = 0;
                                    while($data = mysqli_fetch_array($sql))
                                    {
                                        $no++;
                                ?>
                                <tr>
                                    <td> <?php echo $no; ?> </td>
                                    <td> <?php echo $data['nama']; ?> </td>
                                    <td> <?php echo $data['jam_masuk']; ?> </td>
                                    <td> <?php echo $data['jam_pulang']; ?> </td>
                                    <td> <?php echo $data['suhu']; ?> </td>
                                    
                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


		</div>
		<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModal">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		<script type="text/javascript">
			$(Window).on('load', function(){
				$('#logoutModal').modal('show');
			});
		</script>
