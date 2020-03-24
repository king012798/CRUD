<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Kelas6a;


class klas6aController extends Controller
{
    public function index(){
        $kelas6a = Kelas6a::all();
        return view('pages.kelas6a.index', compact('kelas6a'));
    }

    public function create(){
        return view('pages.kelas6a.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:3',
            'nim' => 'required',
            'kelas' => 'required'
        ]);

        $kelas6a = Kelas6a::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('kelas6a.index');
    }

    public function show($kelas6a){
        $kelas6a = Kelas6a::find($kelas6a);
        return view('pages.kelas6a.show', compact('kelas6a'));
    }

    public function edit($kelas6a){
        $kelas6a = Kelas6a::find($kelas6a);
        return view('pages.kelas6a.edit', compact('kelas6a'));
    }

    public function update(Request $request, $kelas6a){
        $this->validate($request, [
            'nama' => 'required|min:3',
            'nim' => 'required',
            'kelas' => 'required'
        ]);

        $kelas6a = Kelas6a::findOrfail($kelas6a);
        $kelas6a->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('kelas6a.index');
    }
    
    public function destroy($kelas6a){
        $kelas6a = Kelas6a::findOrFail($kelas6a);
        $kelas6a->delete();

        return redirect()->route('kelas6a.index');
    }
}
