<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

// use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getFoods()
    {
        return [
            [
                'id' => 1,
                'name' => 'Leblanc Coffee',
                'slug' => 'leblanc-coffee',
                'price' => '300',
                'category' => 'Coffee',
                'desc' => 'A rich house-blend coffee with a deep aroma and slightly bitter finish. Brewed carefully by Sojiro using traditional kissaten-style methods.'
            ],
            [
                'id' => 2,
                'name' => 'Master Coffee',
                'slug' => 'master-coffee',
                'price' => '500',
                'category' => 'Coffee',
                'desc' => 'A comforting Japanese curry with a sweet and savory flavor, enhanced by apples, spices, and a subtle hint of coffee bitterness.'
            ],
            [
                'id' => 3,
                'name' => 'Leblanc Curry',
                'slug' => 'leblanc-curry',
                'price' => '700',
                'category' => 'Coffee',
                'desc' => 'Pure, clean, and meticulously hand-dripped.'
            ],
            [
                'id' => 4,
                'name' => 'Master Curry',
                'slug' => 'master-curry',
                'price' => '1000',
                'category' => 'Food',
                'desc' => 'The ultimate form of Leblanc Curry. Richer, deeper, and packed with carefully balanced spices for maximum flavor.'
            ],
            [
                'id' => 6,
                'name' => 'Coffee & Toast Set',
                'slug' => 'coffee-toast-set',
                'price' => '500',
                'category' => 'Coffee',
                'desc' => 'A classic Japanese café breakfast featuring toasted bread served alongside freshly brewed coffee.'
            ],
            [
                'id' => 7,
                'name' => 'Omelette Sandwich',
                'slug' => 'omelette-sandwich',
                'price' => '400',
                'category' => 'Food',
                'desc' => 'Soft fluffy egg layered between toasted bread slices, made in traditional retro café style.'
            ],
            [
                'id' => 8,
                'name' => 'Hotdog Set',
                'slug' => 'hotdog-set',
                'price' => '350',
                'category' => 'Food',
                'desc' => 'A simple but satisfying café meal served with a warm drink. Perfect for students on a budget.'
            ],
        ];
    }
    public function index()
    {
        $title = 'Order Menu';
        $foods = $this->getFoods();
        return view('order', compact('foods', 'title'));
    }

    public function show($slug)
    {
        $foods = $this->getFoods();
        $title = 'Order Detail';
        $food = Arr::first($foods, function ($item) use ($slug) {
            return $item['slug'] === $slug;
        });

        return view('order_detail', compact('food', 'title'));
    }
}
