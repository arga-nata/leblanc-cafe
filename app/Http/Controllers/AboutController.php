<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $arrayName = [
            [
                'name' => 'Café Leblanc',
                'owner' => 'Sojiro Sakura',
                'location' => 'Yongen-Jaya, Tokyo',
                'specialty' => 'Curry & Coffee',
                'description' => 'A cozy, hidden sanctuary for those seeking comfort and a warm cup of coffee. Known for its mysterious atmosphere and the best curry in town.'
            ]
        ];
        return view('about', compact('arrayName'));
    }
}
