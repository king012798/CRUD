@extends('layouts.app')
@section('content')
<div class="ml-3 mb-3">
    <a href="{{ route('kelas6d.index') }}" class="btn btn-primary" >BACK</a>
</div>
<div class="card ml-3" style="background:#eee; width: 400px">
    
    <div class="m-3">
        <table>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td>{{ $kelas6d->id }}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $kelas6d->nama }}</td>
            </tr>
            <tr>
                <td>Nim-</td>
                <td>:</td>
                <td>{{ $kelas6d->nim }}</td>
            </tr>
        </table>
    </div>
</div>

@endsection
