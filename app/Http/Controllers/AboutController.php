<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $sojiro = [
            [
                'name' => 'Café Leblanc',
                'owner' => 'Sojiro Sakura',
                'location' => 'Yongen-Jaya, Tokyo',
                'specialty' => 'Coffee & Curry',
                'description' => 'A cozy, hidden sanctuary for those seeking comfort and a warm cup of coffee. Known for its mysterious atmosphere and the best curry in town.'
            ]
        ];
        return view('about', compact('sojiro'));
    }
}
