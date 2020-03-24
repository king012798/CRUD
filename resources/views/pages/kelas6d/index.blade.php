@extends('layouts.app')
@section('content')

<section class="mr-3 ml-3">
    <div class="header">
        <h1>Absensi Kelas 6D</h1>
    </div>
    <div class="body">
        <div class="card rounded" style="background: #eee">
            <div class="container">
                <div class="header">
                    <div class="mb-2"><a href="{{route('kelas6d.create')}}" class="btn btn-primary btn-sm mt-2">Create</a></div>
                </div>
                <hr>
                <div class="body">
                    <table class="table table-hover table-bordered">
                        <thead style="background: #9e9e9e">
                            <tr>
                                <th>NAMA</th>
                                <th>Nim</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas6d as $kelas6d)
                                <tr>
                                    <td>{{ $kelas6d->nama }}</td>
                                    <td>{{ $kelas6d->nim }}</td>
                                    <td>{{ $kelas6d->kelas }}</td>
                                    {{-- <td>{{ $kelas6a->kelas6a }}</td> --}}
                                    <td>
                                        <form action="{{ route('kelas6d.destroy', $kelas6d->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="{{ route('kelas6d.show', $kelas6d->id) }}" class="btn btn-secondary btn-sm">Show</a>
                                            <a href="{{ route('kelas6d.edit', $kelas6d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
</section>

@endsection
