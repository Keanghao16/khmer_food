<?php

namespace App\Http\Controllers\Staff;

use App\DataTables\TodaysOrderDataTable;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StaffDashboardController extends Controller
{
    function index(TodaysOrderDataTable $dataTable): View|JsonResponse
    {
        $todaysOrders = Order::whereDate('created_at', now()->format('Y-m-d'))->count();
        $todaysEarnings = Order::whereDate('created_at', now()->format('Y-m-d'))->where('order_status', 'delivered')->sum('grand_total');

        $thisMonthsOrders = Order::whereMonth('created_at', now()->month)->count();
        $thisMonthsEarnings = Order::WhereMonth('created_at', now()->month)->where('order_status', 'delivered')->sum('grand_total');

        $thisYearOrders = Order::whereYear('created_at', now()->year)->count();
        $thisYearEarnings = Order::WhereYear('created_at', now()->year)->where('order_status', 'delivered')->sum('grand_total');

        $totalOrders = Order::count();
        $totalEarnings = Order::where('order_status', 'delivered')->sum('grand_total');

        $totalUsers = User::where('role', 'user')->count();
        $totalStaffs = User::where('role', 'staff')->count();
        $totalAdmins = User::where('role', 'admin')->count();

        $totalProducts = Product::count();

        return $dataTable->render('staff.dashboard.index', compact(
            'todaysOrders',
            'todaysEarnings',
            'thisMonthsOrders',
            'thisMonthsEarnings',
            'thisYearOrders',
            'thisYearEarnings',
            'totalOrders',
            'totalEarnings',
            'totalUsers',
            'totalStaffs',
            'totalAdmins',
            'totalProducts',
        ));
    }
}