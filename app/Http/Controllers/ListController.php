<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $title = 'Community';

        $list = [
            [
                'name' => 'Sojiro Sakura',
                'image' => 'sojiro.png',
                'role' => 'Owner of Café Leblanc',
                'habit' => 'A skilled barista who teaches coffee brewing and serves his famous homemade curry at Café Leblanc.',
                'status' => 'OWNER'
            ],
            [
                'name' => 'Ren Amamiya',
                'image' => 'joker.png',
                'role' => 'Leader of the Phantom Thieves',
                'habit' => 'A quiet transfer student who secretly leads the Phantom Thieves while living at Café Leblanc.',
                'status' => 'LEADER'
            ],
            [
                'name' => 'Morgana',
                'image' => 'morgana.png',
                'role' => 'Phantom Thieves Guide',
                'habit' => 'A mysterious cat-like companion who guides the Phantom Thieves and dreams of eating premium sushi.',
                'status' => 'MASCOT'
            ],
            [
                'name' => 'Ryuji Sakamoto',
                'image' => 'ryuji.png',
                'role' => 'Former Track Team Member',
                'habit' => 'An energetic and outspoken teenager who values friendship and never backs down from helping others.',
                'status' => 'REGULAR'
            ],
            [
                'name' => 'Ann Takamaki',
                'image' => 'ann.png',
                'role' => 'Fashion Model',
                'habit' => 'A part-time model known for her caring personality and love for sweets and desserts.',
                'status' => 'REGULAR'
            ],
            [
                'name' => 'Yusuke Kitagawa',
                'image' => 'yusuke.png',
                'role' => 'Eccentric Artist',
                'habit' => 'A passionate artist who constantly searches for inspiration and often forgets practical matters.',
                'status' => 'REGULAR'
            ],
            [
                'name' => 'Makoto Niijima',
                'image' => 'makoto.png',
                'role' => 'Student Council President',
                'habit' => 'A highly intelligent and responsible student who acts as the strategist of the Phantom Thieves.',
                'status' => 'REGULAR'
            ],
            [
                'name' => 'Futaba Sakura',
                'image' => 'futaba.png',
                'role' => 'Phantom Thieves Navigator',
                'habit' => 'A genius hacker who enjoys video games, technology, and spending time online.',
                'status' => 'REGULAR'
            ],
            [
                'name' => 'Haru Okumura',
                'image' => 'haru.png',
                'role' => 'Heiress of Okumura Foods',
                'habit' => 'A polite and gentle girl who enjoys gardening and growing vegetables.',
                'status' => 'REGULAR'
            ],
        ];

        return view('list', compact('list', 'title'));
    }
}
