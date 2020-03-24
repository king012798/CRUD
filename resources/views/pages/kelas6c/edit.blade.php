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
                <form action="{{ route('kelas6c.update', $kelas6c->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="">NAMA</label>
                        <input type="text" name="nama" class="form-control" value="{{ $kelas6c->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="">Nim</label>
                        <input type="text" name="nim"  class="form-control" value="{{ $kelas6c->nim }}">
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input type="text" name="kelas"  class="form-control" value="{{ $kelas6c->kelas }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary float-right">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
