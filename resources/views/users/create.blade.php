@extends('layouts.app')
@section('title')
Tambah User - {{ config('app.name') }}
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="card-header">
                    <h5 class="m-0 pt-1 font-weight-bold float-left">Tambah User</h5>
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary float-right ">Kembali</a>
                </div>
                <div class="card-body">
                    <form action=" {{ route('users.store') }} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="text-center mb-3">
                            <img id="image" src="{{ Storage::url('default.jpg') }}" alt="{{ Storage::url('default.jpg') }}" class="img-thumbnail mb-1">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="foto" class="float-left col-form-label">Foto</label></div>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                    <label class="custom-file-label" for="foto">Ubah Foto</label>
                                </div>
                            </div>
                        </div><div class="form-group row">
                            <div class="col-sm-2"><label for="no_kartu" class="float-left col-form-label">no_kartu</label></div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('no_kartu') is-invalid @enderror" id="no_kartu" name="no_kartu" value="{{ old('no_kartu') }}">
                                @error('no_kartu') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div><div class="form-group row">
                            <div class="col-sm-2"><label for="nik" class="float-left col-form-label">nik</label></div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}">
                                @error('nik') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="email" class="float-left col-form-label">email</label></div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="nama" class="float-left col-form-label">Nama</label></div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                                @error('nama') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="role" class="float-left col-form-label">Sebagai</label></div>
                            <div class="col-sm-10">
                                <select class="form-control @error('role') is-invalid @enderror" name="role" id="role">
                                    <option value="">Pilih</option>
                                    <option value="2" {{ old('role') == 2 ? 'selected' : '' }}>Pegawai</option>
                                </select>
                                @error('role') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="jk" class="float-left col-form-label">Gender</label></div>
                            <div class="col-sm-10">
                                <select class="form-control @error('jk') is-invalid @enderror" name="jk" id="jk">
                                    <option value="">Pilih</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jk') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="password" class="float-left col-form-label">password</label></div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                                @error('password') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
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