<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
class CityController extends Controller
{
    public function index()
    {
        $cities = City::with('country')->get();
        $country = Country::with('cities')->get();


        return view('city.index', compact('cities','country'));
    }

    public function create()
    {
        $cities = City::with('country')->get();
        $country = Country::with('cities')->get();

        return view('city.create', compact('cities','country'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        City::create($input);
        return redirect('city')->with('flash_message', 'City Addedd!');
    }

    public function show($id)
    {
        $city = City::find($id);
        return view('city.show')->with('city', $city);
    }

    public function edit($id)
    {
        $city = City::find($id);
        $country = Country::with('cities')->get();

        return view('city.edit', compact('city','country'));
    }

    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $input = $request->all();
        $city->update($input);
        return redirect('city')->with('flash_message', 'city Updated!');
    }

    public function destroy($id)
    {
        City::destroy($id);
        return redirect('city')->with('flash_message', 'City deleted!');
    }
}
