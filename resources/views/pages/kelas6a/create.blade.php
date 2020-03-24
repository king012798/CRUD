@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-self-center">
        <div class="card" style="background:#eee; width: 400px">
            <div class="m-3">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('kelas6a.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">NAMA</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="text" name="nim" class="form-control" value="{{ old('nim') }}">
                    </div>
                    <div class="form-group">
                        <label for="">KELAS</label>
                        <input type="text" name="kelas" class="form-control" value="{{ old('kelas') }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save" class="btn btn-primary float-right">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
