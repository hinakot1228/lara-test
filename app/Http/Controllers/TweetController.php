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
        // find() → select from tweets where id = 1
        dd($tweet);
        // エロクアント
        // Tweetsデーブルのid=1ので^他を取得せよ
        return view('tweets.index');
        // view() → resources/viewsを参照する
        // () → tweetsフォルダ/index.blade.php
    }
}
