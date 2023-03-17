<?php

namespace Database\Seeders;

use App\Models\ProductSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProductSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products_setting = array(
            array('type' => '5', 'min_quantity' => '100', 'max_quantity' => '250', 'first_day_price' => '200.00', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '5', 'min_quantity' => '250', 'max_quantity' => '500', 'first_day_price' => '300.00', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '5', 'min_quantity' => '0', 'max_quantity' => '100', 'first_day_price' => '125.00', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '1', 'min_quantity' => '0', 'max_quantity' => '100', 'first_day_price' => '1.25', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '1', 'min_quantity' => '100', 'max_quantity' => '250', 'first_day_price' => '2.50', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '1', 'min_quantity' => '250', 'max_quantity' => '500', 'first_day_price' => '3.00', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '1', 'min_quantity' => '500', 'max_quantity' => '1000', 'first_day_price' => '3.25', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '2', 'min_quantity' => '0', 'max_quantity' => '100', 'first_day_price' => '1.25', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '2', 'min_quantity' => '100', 'max_quantity' => '250', 'first_day_price' => '2.00', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '2', 'min_quantity' => '250', 'max_quantity' => '500', 'first_day_price' => '2.50', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '2', 'min_quantity' => '500', 'max_quantity' => '1000', 'first_day_price' => '3.00', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '3', 'min_quantity' => '0', 'max_quantity' => '100', 'first_day_price' => '1.25', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '3', 'min_quantity' => '100', 'max_quantity' => '250', 'first_day_price' => '2.00', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '3', 'min_quantity' => '250', 'max_quantity' => '500', 'first_day_price' => '3.50', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '3', 'min_quantity' => '500', 'max_quantity' => '1000', 'first_day_price' => '6.00', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '4', 'min_quantity' => '0', 'max_quantity' => '100', 'first_day_price' => '1.25', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '4', 'min_quantity' => '100', 'max_quantity' => '250', 'first_day_price' => '2.00', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL),
            array('type' => '4', 'min_quantity' => '250', 'max_quantity' => '500', 'first_day_price' => '3.50', 'second_day_price' => NULL, 'third_day_price' => NULL, 'fourth_day_price' => NULL, 'status' => '1', 'created_at' => NULL, 'updated_at' => NULL)
        );
        Schema::disableForeignKeyConstraints();
        ProductSetting::truncate();
        ProductSetting::insert($products_setting);
        Schema::enableForeignKeyConstraints();
    }
}
