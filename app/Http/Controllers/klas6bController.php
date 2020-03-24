<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Kelas6b;

class klas6bController extends Controller
{
    public function index(){
        $kelas6b = Kelas6b::all();
        return view('pages.kelas6b.index', compact('kelas6b'));
    }

    public function create(){
        return view('pages.kelas6b.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:3',
            'nim' => 'required',
            'kelas' => 'required'
        ]);

        $kelas6b = Kelas6b::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('kelas6b.index');
    }

    public function show($kelas6b){
        $kelas6b = Kelas6b::find($kelas6b);
        return view('pages.kelas6b.show', compact('kelas6b'));
    }

    public function edit($kelas6b){
        $kelas6b = Kelas6b::find($kelas6b);
        return view('pages.kelas6b.edit', compact('kelas6b'));
    }

    public function update(Request $request, $kelas6b){
        $this->validate($request, [
            'nama' => 'required|min:3',
            'nim' => 'required',
            'kelas' => 'required'
        ]);

        $kelas6b = Kelas6b::findOrfail($kelas6b);
        $kelas6b->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('kelas6b.index');
    }
    
    public function destroy($kelas6b){
        $kelas6b = Kelas6b::findOrFail($kelas6b);
        $kelas6b->delete();

        return redirect()->route('kelas6b.index');
    }
}
