<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::withTrashed()->get();
        //$locations = location::withTrashed()->paginate(2)->get();
        return view("locations.index", [
            "locations" => $locations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'street' => 'required',
            'address' => 'required',
            'city' => 'required',
            'pin' => 'required',
            'contact_person' => 'required',
            'mobile' => 'required'
        ]);

        Location::create($values + ['created_user_lid' => auth()->user()->lid]);
        $created_location = collect(Location::all())->last();

        $message = "<strong>Success!</strong> location captured successfully.
                    <a href=\"#\" class=\"alert-link\">View Details</a>
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>";
        return redirect()->route('locations.index')
            ->with("success", $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return view("locations.details", [
            "locations" => $location
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        return view("locations.edit", [
            "locations" => $location
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'name' => 'required',
            'street' => 'required',
            'address' => 'required',
            'city' => 'required',
            'pin' => 'required',
            'contact_person' => 'required',
            'mobile' => 'required'
        ]);
        $location->update($request->all());

        $location->update($values + ['created_user_lid' => auth()->user()->lid]);

        $message = "<strong>Notice!</strong> location updated successfully.
                    <a href=\"#\" class=\"alert-link\">View Details</a>
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>";

        return redirect()->route('locations.index')
            ->with("notice", $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        Location::destroy($location->id);

        $message = "<strong>Notice!</strong> location deleted successfully.
                    <a href=\"#\" class=\"alert-link\">View Details</a>
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>";
        return redirect()->route('locations.index')
            ->with("notice", $message);
    }
}
