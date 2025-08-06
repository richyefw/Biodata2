<?php

namespace App\Http\Controllers;

use App\Models\Warteg;
use Illuminate\Http\Request;

class WartegController extends Controller
{
    public function index()
    {
       return view('students.index', ['wartegs' => Warteg::latest()->paginate(5)])
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'ket' => 'required',
        ]);

        warteg::create($request->all());

        return redirect()->route('warteg.index')->with('success', 'Data berhasil disimpan.');
    }


    public function edit(Warteg $warteg)
    {
        return view('students.edit', compact('warteg'));
    }

    public function update(Request $request, Warteg $warteg)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'ket' => 'required',
        ]);

        $warteg->update($request->all());

        return redirect()->route('warteg.index')->with('success', 'Berhasil Update!');
    }

    public function destroy(Warteg $warteg)
    {
        $warteg->delete();

        return redirect()->route('warteg.index')->with('success', 'Berhasil Hapus!');
    }
}
