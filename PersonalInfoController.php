<?php

namespace App\Http\Controllers;
use App\Models\personalinfo;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function index() {
        $infos = PersonalInfo::all();
        return view('personal.index', compact('infos'));
    }

    public function create() {
        return view('personal.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'age' => 'required|integer',
            'mobile' => 'required'
        ]);

        PersonalInfo::create($validated);
        return redirect()->route('personal.index')->with('success', 'Data Saved!');
    }

    public function edit($id) {
        $info = PersonalInfo::findOrFail($id);
        return view('personal.edit', compact('info'));
    }

    public function update(Request $request, $id) {
        $info = PersonalInfo::findOrFail($id);
        $info->update($request->all());
        return redirect()->route('personal.index')->with('success', 'Data Updated!');
    }

    public function destroy($id) {
        PersonalInfo::findOrFail($id)->delete();
        return redirect()->route('personal.index')->with('success', 'Data Deleted!');
    }
}
