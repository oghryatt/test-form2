<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Season;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
{
    $products = [
        [
            'name' => 'キウイ',
            'image' => 'kiwi.jpg',
            'price' => 800,
            'description' => '甘みと酸味のバランスが絶妙なフルーツです。ビタミンCなどの栄養素も豊富で、美肌効果や疲労回復効果も期待できます。もぎたてフルーツのスムージーをお召し上がりください！',
            'season' => '秋、冬',
        ],
        [
            'name' => 'ストロベリー',
            'image' => 'strawberry.jpg',
            'price' => 1200,
            'description' => '大人から子供まで大人気のストロベリー。当店では鮮度抜群の完熟いちごを使用しています。ビタミンCはもちろん食物繊維も豊富なため、腸内環境の改善も期待できます。もぎたてフルーツのスムージーをお召し上がりください！',
            'season' => '春',
        ],
        [
            'name' => 'オレンジ',
            'image' => 'orange.jpg',
            'price' => 850,
            'description' => '酸味と甘みのバランスが抜群のネーブルオレンジ。酸味控えめで甘さと濃厚な果汁が魅力の商品です。もぎたてフルーツのスムージーをお召し上がりください！',
            'season' => '冬',
        ],
        [
            'name' => 'スイカ',
            'image' => 'watermelon.jpg',
            'price' => 700,
            'description' => '甘くてシャリシャリ食感が魅力のスイカ。暑い日の水分補給や熱中症予防におすすめです。もぎたてフルーツのスムージーをお召し上がりください！',
            'season' => '夏',
        ],
        [
            'name' => 'ピーチ',
            'image' => 'peach.jpg',
            'price' => 1000,
            'description' => '豊潤な香りととろける甘さが魅力のピーチ。美味しさはもちろんビタミンEが豊富で生活習慣病の予防にもおすすめです。もぎたてフルーツのスムージーをお召し上がりください！',
            'season' => '夏',
        ],
        [
            'name' => 'シャインマスカット',
            'image' => 'muscat.jpg',
            'price' => 1400,
            'description' => '爽やかな香りと上品な甘みが特長のシャインマスカット。脳や体のエネルギー補給にも最適です。もぎたてフルーツのスムージーをお召し上がりください！',
            'season' => '夏、秋',
        ],
        [
            'name' => 'パイナップル',
            'image' => 'pineapple.jpg',
            'price' => 800,
            'description' => '甘酸っぱさとトロピカルな香りが特徴のパイナップル。甘さと酸味のバランスが絶妙な商品です。もぎたてフルーツのスムージーをお召し上がりください！',
            'season' => '春、夏',
        ],
        [
            'name' => 'ブドウ',
            'image' => 'grape.jpg',
            'price' => 1100,
            'description' => '人気の高い国産「巨峰」を使用。高い糖度と適度な酸味が魅力で見た目もかわいい商品です。もぎたてフルーツのスムージーをお召し上がりください！',
            'season' => '夏、秋',
        ],
        [
            'name' => 'バナナ',
            'image' => 'banana.jpg',
            'price' => 600,
            'description' => '低カロリーで栄養満点。ダイエット中の方にもおすすめです。濃厚な甘みを存分に堪能できます。もぎたてフルーツのスムージーをお召し上がりください！',
            'season' => '夏',
        ],
        [
            'name' => 'メロン',
            'image' => 'melon.jpg',
            'price' => 900,
            'description' => '香りがよくジューシーで品のある甘さが人気のメロン。カリウム豊富でむくみ解消効果も期待できます。もぎたてフルーツのスムージーをお召し上がりください！',
            'season' => '春、夏',
        ],
    ];

    $product = $this->faker->randomElement($products);

    return [
        'name' => $product['name'],
        'image' => $product['image'],
        'price' => $product['price'],
        'description' => $product['description'],
        'season' => $product['season'],
    ];
}

}
