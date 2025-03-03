<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with('reviews')->get();

        $newReviews = Review::with('shop', 'user')
            ->orderBy('created_at, desc')
            ->take(5)
            ->get();

        return Inertia::remder('Home', [
            'shops' => $shops,
        ]);
    }
}
