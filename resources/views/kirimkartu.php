<?php
	include "koneksi.php";

	//baca nomor kartu dari NodeMCU
	$nokartu = $_GET['nokartu'];
	$suhu = $_GET['suhu'];
	//kosongkan tabel tmprfid
	mysqli_query($konek, "delete from tmprfid");


	$cari_karyawan = mysqli_query($konek, "select * from karyawan where nokartu='$nokartu'");
	//ambil nama karyawan
	$data_karyawan = mysqli_fetch_array($cari_karyawan);
	$nama = $data_karyawan['nama'];


	// if($suhu < 35){
	// 	echo "Low";
	// } else if($suhu > 38){
	// 	echo "High";
	// } else {
	// 	echo "$nama";
	// 	$simpan = mysqli_query($konek, "insert into tmprfid(nokartu,suhu)values('$nokartu','$suhu')");
	// }




	//simpan nomor kartu yang baru ke tabel tmprfid
	//$simpan = mysqli_query($konek, "insert into tmprfid(nokartu)values('$nokartu')");
	$simpan = mysqli_query($konek, "insert into tmprfid(nokartu,suhu)values('$nokartu','$suhu')");
	
	
	if($simpan)
		echo "$nama";
	else
		echo "Gagal";


		
?>