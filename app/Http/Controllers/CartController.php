<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\User;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric|min:1',
            'size' => 'required|string',
            'color' => 'required|string',
        ]);

        $item = CartItem::where('user_id', auth()->id())
            ->where('product_name', $validatedData['product_name'])
            ->first();

        if (!$item) {
            $item = CartItem::create([
                'user_id' => auth()->id(),
                'product_name' => $validatedData['product_name'],
                'price' => $validatedData['price'],
                'quantity' => $validatedData['quantity'],
                'size' => $validatedData['size'],
                'color' => $validatedData['color']
            ]);
        } else {
            $item->update([
                'quantity' => $item->quantity + $validatedData['quantity']
            ]);
        }

        return response()->json($item);
    }
}
