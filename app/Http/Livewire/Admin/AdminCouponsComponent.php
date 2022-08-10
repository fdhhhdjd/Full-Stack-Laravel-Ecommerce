<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;


class AdminCouponsComponent extends Component
{
    use WithPagination;
    public function deleteCoupon($coupon_id)
    {
        $coupon = Coupon::find($coupon_id);
        $coupon->delete();
        session()->flash('message_coupon', 'Coupon has been Delete successfully!');
    }
    public function render()
    {
        $coupons = Coupon::paginate(5);
        return view('livewire.admin.admin-coupons-component', ['coupons' => $coupons])->layout('layouts.base');
    }
}
