<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wallet;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wallet = new Wallet();
        $wallet->amount = 1000000;
        $wallet->customer_id = "Gleam";
        $wallet->save();
    }
}
