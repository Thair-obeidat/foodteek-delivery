<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeliveryCaptain;

class DeliveryCaptainController extends Controller
{
    public function index()
    {
        return response()->json(DeliveryCaptain::all());
    }

    public function store(Request $request)
    {
        $captain = DeliveryCaptain::create($request->all());
        return response()->json($captain, 201);
    }

    public function show($id)
    {
        return response()->json(DeliveryCaptain::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $captain = DeliveryCaptain::findOrFail($id);
        $captain->update($request->all());
        return response()->json($captain);
    }

    public function destroy($id)
    {
        DeliveryCaptain::destroy($id);
        return response()->json(null, 204);
    }
}
