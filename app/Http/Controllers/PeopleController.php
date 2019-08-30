<?php

namespace App\Http\Controllers;

use App\City;
use App\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::with('city')->paginate(5);
        return view('home', compact('people'));
    }

    public function create()
    {
        $cities = City::all();
        return view('create', compact('cities'));
    }

    public function store(Request $request)
    {
        $people = new People;
        $people->name = $request->name;
        $people->city_id = $request->city;
        $people->save();

        return redirect()->route('people');
    }

    public function edit($id)
    {
        $cities = City::all();
        $people = People::find($id)->first();
        return view('edit', compact('people', 'cities'));
    }

    public function update(Request $request, $id)
    {
        $people = People::find($id);
        $people->name = $request->name;
        $people->city_id = $request->city;
        $people->save();

        return redirect()->route('people');
    }

    public function destroy($id)
    {
        $people = People::find($id);
        $people->delete();

        return redirect()->route('people');
    }
}
