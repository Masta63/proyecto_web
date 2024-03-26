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
        // Agregar productos de café peruano
        Product::create([
            'name' => 'Café Peruano Premium',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUk1Q9NORDj_RzklwpjUydRdwq5Lz79AOL0DGavUlB0w&s',
            'description' => 'Café peruano de alta calidad, cultivado en las montañas de los Andes.',
            'category' => 'cafe',
            'quantity' => 50,
            'price' => '25.99',
        ]);

        Product::create([
            'name' => 'Café Peruano Orgánico',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUk1Q9NORDj_RzklwpjUydRdwq5Lz79AOL0DGavUlB0w&s',
            'description' => 'Café peruano cultivado de manera orgánica, respetuoso con el medio ambiente.',
            'category' => 'cafe',
            'quantity' => 30,
            'price' => '29.99',
        ]);

        // Agregar productos de café colombiano
        Product::create([
            'name' => 'Café Colombiano Tradicional',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUk1Q9NORDj_RzklwpjUydRdwq5Lz79AOL0DGavUlB0w&s',
            'description' => 'Café colombiano con sabor y aroma característicos de la región.',
            'category' => 'cafe',
            'quantity' => 40,
            'price' => '21.99',
        ]);

        // Agregar productos de frutas y verduras orgánicas
        Product::create([
            'name' => 'Manzanas Orgánicas',
            'image' => 'https://elegifruta.com.ar/wp-content/uploads/2017/07/manzana_roja.jpghttps://example.com/manzanas_organicas.jpg',
            'description' => 'Manzanas frescas y deliciosas, cultivadas de manera orgánica.',
            'category' => 'frutas',
            'quantity' => 60,
            'price' => '12.99',
        ]);

        Product::create([
            'name' => 'Zanahorias Orgánicas',
            'image' => 'https://phantom-marca.unidadeditorial.es/631c4b360757ce3355fc636fe8c0cab9/resize/828/f/jpg/assets/multimedia/imagenes/2023/09/05/16939288675740.jpg',
            'description' => 'Zanahorias frescas y crujientes, cultivadas de manera orgánica.',
            'category' => 'verduras',
            'quantity' => 70,
            'price' => '8.99',
        ]);

        Product::create([
            'name' => 'Espinacas Orgánicas',
            'image' => 'https://www.conasi.eu/blog/wp-content/uploads/2023/07/recetas-con-espinacas-d.jpg',
            'description' => 'Espinacas frescas y nutritivas, cultivadas de manera orgánica.',
            'category' => 'verduras',
            'quantity' => 50,
            'price' => '10.99',
        ]);
    }
}
