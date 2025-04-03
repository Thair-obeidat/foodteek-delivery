<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderStatusUpdate;

class OrderStatusUpdateController extends Controller
{
    public function index()
    {
        return OrderStatusUpdate::all();
    }

    public function store(Request $request)
    {
        return OrderStatusUpdate::create($request->all());
    }

    public function show($id)
    {
        return OrderStatusUpdate::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $statusUpdate = OrderStatusUpdate::findOrFail($id);
        $statusUpdate->update($request->all());
        return $statusUpdate;
    }

    public function destroy($id)
    {
        return OrderStatusUpdate::destroy($id);
    }
}
