<?php

namespace Tests\Feature;

use App\Models\Voucher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VoucherTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testCreateVoucher(): void
    {
        $voucher = new Voucher();
        $voucher->id = "VOUCHER";
        $voucher->name = "Voucher";
        $voucher->voucher_code = "VOUCHER121";
        $voucher->save();

        self::assertNotNull($voucher->id);
    }

    public function testCreateVoucherUUID()
    {
        $voucher = new Voucher();
        $voucher->name = "Voucher";
        $voucher->voucher_code = "VOUCHER121";
        $voucher->save();

        self::assertNotNull($voucher->id);
        self::assertNotNull($voucher->voucher_code);
    }
}
