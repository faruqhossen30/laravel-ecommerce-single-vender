<?php

namespace Database\Seeders;

use App\Models\Admin\Product\Attribute;
use App\Models\Admin\Product\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = array(
            array('id' => '1','slug'=>'ram','name' => 'RAM','author_id' => '1','created_at' => '2024-03-22 09:05:48','updated_at' => '2024-03-22 09:05:48'),
            array('id' => '2','slug'=>'rom','name' => 'ROM','author_id' => '1','created_at' => '2024-03-22 09:05:56','updated_at' => '2024-03-22 09:05:56'),
            array('id' => '3','slug'=>'display','name' => 'Display','author_id' => '1','created_at' => '2024-03-22 09:06:04','updated_at' => '2024-03-22 09:06:04'),
            array('id' => '4','slug'=>'processor','name' => 'Processor','author_id' => '1','created_at' => '2024-03-22 09:08:52','updated_at' => '2024-03-22 09:08:52'),
            array('id' => '5','slug'=>'network-type','name' => 'Network Type','author_id' => '1','created_at' => '2024-03-22 09:09:35','updated_at' => '2024-03-22 09:09:35')
          );

          $attribute_values = array(
            array('id' => '1','attribute_id' => '1','name' => '1 GB','slug'=>'1-gb','description' => '1 GB','author_id' => '1','created_at' => '2024-03-22 09:06:46','updated_at' => '2024-03-22 09:06:46'),
            array('id' => '2','attribute_id' => '1','name' => '2 GB','slug'=>'21-gb-gb','description' => '2 GB','author_id' => '1','created_at' => '2024-03-22 09:06:51','updated_at' => '2024-03-22 09:06:51'),
            array('id' => '3','attribute_id' => '1','name' => '4 GB','slug'=>'4-gb','description' => '4 GB','author_id' => '1','created_at' => '2024-03-22 09:06:57','updated_at' => '2024-03-22 09:06:57'),
            array('id' => '4','attribute_id' => '1','name' => '8 GB','slug'=>'8-gb','description' => '8 GB','author_id' => '1','created_at' => '2024-03-22 09:07:03','updated_at' => '2024-03-22 09:07:03'),
            array('id' => '5','attribute_id' => '1','name' => '16 GB','slug'=>'16-gb','description' => '16 GB','author_id' => '1','created_at' => '2024-03-22 09:07:08','updated_at' => '2024-03-22 09:07:08'),
            array('id' => '6','attribute_id' => '1','name' => '32 GB','slug'=>'32-gb','description' => '32 GB','author_id' => '1','created_at' => '2024-03-22 09:07:16','updated_at' => '2024-03-22 09:07:16'),
            array('id' => '7','attribute_id' => '1','name' => '64 GB','slug'=>'65-gb','description' => '64 GB','author_id' => '1','created_at' => '2024-03-22 09:07:22','updated_at' => '2024-03-22 09:07:22'),
            array('id' => '8','attribute_id' => '2','name' => '1 GB','slug'=>'1-gb','description' => '1 GB','author_id' => '1','created_at' => '2024-03-22 09:07:37','updated_at' => '2024-03-22 09:07:37'),
            array('id' => '9','attribute_id' => '2','name' => '2 GB','slug'=>'2-gb','description' => '2 GB','author_id' => '1','created_at' => '2024-03-22 09:07:41','updated_at' => '2024-03-22 09:07:41'),
            array('id' => '10','attribute_id' => '2','name' => '4 GB','slug'=>'4-gb','description' => '4 GB','author_id' => '1','created_at' => '2024-03-22 09:07:45','updated_at' => '2024-03-22 09:07:45'),
            array('id' => '11','attribute_id' => '2','name' => '8 GB','slug'=>'8-bg','description' => '8 GB','author_id' => '1','created_at' => '2024-03-22 09:07:54','updated_at' => '2024-03-22 09:07:54'),
            array('id' => '12','attribute_id' => '2','name' => '16 GB','slug'=>'16-gb','description' => '16 GB','author_id' => '1','created_at' => '2024-03-22 09:08:02','updated_at' => '2024-03-22 09:08:02'),
            array('id' => '13','attribute_id' => '2','name' => '32 GB','slug'=>'32-gb','description' => '32 GB','author_id' => '1','created_at' => '2024-03-22 09:08:05','updated_at' => '2024-03-22 09:08:05'),
            array('id' => '14','attribute_id' => '2','name' => '64 GB','slug'=>'64-gb','description' => '64 GB','author_id' => '1','created_at' => '2024-03-22 09:08:09','updated_at' => '2024-03-22 09:08:09'),
            array('id' => '15','attribute_id' => '3','name' => 'LCD','slug'=>'lcd','description' => 'LCD','author_id' => '1','created_at' => '2024-03-22 09:08:22','updated_at' => '2024-03-22 09:08:22'),
            array('id' => '16','attribute_id' => '3','name' => 'LED','slug'=>'led','description' => 'LED','author_id' => '1','created_at' => '2024-03-22 09:08:29','updated_at' => '2024-03-22 09:08:29'),
            array('id' => '17','attribute_id' => '3','name' => 'IPS','slug'=>'ips','description' => 'IPS','author_id' => '1','created_at' => '2024-03-22 09:08:34','updated_at' => '2024-03-22 09:08:34'),
            array('id' => '18','attribute_id' => '4','name' => '1 GH','slug'=>'1-gh','description' => '1 GH','author_id' => '1','created_at' => '2024-03-22 09:09:15','updated_at' => '2024-03-22 09:09:15'),
            array('id' => '19','attribute_id' => '4','name' => '2 GH','slug'=>'2-gh','description' => '2 GH','author_id' => '1','created_at' => '2024-03-22 09:09:22','updated_at' => '2024-03-22 09:09:22'),
            array('id' => '20','attribute_id' => '5','name' => '2G','slug'=>'2g','description' => '2G','author_id' => '1','created_at' => '2024-03-22 09:09:42','updated_at' => '2024-03-22 09:09:42'),
            array('id' => '21','attribute_id' => '5','name' => '3G','slug'=>'3g','description' => '3G','author_id' => '1','created_at' => '2024-03-22 09:09:47','updated_at' => '2024-03-22 09:09:47'),
            array('id' => '22','attribute_id' => '5','name' => '4G','slug'=>'4g','description' => '4G','author_id' => '1','created_at' => '2024-03-22 09:09:50','updated_at' => '2024-03-22 09:09:50'),
            array('id' => '23','attribute_id' => '5','name' => '5G','slug'=>'5g','description' => '5G','author_id' => '1','created_at' => '2024-03-22 09:09:53','updated_at' => '2024-03-22 09:09:53')
          );

          Attribute::insert($attributes);
          AttributeValue::insert($attribute_values);

    }
}
