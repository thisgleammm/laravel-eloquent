<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customer();
        $customer->id = "Gleam";
        $customer->name = "Gleam";
        $customer->email = "gleam@aja.com";
        $customer->save();
    }
}
