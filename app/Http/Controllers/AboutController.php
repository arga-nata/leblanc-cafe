<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'About the Café';

        $sojiro = [
            [
                'name' => 'Café Leblanc',
                'owner' => 'Sojiro Sakura',
                'location' => 'Yongen-Jaya, Tokyo',
                'specialty' => 'Coffee & Curry',
                'description' => 'A cozy, hidden sanctuary for those seeking comfort and a warm cup of coffee. Known for its mysterious atmosphere and the best curry in town.'
            ]
        ];

        $student = [
            'title' => 'About the Café',
            'nama' => 'Handika Rado Arganata',
            'nim' => '24104410051',
            'prodi' => 'Teknik Informatika',
            'matakuliah' => 'Pemrograman Web Lanjut',
            'framework' => 'Laravel 13 & Tailwind CSS',
        ];
        return view('about', compact('sojiro', 'student', 'title'));
    }
}
