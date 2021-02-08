<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->string('contents');
            $table->string('sample');
            $table->timestamps();
            // create_at, updated_atという2つのカラムができあがる
            // Laravelでのテーブル
            // 1. マイグレーションファイルを作成
            // 2. カラムを定義する
            // 3. php artisan migrate → テーブルが作成される
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweets');
    }
}
