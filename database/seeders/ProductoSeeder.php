<?php

namespace Database\Seeders;
use App\Models\ProductoModel;
use Illuminate\Database\Seeder;
use App\Http\Controllers\ProductoController;

use Database\Factories\ProductoFactory;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductoModel::factory(50)->create();
    }
}
