<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller Implements HasMiddleware
{
    public static function middleware() {
        return [
            new Middleware('auth', except:['index']),
        
        ];
    }

    public function index()
    {
        return view('index');
    }

    public function upgrades()
    {
        return view('upgrades');
    }

    public function leaderboard(Score $score)
    {
        $scores = $score->orderBy('total', 'desc')->take(25)->get();
        return view('leaderboard', compact('scores'));
    }
}
