<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $country = Country::all();
        return view ('country.index')->with('country', $country);
    }

    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Country::create($input);
        return redirect('country')->with('flash_message', 'Country Addedd!');
    }

    public function show($id)
    {
        $country = Country::find($id);
        return view('country.show')->with('country', $country);
    }

    public function edit($id)
    {
        $country = Country::find($id);
        return view('country.edit')->with('country', $country);
    }

    public function update(Request $request, $id)
    {
        $country = Country::find($id);
        $input = $request->all();
        $country->update($input);
        return redirect('country')->with('flash_message', 'country Updated!');
    }

    public function destroy($id)
    {
        Country::destroy($id);
        return redirect('country')->with('flash_message', 'Country deleted!');
    }
}
