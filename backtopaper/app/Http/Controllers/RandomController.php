<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\Color;
use App\Models\Characther;

class RandomController extends Controller
{
    private $text;

    function generateText(Request $request){
        
        $numOfGenders = Gender::count();
        $randGenderNum = rand(1, $numOfGenders);

        $numOfColors = Color::count();
        $randColorNum = rand(1, $numOfColors);

        $gender = Gender::find($randGenderNum)->gender;
        $color = Color::find($randColorNum)->color;
        if ($request->input('clicked')) {
        
            $this->text = "...a ".$gender." and your favourite color will be ".$color;

            $character = new Characther();
            $character->user_id = 1;
            $character->gender_id = $randGenderNum;
            $character->color_id = $randColorNum;
            $character->save();
        }
        return view('random.index', ['text'=>$this->text]);
    }
}
