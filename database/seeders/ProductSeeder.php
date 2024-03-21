<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(
            [
                'name' => 'Soap Dispenser',
                'image' => "https://www.morph.com.ar/pub/media/catalog/product/cache/d4eeca0e77ddcc6ec3ba7fbd5a12a931/3/1/315254_portajabonliquidofrost_1886.jpg",
                'description' => 'This elegant Liquid Soap Dispenser is an essential accessory for any home or office.',
                'category' => 'bathroom',
                'quantity' => 99,
                'price' => '300',
            ]
        );

        Product::create(
            [
                'name' => 'Tea Tray',
                'image' => "https://img.freepik.com/premium-photo/tray-teacup-teapot-teapot-teapot-cookies_231794-6153.jpg",
                'description' => 'To maintain order, organization by creating the perfect space while decorating your home.',
                'category' => 'living-room',
                'quantity' => 99,
                'price' => '3999',
            ],
        );

        Product::create(
            [
                'name' => '35 cm Pizza Mold',
                'image' => "https://http2.mlstatic.com/D_NQ_NP_2X_838656-MLA70919121440_082023-F.webp",
                'description' => 'This mold is made of aluminum and has an internal and external anti-adherent Starflon Max coating in graphite color.',
                'category' => 'kitchen',
                'quantity' => 99,
                'price' => '15199',
            ],
        );

        Product::create(
            [
                'name' => 'Soap Dispenser',
                'image' => "https://www.morph.com.ar/pub/media/catalog/product/cache/d4eeca0e77ddcc6ec3ba7fbd5a12a931/3/1/315254_portajabonliquidofrost_1886.jpg",
                'description' => 'This elegant Liquid Soap Dispenser is an essential accessory for any home or office.',
                'category' => 'bathroom',
                'quantity' => 99,
                'price' => '300',
            ]
        );

        Product::create(
            [
                'name' => 'Tea Tray',
                'image' => "https://img.freepik.com/premium-photo/tray-teacup-teapot-teapot-teapot-cookies_231794-6153.jpg",
                'description' => 'To maintain order, organization by creating the perfect space while decorating your home.',
                'category' => 'living-room',
                'quantity' => 99,
                'price' => '3999',
            ],
        );

        Product::create(
            [
                'name' => '35 cm Pizza Mold',
                'image' => "https://http2.mlstatic.com/D_NQ_NP_2X_838656-MLA70919121440_082023-F.webp",
                'description' => 'This mold is made of aluminum and has an internal and external anti-adherent Starflon Max coating in graphite color.',
                'category' => 'kitchen',
                'quantity' => 99,
                'price' => '15199',
            ],
        );
    }
}
