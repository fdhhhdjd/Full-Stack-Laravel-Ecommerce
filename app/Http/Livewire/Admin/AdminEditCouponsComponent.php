<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminEditCouponsComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $coupon_id;
    public function mount($coupon_id)
    {
        $this->coupon_id = $coupon_id;
        $category = coupon::where('id', $coupon_id)->first();
        $this->code = $category->code;
        $this->type = $category->type;
        $this->value = $category->value;
        $this->cart_value = $category->cart_value;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric'
        ]);
    }
    public function editStoreCoupon()
    {
        $Coupons = Coupon::find($this->coupon_id);
        $this->validate([
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric'
        ]);

        $Coupons->code = $this->code;
        $Coupons->type = $this->type;
        $Coupons->value = $this->value;
        $Coupons->cart_value = $this->cart_value;
        $Coupons->save();
        session()->flash('message', 'Coupons has been Edit successfully!');
        return redirect()->route('admin.coupons');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-coupons-component')->layout('layouts.base');
    }
}
