<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminAddCouponsComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'
        ]);
    }
    public function storeCoupon()
    {
        $this->validate([
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'

        ]);

        $Coupons = new Coupon();
        $Coupons->code = $this->code;
        $Coupons->type = $this->type;
        $Coupons->value = $this->value;
        $Coupons->cart_value = $this->cart_value;
        $Coupons->expiry_date = $this->expiry_date;
        $Coupons->save();
        session()->flash('message', 'Coupons has been created successfully!');
        return redirect()->route('admin.coupons');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-coupons-component')->layout('layouts.base');
    }
}
