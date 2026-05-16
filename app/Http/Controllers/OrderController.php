<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $foods = [
            [
                'id' => 1,
                'name' => 'Leblanc House Blend',
                'price' => '500',
                'category' => 'Coffee',
                'desc' => 'The signature aromatic blend of Café Leblanc.'
            ],
            [
                'id' => 2,
                'name' => 'Sojiro Special Curry',
                'price' => '1200',
                'category' => 'Food',
                'desc' => 'Rich, spicy, and comforting secret recipe.'
            ],
            [
                'id' => 3,
                'name' => 'Classic Pour-Over',
                'price' => '600',
                'category' => 'Coffee',
                'desc' => 'Pure, clean, and meticulously hand-dripped.'
            ],
            [
                'id' => 4,
                'name' => 'Honey-Glazed Toast',
                'price' => '800',
                'category' => 'Food',
                'desc' => 'Perfectly toasted bread with a touch of sweetness.'
            ],
        ];

        return view('order', compact('foods'));
    }
}
