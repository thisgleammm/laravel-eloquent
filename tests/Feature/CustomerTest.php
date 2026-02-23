<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Customer;
use Database\Seeders\CustomerSeeder;
use Database\Seeders\WalletSeeder;

class CustomerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testOneToOne(): void
    {
       $this->seed([CustomerSeeder::class, WalletSeeder::class]);

        $customer = Customer::find("Gleam");
        self::assertNotNull($customer);

        // $wallet = Wallet::where("customer_id", $customer->id)->first();
        $wallet = $customer->wallet;
        self::assertNotNull($wallet);

        self::assertEquals(1000000, $wallet->amount);
    }
}
