<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Container\Container;

class ProductOptionsUKSeeder extends Seeder
{
    private $faker;

    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createOptions(1, [
            ["ref_nr" => "75-0050-20-213002600204", "dn" => "50", "pn" => "PN16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0065-20-213002600204", "dn" => "65", "pn" => "PN16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0080-20-213002600204", "dn" => "80", "pn" => "PN16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0100-20-213002600204", "dn" => "100", "pn" => "PN16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0125-20-213002600204", "dn" => "125", "pn" => "PN16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0150-20-213002600204", "dn" => "150", "pn" => "PN16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0200-20-213001300204", "dn" => "200", "pn" => "PN10", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0200-20-213002600204", "dn" => "200", "pn" => "PN16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0250-20-213001300204", "dn" => "250", "pn" => "PN10", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0250-20-213002600204", "dn" => "250", "pn" => "PN16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0300-20-213001300204", "dn" => "300", "pn" => "PN10", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0300-20-213002600204", "dn" => "300", "pn" => "PN16", "notes" => "Disc material in Duplex"],
        ]);

        $this->createOptions(2, [
            ["ref_nr" => "75-0050-20-223002614200", "dn" => "50", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0065-20-223002614200", "dn" => "65", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0080-20-223002614200", "dn" => "80", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0100-20-223002614200", "dn" => "100", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0125-20-223002614200", "dn" => "125", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0150-20-223002614200", "dn" => "150", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
        ]);

        $this->createOptions(3, [
            ["ref_nr" => "75-0050-21-223002614200", "dn" => "50", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0065-21-223002614200", "dn" => "65", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0080-21-223002614200", "dn" => "80", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0100-21-223002614200", "dn" => "100", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0125-21-223002614200", "dn" => "125", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0150-21-223002614200", "dn" => "150", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0200-21-223001314200", "dn" => "200", "pn" => "PN10", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0250-21-225101314200", "dn" => "250", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0300-21-225101314200", "dn" => "300", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0350-21-225101314200", "dn" => "350", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0400-21-225101314200", "dn" => "400", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0450-21-225101314200", "dn" => "450", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0500-21-225101314200", "dn" => "500", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0600-21-225101314200", "dn" => "600", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0700-21-225101314200", "dn" => "700", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0800-21-225101314200", "dn" => "800", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0900-21-225101314200", "dn" => "900", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-1000-21-225101314200", "dn" => "1000", "pn" => "PN10", "notes" => ""],
        ]);

        $this->createOptions(4, [
            ["ref_nr" => "75-0050-31-223002614200", "dn" => "50", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "75-0065-31-223002614200", "dn" => "65", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "75-0080-31-223002614200", "dn" => "80", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "75-0100-31-223002614200", "dn" => "100", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "75-0125-31-223002614200", "dn" => "125", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "75-0150-31-223002614200", "dn" => "150", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "75-0200-31-223001314200", "dn" => "200", "pn" => "PN10", "notes" => ""],
        ]);

        $this->createOptions(5, [
            ["ref_nr" => "75-0050-30-214202600204", "dn" => "50", "pn" => "PN16", "notes" => "", "weight" => "2.8"],
            ["ref_nr" => "75-0065-30-214202600204", "dn" => "65", "pn" => "PN16", "notes" => "", "weight" => "3.6"],
            ["ref_nr" => "75-0080-30-214202600204", "dn" => "80", "pn" => "PN16", "notes" => "", "weight" => "3.9"],
            ["ref_nr" => "75-0100-30-214202600204", "dn" => "100", "pn" => "PN16", "notes" => "", "weight" => "5.1"],
            ["ref_nr" => "75-0125-30-214202600204", "dn" => "125", "pn" => "PN16", "notes" => "", "weight" => "7.0"],
            ["ref_nr" => "75-0150-30-214202600204", "dn" => "150", "pn" => "PN16", "notes" => "", "weight" => "9.5"],
            ["ref_nr" => "75-0200-30-214202600204", "dn" => "200", "pn" => "PN16", "notes" => "", "weight" => "14"],
            ["ref_nr" => "75-0250-30-214201300204", "dn" => "250", "pn" => "PN10", "notes" => "", "weight" => "24"],
            ["ref_nr" => "75-0250-30-214202600204", "dn" => "250", "pn" => "PN16", "notes" => "", "weight" => "24"],
            ["ref_nr" => "75-0300-30-214201300204", "dn" => "300", "pn" => "PN10", "notes" => "", "weight" => "36"],
            ["ref_nr" => "75-0300-30-214202600204", "dn" => "300", "pn" => "PN16", "notes" => "", "weight" => "36"],
        ]);

        $this->createOptions(6, [
            ["ref_nr" => "75-0050-41-223002614200", "dn" => "50", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0065-41-223002614200", "dn" => "65", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0080-41-223002614200", "dn" => "80", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0100-41-223002614200", "dn" => "100", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0125-41-223002614200", "dn" => "125", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0150-41-223002614200", "dn" => "150", "pn" => "PN10/16", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0200-41-223001314200", "dn" => "200", "pn" => "PN10", "notes" => "Disc material in Duplex"],
            ["ref_nr" => "75-0250-41-225101314200", "dn" => "250", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0300-41-225101314200", "dn" => "300", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0350-41-225101314200", "dn" => "350", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0400-41-225101314200", "dn" => "400", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0450-41-225101314200", "dn" => "450", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0500-41-225101314200", "dn" => "500", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0600-41-225101314200", "dn" => "600", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0700-41-225101314200", "dn" => "700", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0800-41-225101314200", "dn" => "800", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-0900-41-225101314200", "dn" => "900", "pn" => "PN10", "notes" => ""],
            ["ref_nr" => "75-1000-41-225101314200", "dn" => "1000", "pn" => "PN10", "notes" => ""],
        ]);

        $this->createOptions(7, [
            ["ref_nr" => "756-0150-1-14", "dn" => "150", "pn" => "PN10/16", "notes" => ""],
            ["ref_nr" => "756-0150-1-14000", "dn" => "150", "pn" => "PN10/16", "notes" => ""],
            ["ref_nr" => "756-0200-1-14", "dn" => "200", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "756-0250-1-14", "dn" => "250", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "756-0300-1-14", "dn" => "300", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "756-0350-1-14", "dn" => "350", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "756-0400-1-14", "dn" => "400", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "756-0450-1-14", "dn" => "450", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "756-0500-1-14", "dn" => "500", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "756-0600-1-14", "dn" => "600", "pn" => "PN16", "notes" => ""],
        ]);

        $this->createOptions(8, [
            ["ref_nr" => "756-0700-1-1400201", "dn" => "700", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "756-0800-1-1400201", "dn" => "800", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "756-0900-1-1400201", "dn" => "900", "pn" => "PN16", "notes" => "F"],
            ["ref_nr" => "756-1000-1-1400201", "dn" => "1000", "pn" => "PN16", "notes" => ""],
            ["ref_nr" => "756-1200-1-1400201", "dn" => "1200", "pn" => "PN16", "notes" => ""],
        ]);

        $this->createOptions(9, [
            ["ref_nr" => "820-0050-10-541L0160002", "dn" => "50", "pn" => "PN16", "notes" => ""],
        ]);

    }

    public function createOptions($productId, $productOptions) {
        foreach ($productOptions as $option) {
            ProductOption::create([
                'product_id' => $productId,
                'ref_nr' => $option['ref_nr'],
                'vvs_nr' => isset($option['vvs_nr']) ? $option['vvs_nr'] : null,
                'dn' => $option['dn'],
                'pn' => $option['pn'],
                'price' => ceil($this->faker->randomFloat(2, 50, 500)),
                'stock' => $this->faker->numberBetween(100, 5000),
                'notes' => $option['notes'],
            ]);
        }
    }
}
