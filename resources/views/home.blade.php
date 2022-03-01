@extends('layouts.welcome')
@section('title')
    Home - {{ config('app.name') }}
@endsection
@section('content')
    
            @if ($present)
                <div class="text-center">
                    <p>
                        Check-in hari ini pukul : ({{ ($present->jam_masuk) }})
                    </p>
                        @if ($present->jam_keluar)
                            <p>Check-out hari ini pukul : ({{ $present->jam_keluar }})</p>
                            @else
                                <p>Jika pekerjaan telah selesai silahkan check-out</p>
                                    <form action="{{ route('kehadiran.check-out', ['kehadiran' => $present]) }}" method="post">
                                        @csrf @method('patch')
                                        <button class="btn btn-primary" type="submit">Check-out</button>
                                    </form>
                        @endif
                </div>
             @else
                <div class="text-center">
                        <p>Silahkan Check-in</p>
                        <form action="{{ route( 'kehadiran.check-in') }}" method="post">
                        {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <button class="btn btn-primary" type="submit">Check-in</button>
                        </form>
                    
                </div>
            @endif
        
@endsection