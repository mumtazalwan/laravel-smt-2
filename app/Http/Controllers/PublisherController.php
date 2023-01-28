<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public static function index(){
        return view(
            'publisher.publisher', [
                'publishers' => Publisher::all()
            ]
        );
    }

    // public static function show(Publisher $publisher){
    //     return view(
    //         'publisher.detailP', [
    //             'publisher' => $publisher]
    //     );
    // }
}
