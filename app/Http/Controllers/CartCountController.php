<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartCountController extends Controller
{
    public function count(Request $request)
    {
        $count = CartItem::where('user_id', auth()->id())->sum('quantity');
        return response()->json(['count' => $count]);
        
    }
}
