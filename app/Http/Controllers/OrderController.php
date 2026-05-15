<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $arrayName = [
            [
                'id' => 1,
                'name' => 'Leblanc House Blend',
                'price' => '500',
                'category' => 'Coffee',
                'desc' => 'The signature aromatic blend of Café Leblanc.',
                'dialogue' => 'A classic choice. It helps clear the mind, doesn\'t it?'
            ],
            [
                'id' => 2,
                'name' => 'Sojiro Special Curry',
                'price' => '1200',
                'category' => 'Food',
                'desc' => 'Rich, spicy, and comforting secret recipe.',
                'dialogue' => 'My special curry... once you taste it, you won\'t find any other.'
            ],
            [
                'id' => 3,
                'name' => 'Classic Pour-Over',
                'price' => '600',
                'category' => 'Coffee',
                'desc' => 'Pure, clean, and meticulously hand-dripped.',
                'dialogue' => 'Patience is the key to a good brew. Just like in life.'
            ],
            [
                'id' => 4,
                'name' => 'Honey-Glazed Toast',
                'price' => '800',
                'category' => 'Food',
                'desc' => 'Perfectly toasted bread with a touch of sweetness.',
                'dialogue' => 'A sweet treat to go with your coffee. Enjoy it while it\'s hot.'
            ],
        ];

        return view('order', compact('arrayName'));
    }
}
