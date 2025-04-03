<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeliveryLocation;

class DeliveryLocationController extends Controller
{
    public function index()
    {
        return DeliveryLocation::all();
    }

    public function store(Request $request)
    {
        return DeliveryLocation::create($request->all());
    }

    public function show($id)
    {
        return DeliveryLocation::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $location = DeliveryLocation::findOrFail($id);
        $location->update($request->all());
        return $location;
    }

    public function destroy($id)
    {
        return DeliveryLocation::destroy($id);
    }
}
