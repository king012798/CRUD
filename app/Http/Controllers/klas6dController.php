<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Kelas6d;

class klas6dController extends Controller
{
    public function index(){
        $kelas6d = Kelas6d::all();
        return view('pages.kelas6d.index', compact('kelas6d'));
    }

    public function create(){
        return view('pages.kelas6d.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:3',
            'nim' => 'required',
            'kelas' => 'required'
        ]);

        $kelas6d = Kelas6d::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('kelas6d.index');
    }

    public function show($kelas6d){
        $kelas6d = Kelas6d::find($kelas6d);
        return view('pages.kelas6d.show', compact('kelas6d'));
    }

    public function edit($kelas6d){
        $kelas6d = Kelas6d::find($kelas6d);
        return view('pages.kelas6d.edit', compact('kelas6d'));
    }

    public function update(Request $request, $kelas6d){
        $this->validate($request, [
            'nama' => 'required|min:3',
            'nim' => 'required',
            'kelas' => 'required'
        ]);

        $kelas6d = Kelas6d::findOrfail($kelas6d);
        $kelas6d->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('kelas6d.index');
    }
    
    public function destroy($kelas6d){
        $kelas6d = Kelas6d::findOrFail($kelas6d);
        $kelas6d->delete();

        return redirect()->route('kelas6d.index');
    }
}
