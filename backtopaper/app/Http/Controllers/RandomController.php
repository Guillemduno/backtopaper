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
        $genders = Gender::all();
        $numOfGenders = Gender::count();
        $randGenderNum = rand(1, $numOfGenders-1);

        $colors = Color::all();
        $numOfColors = Color::count();
        $randColorNum = rand(1, $numOfColors-1);

        $gender = $genders[$randGenderNum]['gender'];
        $color = $colors[$randColorNum]['color'];

        if ($request->input('clicked')) {
        
            $this->text = "...a ".$gender." and your favourite color will be ".$color;

            $character = new Characther();
            $character->user_id = 1;
            $character->gender = $randGenderNum;
            $character->color = $randColorNum;
            $character->save();
        }
        return view('random.index', ['text'=>$this->text]);
    }
}
