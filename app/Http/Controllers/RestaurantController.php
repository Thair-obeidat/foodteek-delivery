<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        return Restaurant::all();
    }

    public function store(Request $request)
    {
        return Restaurant::create($request->all());
    }

    public function show($id)
    {
        return Restaurant::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->update($request->all());
        return $restaurant;
    }

    public function destroy($id)
    {
        return Restaurant::destroy($id);
    }
}
