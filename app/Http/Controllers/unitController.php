<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\unitTypeModel;

class UnitController extends Controller
{
    public function index() {
        $units = unitTypeModel::paginate(16);
        return view('units.indexListUnit', compact('units'));
    }

    public function searchUnits(Request $request) {
        $search = $request->input('search');
        $query = unitTypeModel::query();
        if(!empty($search)) {
            $query->where('unitType', 'like', '%' . $search . '%');
        }
        $units = $query->paginate(16);

        if ($request->ajax()) {
            return view('partial.listUnit', compact('units'))->render();
        }

        return view('units.indexListUnit', compact('units', 'search'));
    }

    public function store(Request $request) {
        $request->validate([
            'unitType' => 'required|string|max:255',
        ]);

        unitTypeModel::create([
            'unitType' => $request->unitType,
        ]);

        return response()->json(['message' => 'unitTypeModel added successfully!']);
        // return redirect('/units')->with('success', 'unitTypeModel created successfully!');
    }

    public function show($id) {
        $unit = unitTypeModel::find($id);
        return response()->json($unit);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'unitType' => 'required|string|max:255',
        ]);

        $unit = unitTypeModel::find($id);
        $unit->unitType = $request->unitType;
        $unit->save();

        return response()->json(['message' => 'unitTypeModel updated successfully!']);
    }

    public function destroy($id) {
        unitTypeModel::destroy($id);
        // return response()->json(['message' => 'unitTypeModel deleted successfully!']);
        return redirect('/units')->with('success', 'unitTypeModel deleted successfully!');
    }
}
