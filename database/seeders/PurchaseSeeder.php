<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Purchase;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * category
     * provider
     * products
     * clients
     * User
     * Purchase
     * Purchase details
     * Sale
     * sale details 
     *
     * @return void
     */
    public function run()
    {
        Purchase::factory(100)->create();
    }
}
