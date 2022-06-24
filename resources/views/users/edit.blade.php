@extends('layouts.app')
@section('title')
Ubah User - {{ config('app.name') }}
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="card-header">
                    <h5 class="m-0 pt-1 font-weight-bold float-left">Ubah User</h5>
                    <a href="{{ route('users.show',$user) }}" class="btn btn-sm btn-secondary float-right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action=" {{ route('users.update', $user->id) }} " method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="text-center mb-3">
                            <img id="image" src="{{ Storage::url($user->foto ) }}" alt="{{ $user->foto }}" class="img-thumbnail mb-1">
                        </div>
                       
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="no_kartu" class="float-right col-form-label">no_kartu</label></div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('no_kartu') is-invalid @enderror" id="no_kartu" name="no_kartu" value="{{ $user->no_kartu }}">
                                @error('no_kartu') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="nik" class="float-right col-form-label">nik</label></div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ $user->nik }}">
                                @error('nik') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="email" class="float-right col-form-label">email</label></div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                                @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="nama" class="float-right col-form-label">Nama</label></div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $user->nama }}">
                                @error('nama') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="role" class="float-right col-form-label ">Sebagai</label></div>
                            <div class="col-sm-10">
                                <select class="form-control @error('role') is-invalid @enderror" name="role" id="role" value="{{ $user->role }}">
                                    <option value="">Pilih</option>
                                    <option value="1" {{ old('role',$user->role_id) == 1 ? 'selected' : '' }}>Admin</option>
                                    <option value="2" {{ old('role',$user->role_id) == 2 ? 'selected' : '' }}>Pegawai</option>
                                </select>
                                @error('role') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="jk" class="float-right col-form-label ">Gender</label></div>
                            <div class="col-sm-10">
                                <select class="form-control @error('jk') is-invalid @enderror" name="jk" id="jk" value="{{ $user->jk }}">
                                    <option value="">Pilih</option>
                                    <option value="Pria"  {{ old('jk',$user->jk) == 'Pria' ? 'selected' : '' }} >Pria</option>
                                    <option value="Perempuan" {{ old('jk',$user->jk) == 'Perempuan' ? 'selected' : '' }} >Perempuan</option>
                                </select>
                                @error('jk') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success btn-block">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $('document').ready(function(){
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            readURL(this);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    });
</script>
@endpush