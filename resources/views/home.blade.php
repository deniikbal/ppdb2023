@extends('layouts.app')

@section('custom_styles')
@endsection

@section('content')
    <div class="page-body">
        <div class="container-xl">

            <div class="alert alert-danger">
                <div class="alert-title">
                    {{ __('Welcome') }} {{ auth()->user()->name ?? null }}
                </div>
                <div class="text-muted">
                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <p>Selamat Datang di Web PPDB {{ config('app.name') }}</p>
                    <p>Langkah Selanjutnya Silahkan Daftar Calon Siswa Dengan Klik Link Berikut
                        <a href="#" class="badge bg-lime" data-bs-toggle="modal" data-bs-target="#modal-simple">
                            Daftar Calon Siswa
                        </a>
                    </p>
                </div>

                @include('modal.createstudent')
            </div>

        </div>
    </div>
@endsection
