<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // データのクリア
       DB::table('page')->truncate();
       // データ挿入
       $now = Carbon::now();
       $product01 = [
           "name" => "FD3S 大容量スロットルボディ16bit",
           "img" => "images/product01.jpg",
           "description" => "熱変形にも、たえられるノーマルと同等の材質を使用してます。",
           "content" => "RX-7 FD3S用",
           "price" => 54000,
           "created_at" => $now,
           "updated_at" => $now
       ];

       $product02 = [
           "name" => "FD3S ALUMI PULLEY KIT",
           "img" => "images/product02.jpg",
           "description" => "エンジンルームのドレスアップにおすすめです！！",
           "content" => "RX-7 FD3S用",
           "price" => 48000,
           "created_at" => $now,
           "updated_at" => $now
       ];

       $product03 = [
           "name" => "Wide tread spacer",
           "img" => "images/product03.jpg",
           "description" => "硬質アルマイト処理済 25・30mm",
           "content" => "RX-7 FD3S用",
           "price" => 19800,
           "created_at" => $now,
           "updated_at" => $now
       ];

       $product04 = [
           "name" => "FD3S REAR SPOILER-GTⅢ",
           "img" => "images/product04.jpg",
           "description" => "ルーフに回り込むエアーをより効率よくダウンフォースを得る為にウイングに「空気ダマリ」状の凹みを造り３Ｄ構造化！！ その結果、ハイダウンフォースを実現いたしました。",
           "content" => "RX-7 FD3S用",
           "price" => 127000,
           "created_at" => $now,
           "updated_at" => $now
       ];

         DB::table('page')->insert([$product01, $product02, $product03, $product04]);
    }
}
