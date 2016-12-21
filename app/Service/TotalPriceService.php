<?php
namespace App\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TotalPriceService
{
  // カートの合計金額を計算
  public function total(){
    $items = session()->get('items');
    $total = 0;
    foreach($items as $item){
      $prices = $item->price;
      $total += $prices;
    }
    return $total;
  }


}
 ?>
