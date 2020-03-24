<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Kelas6c;

class klas6cController extends Controller
{
    public function index(){
        $kelas6c = Kelas6c::all();
        return view('pages.kelas6c.index', compact('kelas6c'));
    }

    public function create(){
        return view('pages.kelas6c.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:3',
            'nim' => 'required',
            'kelas' => 'required'
        ]);

        $kelas6c = Kelas6c::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('kelas6c.index');
    }

    public function show($kelas6c){
        $kelas6c = Kelas6c::find($kelas6c);
        return view('pages.kelas6c.show', compact('kelas6c'));
    }

    public function edit($kelas6c){
        $kelas6c = Kelas6c::find($kelas6c);
        return view('pages.kelas6c.edit', compact('kelas6c'));
    }

    public function update(Request $request, $kelas6c){
        $this->validate($request, [
            'nama' => 'required|min:3',
            'nim' => 'required',
            'kelas' => 'required'
        ]);

        $kelas6c = Kelas6c::findOrfail($kelas6c);
        $kelas6c->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('kelas6c.index');
    }
    
    public function destroy($kelas6c){
        $kelas6c = Kelas6c::findOrFail($kelas6c);
        $kelas6c->delete();

        return redirect()->route('kelas6c.index');
    }
}
