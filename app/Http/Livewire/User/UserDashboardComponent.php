<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->get()->take(10);
        //Tong chi phi
        $totalCost = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->sum('total');
        //Da mua
        $totalPurchased = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->count();
        //Da giao hang
        $totalDeliverd = Order::where('status', 'delivered')->where('user_id', Auth::user()->id)->count();
        //Da huy hang
        $totalCancel = Order::where('status', 'canceled')->where('user_id', Auth::user()->id)->count();
        return view('livewire.user.user-dashboard-component', ['orders' => $orders, 'totalCost' => $totalCost, 'totalPurchased' => $totalPurchased, 'totalDeliverd' => $totalDeliverd, 'totalCancel' => $totalCancel])->layout('layouts.base');
    }
}
