<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Providers\AppServiceProvider;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function submit(Request $req){
        $validator = Validator::make($req->all(), [
            'number' => 'isbusy:number,date',
        ]);

        if ($validator->fails()) {
            $fail = 'Обраний столик на цей день, на жаль, уже хтось забронював :с';
            return redirect()->route('index')->with('busy', $fail);
        }
        
        $booking = new Booking();
        $booking->name = $req->input('name');
        $booking->number = $req->input('number');
        $booking->date = $req->input('date');

        $booking->save();

        $output = 'Дякуємо, '.$booking->name.'! Чекатимемо на Вас '.$booking->date.' за '.$booking->number.' столиком.';
        return redirect()->route('index')->with('success', $output);
    }

}

