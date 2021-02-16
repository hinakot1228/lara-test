<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
    // Tweetモデルにアクセス → モデルはテーブルとやり取りするところ → Tweetsテーブルに使える準備

class TweetController extends Controller
{
    //
    public function index()
    {
        $tweet = Tweet::find(1);
        // $tweet = Tweet::all();
        // find() → select from tweets where id = 1

        // $user = User::all();

        dd($tweet);
        // エロクアント
        // Tweetsデーブルのid=1ので^他を取得せよ
        return view('tweets.index', ['tweet'=>$tweet]);
        // view() → resources/viewsを参照する
        // () → tweetsフォルダ/index.blade.php
    }
}
