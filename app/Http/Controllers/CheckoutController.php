<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use App\Services\OrderService;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $userCart = CartService::getItemsWithDetails();

        $userCartTotalPrices = CartService::getTotalPrices();

        return view('checkout', compact('userCart', 'userCartTotalPrices'));
    }

    public function post(Request $request)
    {
        $checkoutData = $request->only([
            'user_province',
            'user_city',
            'user_address',
            'user_postal_code',
            'user_mobile',
            'description',
        ]);

        try {
            OrderService::register($checkoutData);
        } catch (\Exception $exception) {
            return back();
        }

        return redirect()->route('account.orders');
    }
}
