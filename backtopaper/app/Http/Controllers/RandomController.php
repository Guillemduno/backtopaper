<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;


class RandomController extends Controller
{
    public $characters = [
        'color' => ['blue','pink', 'green', 'purple', 'red']
    ];

   

 

    function generateText(){

        $genders      = Gender::all();
        $numOfGenders =  count($genders);

        $color_id = rand(0, (count($this->characters['color'])-1));

        $gender = $genders[rand(1, $numOfGenders-1)]['gender'];
        $color = $this->characters['color'][$color_id];

        $text = "You will be a ".$gender." and your favourite color will be ".$color;

        return view('random.index', ['text'=>$text]);
    }
}
