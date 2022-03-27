@include('file_native.src.header')
<?php 
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

    date_default_timezone_set('Asia/Jakarta') ;
    $tanggal = date('Y-m-d');
    $jam     = date('H:i:s');


 //membaca Jumlah Karyawan Yang Hadir
    $karyawan=DB::table('karyawanHadir')->select(DB::raw('COUNT(*) as karyawanHadir'))
        ->from('absensi')->where('tanggal','=','$tanggal')
        ->get();
        foreach ($karyawan as $row )
          {
            $karyawanHadir = $row->karyawanHadir;
          }

      
    $jumlahKaryawan=DB::table('karyawan')->select(DB::raw('COUNT(*) as totalKaryawan'))
          ->from('karyawan')
          ->get();
          foreach ($jumlahKaryawan as $sql )
          {
            $totalKaryawan = $sql->totalKaryawan;
          }

    $persentase = $karyawanHadir/$totalKaryawan*100

//  echo $karyawanHadir;
?>


 <!-- Earnings (Monthly) Card Example -->
 <div class="row">
 <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Yang Hadir</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $karyawanHadir; ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Presentase Kedatangan</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo ceil ($persentase); ?>%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $persentase; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tanggal</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tanggal; ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Waktu:</div>
                        
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jam; ?></div>
                        
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                    </div>
                </div>
                </div>

              </div>
              </div>