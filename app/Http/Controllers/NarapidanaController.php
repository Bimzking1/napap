<?php

namespace App\Http\Controllers;

use App\Models\Narapidana;
use App\Models\CaseViolation;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class NarapidanaController extends Controller
{
    public function index(){
        $narapidanas = Narapidana::with('violation')
        ->orderBy('name', 'asc')
        ->latest()
        // ->where('case', '=', 1)
        ->get();

        // dd($narapidanas);

        return view('narapidana', compact('narapidanas'));
    }

    public function create(): View
    {
        $violations = CaseViolation::get();

        return view('create_narapidana', compact('violations'));
    }

    public function store(Request $request){
        Narapidana::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request -> gender,
            'case' => $request->case,
            'sentence' => $request->sentence
        ]);
        $narapidanas = Narapidana::all();

        return redirect()->route('narapidana.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id): View
    {
        $narapidanas = Narapidana::findOrFail($id);
        $violations = CaseViolation::get();

        return view('update_narapidana', compact('narapidanas', 'violations'));
    }

    public function update(Request $request, $id) {
        Narapidana::where('id', $id)
            ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'age' => $request->age,
                    'gender' => $request -> gender,
                    'case' => $request->case,
                    'sentence' => $request->sentence
                ]);

            return redirect()->route('narapidana.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    public function destroy($id){
        Narapidana::where('id', $id)
            ->delete();

        return redirect()->route('narapidana.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }
}
