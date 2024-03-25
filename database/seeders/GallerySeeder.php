<?php

namespace Database\Seeders;

use App\Models\Admin\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = array(
            array('id' => '1','name' => '55adb501-2cbc-4ee8-81a5-6b50881b5ef4.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:31:45','updated_at' => '2024-03-25 05:31:45'),
            array('id' => '2','name' => '9e06b194-7aa5-436c-9930-2603599dfa82.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:31:45','updated_at' => '2024-03-25 05:31:45'),
            array('id' => '3','name' => '5cf2671f-53ca-453d-9872-e3ca9dbeb74e.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:31:46','updated_at' => '2024-03-25 05:31:46'),
            array('id' => '4','name' => '6de168b0-c5c4-4756-9351-7902f349188a.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:05','updated_at' => '2024-03-25 05:32:05'),
            array('id' => '5','name' => 'ab2fbcff-3c89-46f7-a965-735d58f26dcb.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:05','updated_at' => '2024-03-25 05:32:05'),
            array('id' => '6','name' => '3ef34695-5159-4e23-85ae-925b33cb74e8.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:06','updated_at' => '2024-03-25 05:32:06'),
            array('id' => '7','name' => '1a2608e1-b152-432a-9147-21024f3f5b90.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:06','updated_at' => '2024-03-25 05:32:06'),
            array('id' => '8','name' => '10dca732-d798-4bdd-912b-e92924635fa7.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:08','updated_at' => '2024-03-25 05:32:08'),
            array('id' => '9','name' => 'cab6b518-ac25-4899-a62a-209a9926ea6b.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:08','updated_at' => '2024-03-25 05:32:08'),
            array('id' => '10','name' => '66ac8f01-6ee1-4ff5-8a04-a71d4f18e0c5.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:09','updated_at' => '2024-03-25 05:32:09'),
            array('id' => '11','name' => '64733f1c-27df-4954-a04f-5d85e8d60e4f.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:44','updated_at' => '2024-03-25 05:32:44'),
            array('id' => '12','name' => '16fb140d-fcc0-4bd0-9dde-03fd59fcf5f3.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:44','updated_at' => '2024-03-25 05:32:44'),
            array('id' => '13','name' => '47c31fad-979a-4dc9-a578-d78e242c16d3.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:46','updated_at' => '2024-03-25 05:32:46'),
            array('id' => '14','name' => '018237e9-2d52-4cc3-9518-5e2e766d9a89.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:46','updated_at' => '2024-03-25 05:32:46'),
            array('id' => '15','name' => 'ba8a5a86-3ed1-42c8-9a59-50271a336011.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:52','updated_at' => '2024-03-25 05:32:52'),
            array('id' => '16','name' => 'd2543a8d-2fe2-49a1-9956-fc9241535e62.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:52','updated_at' => '2024-03-25 05:32:52'),
            array('id' => '17','name' => 'ca14cfe8-beb3-4bce-b5f6-7a732ea9037c.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:53','updated_at' => '2024-03-25 05:32:53'),
            array('id' => '18','name' => '1bb62e4f-ec12-43bf-9fb8-6748940a6efc.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:54','updated_at' => '2024-03-25 05:32:54'),
            array('id' => '19','name' => '9b1fab55-83c5-4d64-b9d7-fa2ec796250c.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:55','updated_at' => '2024-03-25 05:32:55'),
            array('id' => '20','name' => '9c9dee49-6c21-4a4b-8f89-2ee6fe5f019c.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:55','updated_at' => '2024-03-25 05:32:55'),
            array('id' => '21','name' => 'c8ee0255-8c75-4e29-bd04-236060eae793.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:56','updated_at' => '2024-03-25 05:32:56'),
            array('id' => '22','name' => '9d7a8f31-c027-41e4-947c-7cff81d4efa8.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:32:57','updated_at' => '2024-03-25 05:32:57'),
            array('id' => '23','name' => '3a18cb63-66b2-42c5-9d9f-10c012ce2803.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:10','updated_at' => '2024-03-25 05:33:10'),
            array('id' => '24','name' => '71349a04-d542-4e2b-a4ea-47a92346ecc9.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:10','updated_at' => '2024-03-25 05:33:10'),
            array('id' => '25','name' => 'd7d9e0b5-38a4-4e36-a3d1-18b72dec603d.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:11','updated_at' => '2024-03-25 05:33:11'),
            array('id' => '26','name' => 'a8677cc5-071b-43a4-a422-d547c8bdd583.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:11','updated_at' => '2024-03-25 05:33:11'),
            array('id' => '27','name' => '874b22a1-4e2e-4482-ab6b-941493cf01f1.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:12','updated_at' => '2024-03-25 05:33:12'),
            array('id' => '28','name' => '644a6030-3485-4d0c-9180-1352d4b4d9ce.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:13','updated_at' => '2024-03-25 05:33:13'),
            array('id' => '29','name' => '1e88672b-b97c-45c3-af4f-42e907cada2c.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:13','updated_at' => '2024-03-25 05:33:13'),
            array('id' => '30','name' => 'f449b1db-a938-4276-8e25-b87589a26449.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:18','updated_at' => '2024-03-25 05:33:18'),
            array('id' => '31','name' => '15f7d5fd-15e8-4933-921c-6372a018c1c3.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:19','updated_at' => '2024-03-25 05:33:19'),
            array('id' => '32','name' => '1cd9eeb8-ffb1-44eb-89f1-3b4a2e6242f5.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:20','updated_at' => '2024-03-25 05:33:20'),
            array('id' => '33','name' => '2e20d2d2-f08c-4e43-95e9-3f08a3e99641.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:20','updated_at' => '2024-03-25 05:33:20'),
            array('id' => '34','name' => '95d69727-e40e-473d-ac5b-6efe2f3a9455.png','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:21','updated_at' => '2024-03-25 05:33:21'),
            array('id' => '35','name' => '9677e2c2-5840-4e8a-a986-b5a9bc6899fc.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:21','updated_at' => '2024-03-25 05:33:21'),
            array('id' => '36','name' => '413b3834-bf29-4c7a-a818-262fe2309cfc.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:22','updated_at' => '2024-03-25 05:33:22'),
            array('id' => '37','name' => 'b7862b25-d6b3-4060-b03a-c52b7f85a170.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:22','updated_at' => '2024-03-25 05:33:22'),
            array('id' => '38','name' => 'bdb4f0f7-7cb6-4ad7-aeef-6e02354ccf7d.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:23','updated_at' => '2024-03-25 05:33:23'),
            array('id' => '39','name' => 'aed4c2d7-c8d4-48e6-ad7a-5ff264d8b4c4.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:34','updated_at' => '2024-03-25 05:33:34'),
            array('id' => '40','name' => 'bc134b0f-ad2e-482a-afd3-17c3443edd63.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:35','updated_at' => '2024-03-25 05:33:35'),
            array('id' => '41','name' => '76a574a1-2f47-4dda-9c94-a5009d54476f.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:35','updated_at' => '2024-03-25 05:33:35'),
            array('id' => '42','name' => '76196748-14d9-4e02-9474-b8c5ac883cd9.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:36','updated_at' => '2024-03-25 05:33:36'),
            array('id' => '43','name' => '20fd1742-de24-4345-adf0-f86b8340729b.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:36','updated_at' => '2024-03-25 05:33:36'),
            array('id' => '44','name' => 'a4b728d3-71eb-4a2e-9eae-84e42a43d148.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:37','updated_at' => '2024-03-25 05:33:37'),
            array('id' => '45','name' => '23707eb1-fb25-434f-84d8-fd8bf8692221.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:45','updated_at' => '2024-03-25 05:33:45'),
            array('id' => '46','name' => '90618631-1e8d-4f9c-bc75-b812d199183b.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:45','updated_at' => '2024-03-25 05:33:45'),
            array('id' => '47','name' => 'e9e47b48-aae4-4f30-a102-1fe2b4071d68.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:46','updated_at' => '2024-03-25 05:33:46'),
            array('id' => '48','name' => '57eadccb-a0d4-4a3f-8103-aa617965b1bb.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:46','updated_at' => '2024-03-25 05:33:46'),
            array('id' => '49','name' => 'bf845568-e071-446e-9b5d-60880ae1d922.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:47','updated_at' => '2024-03-25 05:33:47'),
            array('id' => '50','name' => '2ae622d1-50a7-4572-943b-2ee44a88e0be.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:47','updated_at' => '2024-03-25 05:33:47'),
            array('id' => '51','name' => '4b75786f-4d3c-407d-88fd-43a9f8b0296c.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:48','updated_at' => '2024-03-25 05:33:48'),
            array('id' => '52','name' => 'ac3adcf6-ee33-4234-a9a4-06677681dd40.jpg','size' => NULL,'caption' => NULL,'alter_tag' => NULL,'category_id' => '1','author_id' => '1','created_at' => '2024-03-25 05:33:48','updated_at' => '2024-03-25 05:33:48')
          );


          Gallery::insert($galleries);

    }
}
