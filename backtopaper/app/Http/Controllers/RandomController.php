<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public $characters = [
        'gender' => ['woman', 'men', 'monster', 'alien'],
        'color' => ['blue','pink', 'green', 'purple', 'red']
    ];

    function generateText(){
        $gender_id = rand(0, (count($this->characters['gender'])-1));
        $color_id = rand(0, (count($this->characters['color'])-1));

        $gender = $this->characters['gender'][$gender_id];
        $color = $this->characters['color'][$color_id];

        $text = "You will be a ".$gender." and your favourite color will be ".$color;

        return view('random.index', ['text'=>$text]);
    }
}
