@extends('layouts.home')

@section('title')
    Welcome - {{ config('app.name') }}
@endsection

@section('content')
    <div class="container">
        <div class="card shadow h-100">
            <div class="card-header">
                <h5 class="m-0 pt-1 font-weight-bold text-center">Kehadiran Hari Ini {{ date('d-m-Y') }}</h5>
                <!-- <form class="float-right" action="{{ route('kehadiran.excel-users') }}" method="get">
                    <input type="hidden" name="tanggal" value="{{ request('tanggal', date('Y-m-d')) }}">
                    <button class="btn btn-sm btn-primary" type="submit" title="Download"><i class="fas fa-download"></i></button>
                </form> -->
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- <div class="col-lg-6 mb-1">
                        <form action="{{ route('kehadiran.search') }}" method="get">
                            <div class="form-group row">
                                <label for="tanggal" class="col-form-label col-sm-3">Tanggal</label>
                                <div class="input-group col-sm-9">
                                    <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ request('tanggal', date('Y-m-d')) }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="submit">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> -->
                    <div class="col-lg-6">
                        <div class="float-right">
                            
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No Kartu</th>
                                <th>email</th>
                                <th>Keterangan</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Total Jam</th>
                            </tr>
                        </thead>
                        <tbody class="data">
                            {{-- @if (!$presents->count())
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data yang tersedia</td>
                                </tr>
                            @else
                                @foreach ($presents as $present)
                                    <tr>
                                        <th>{{ $rank++ }}</th>
                                        <td>{{ $present->user->nama }}</td>
                                        <td>{{ $present->user->no_kartu }}</td>
                                        <td>{{ $present->user->email }}</a></td>
                                        <td>{{ $present->keterangan }}</td>
                                        @if ($present->jam_masuk)
                                            <td>{{ date('H:i:s', strtotime($present->jam_masuk)) }}</td>
                                        @else
                                            <td>-</td>
                                        @endif
                                        @if($present->jam_keluar)
                                            <td>{{ date('H:i:s', strtotime($present->jam_keluar)) }}</td>
                                        
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                    </tr>
                                @endforeach 
                            @endif --}}
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
@endsection