@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Kategori</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('kategori.update', ['id' => $kategori->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="nama_kategori" class="col-md-4 col-form-label text-md-end">{{ __('nama kategori') }}</label>
                            <div class="col-md-6">
                                <input id="nama_kategori" type="text" class="form-control @error('nama_kategori') is-invalid @enderror"
                                    name="nama_kategori" value="{{ $kategori->nama_kategori }}" required autocomplete="nama_kategori" autofocus>
                                @error('nama_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                                <a class="btn btn-link" href="{{ route('kategori.index') }}">
                                    {{ __('Kembali') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
