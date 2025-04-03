<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryCaptainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusUpdateController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DeliveryLocationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\NotificationController;

// 🟢 مسارات المصادقة (تسجيل الدخول والخروج والتسجيل)
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// 🟢 حماية جميع المسارات التي تحتاج إلى تسجيل دخول
Route::middleware('auth:sanctum')->group(function () {

    // 🔹 إدارة الطلبات (Orders)
    Route::apiResource('orders', OrderController::class);

    // 🔹 إدارة حالة الطلبات (Order Status Updates)
    Route::apiResource('order-status-updates', OrderStatusUpdateController::class);

    // 🔹 إدارة العملاء (Clients)
    Route::apiResource('clients', ClientController::class);

    // 🔹 إدارة مواقع التوصيل (Delivery Locations)
    Route::apiResource('delivery-locations', DeliveryLocationController::class);

    // 🔹 إدارة المطاعم (Restaurants)
    Route::apiResource('restaurants', RestaurantController::class);

    // 🔹 إدارة الإشعارات (Notifications)
    Route::apiResource('notifications', NotificationController::class);

    // 🔹 إدارة قائدي التوصيل (Captains)
    Route::apiResource('captains', DeliveryCaptainController::class);

    // 🔹 استرجاع بيانات المستخدم المسجل
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
