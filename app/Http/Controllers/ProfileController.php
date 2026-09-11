<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        $data = [
        'name' => '山田太郎',
            'age' => '25',
            'hobbies' => ['プログラミング', '読書', '旅行'],
        ];
    
    return view('profile',$data);
    }
}
