<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;


class AdminCouponsComponent extends Component
{
    use WithPagination;
    public $searchTerm;
    public function deleteCoupon($coupon_id)
    {
        $coupon = Coupon::find($coupon_id);
        $coupon->delete();
        session()->flash('message_coupon', 'Coupon has been Delete successfully!');
    }
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $coupons = Coupon::where('code', 'LIKE', $search)->orWhere('type', 'LIKE', $search)->orWhere('value', 'LIKE', $search)->orWhere('cart_value', 'LIKE', $search)->paginate(5);

        return view('livewire.admin.admin-coupons-component', ['coupons' => $coupons])->layout('layouts.base');
    }
}
