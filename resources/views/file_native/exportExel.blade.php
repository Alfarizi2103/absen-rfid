<?php 
include "koneksi.php";
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Absensi</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 10px auto;
		border-collapse: collapse;
	}
	table th,table td{
		border: 1px solid #3c3c3c;
		padding: 3px 3px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
    
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Absensi".$_GET['search'].".xls");
	?>
 
	<left>
		<h5>Data Hadir Guru dan Staff SMK Wikrama <br/> Tanggal : <?php echo $_GET['search']?></h5>
</left>
 
    <div class="card-body">
        <div class="table-responsive">
        <table border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th style="width: 10px; text-align: center">No.</th>
            <th style="text-align: left">Nama</th>
            <th style="text-align: left">Tanggal</th>
            <th style="text-align: left">Jam Datang</th>
            <th style="text-align: left">Jam Pulang</th>
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

</body>
</html>