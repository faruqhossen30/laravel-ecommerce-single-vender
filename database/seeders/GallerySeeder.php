<?php

namespace Database\Seeders;

use App\Models\Admin\Gallery;
use App\Models\Admin\GalleryCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gallery_categories = array(
            array('id' => '1', 'name' => 'Product', 'slug' => 'product', 'author_id' => '1', 'created_at' => '2024-03-25 10:35:16', 'updated_at' => '2024-03-25 10:35:16'),
            array('id' => '2', 'name' => 'Brand', 'slug' => 'brand', 'author_id' => '1', 'created_at' => '2024-03-25 10:35:22', 'updated_at' => '2024-03-25 10:35:22'),
            array('id' => '3', 'name' => 'Category', 'slug' => 'category', 'author_id' => '1', 'created_at' => '2024-03-25 10:35:30', 'updated_at' => '2024-03-25 10:35:30')
        );

        GalleryCategory::insert($gallery_categories);

        $galleries = array(
            array('id' => '1', 'name' => '9a38c40d-1671-42e7-be76-67e270925907.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:09', 'updated_at' => '2024-03-25 10:45:09'),
            array('id' => '2', 'name' => '7d58a916-f619-4222-b184-ab94b021047e.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:10', 'updated_at' => '2024-03-25 10:45:10'),
            array('id' => '3', 'name' => 'f4e89baa-9007-495c-a025-bb706a931687.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:10', 'updated_at' => '2024-03-25 10:45:10'),
            array('id' => '4', 'name' => '084061e4-2754-4b58-9a32-65a12efae355.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:19', 'updated_at' => '2024-03-25 10:45:19'),
            array('id' => '5', 'name' => '244c9e5e-bae5-45e9-a1de-50949dee60d5.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:19', 'updated_at' => '2024-03-25 10:45:19'),
            array('id' => '6', 'name' => '498e3a09-bc86-4fff-add3-2dc3b92c705b.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:21', 'updated_at' => '2024-03-25 10:45:21'),
            array('id' => '7', 'name' => 'b16700e9-24a4-4a32-8442-abb2cfc33e48.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:21', 'updated_at' => '2024-03-25 10:45:21'),
            array('id' => '8', 'name' => '33954440-b652-465a-9893-2b22d5406779.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:22', 'updated_at' => '2024-03-25 10:45:22'),
            array('id' => '9', 'name' => '37ac31dd-14ae-4d82-b0af-4ed5b20b209b.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:23', 'updated_at' => '2024-03-25 10:45:23'),
            array('id' => '10', 'name' => 'b8d7039c-7062-4928-920f-c8663da7bb6b.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:23', 'updated_at' => '2024-03-25 10:45:23'),
            array('id' => '11', 'name' => '6c98ffd5-08a2-4da0-bc3b-2692289040a0.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:27', 'updated_at' => '2024-03-25 10:45:27'),
            array('id' => '12', 'name' => 'eef52dc8-35e6-4db6-ab79-3245ccb50539.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:28', 'updated_at' => '2024-03-25 10:45:28'),
            array('id' => '13', 'name' => 'e2d7070b-d102-40f4-a53b-79ebeae69ddb.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:29', 'updated_at' => '2024-03-25 10:45:29'),
            array('id' => '14', 'name' => 'c14f56a1-f561-4fb7-89e9-ed733b343bb6.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:29', 'updated_at' => '2024-03-25 10:45:29'),
            array('id' => '15', 'name' => '5805353b-f14d-4923-aa14-e2e82edf9dc4.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:34', 'updated_at' => '2024-03-25 10:45:34'),
            array('id' => '16', 'name' => 'bba2e15d-c34c-4d49-ba60-324e60208654.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:35', 'updated_at' => '2024-03-25 10:45:35'),
            array('id' => '17', 'name' => '0ebad05a-d437-45ed-a507-5c4841698a78.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:36', 'updated_at' => '2024-03-25 10:45:36'),
            array('id' => '18', 'name' => 'b92d20b6-201c-409d-b366-0d0443eb1ce2.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:36', 'updated_at' => '2024-03-25 10:45:36'),
            array('id' => '19', 'name' => 'b86ff212-c426-482b-b3f9-6e41a3a2163b.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:37', 'updated_at' => '2024-03-25 10:45:37'),
            array('id' => '20', 'name' => 'd1d01aae-6170-404c-9c80-54863b82feab.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:38', 'updated_at' => '2024-03-25 10:45:38'),
            array('id' => '21', 'name' => 'd5e40c31-1448-42b6-8989-f1519035e2b0.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:39', 'updated_at' => '2024-03-25 10:45:39'),
            array('id' => '22', 'name' => '995b01cf-048f-48c6-8e48-3728f01c294c.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:39', 'updated_at' => '2024-03-25 10:45:39'),
            array('id' => '23', 'name' => 'a1b1f21e-1c53-489d-889d-c7e0da7a4c79.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:41', 'updated_at' => '2024-03-25 10:45:41'),
            array('id' => '24', 'name' => 'd5405a1e-0be4-4ebb-8ee6-cdf167a4b6b8.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:42', 'updated_at' => '2024-03-25 10:45:42'),
            array('id' => '25', 'name' => '4f12e6ea-d40f-400e-ae78-06cecfc1429a.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:43', 'updated_at' => '2024-03-25 10:45:43'),
            array('id' => '26', 'name' => 'edb02f0c-085b-4bbd-b445-ce8ffa4f6096.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:43', 'updated_at' => '2024-03-25 10:45:43'),
            array('id' => '27', 'name' => '850bac31-f9e6-4b62-9e3b-4270dfab0316.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:44', 'updated_at' => '2024-03-25 10:45:44'),
            array('id' => '28', 'name' => 'ef6b598e-589c-4613-8a8c-fee055af4f7c.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:45', 'updated_at' => '2024-03-25 10:45:45'),
            array('id' => '29', 'name' => '9c786f47-d061-4642-a201-3ab875e01286.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:48', 'updated_at' => '2024-03-25 10:45:48'),
            array('id' => '30', 'name' => '49ad35b5-5763-42f3-a0e2-81a13b9e4c13.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:49', 'updated_at' => '2024-03-25 10:45:49'),
            array('id' => '31', 'name' => '36ac826b-9709-4c0a-b04f-c8a2f96c57d3.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:50', 'updated_at' => '2024-03-25 10:45:50'),
            array('id' => '32', 'name' => 'bc03b4ce-08c9-496a-a144-067a74c7cf2c.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:51', 'updated_at' => '2024-03-25 10:45:51'),
            array('id' => '33', 'name' => '50caeb2a-b9b4-4f76-b55b-295702df92a0.png', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:52', 'updated_at' => '2024-03-25 10:45:52'),
            array('id' => '34', 'name' => '3b3eaede-5382-4726-95b2-8712ccf36ac8.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:52', 'updated_at' => '2024-03-25 10:45:52'),
            array('id' => '35', 'name' => '8a6df945-c330-4ed4-b220-9c9409f79094.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:53', 'updated_at' => '2024-03-25 10:45:53'),
            array('id' => '36', 'name' => 'daac9768-167c-457b-9737-c210057cb9b8.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:54', 'updated_at' => '2024-03-25 10:45:54'),
            array('id' => '37', 'name' => '417ac407-650d-4307-8ac4-723d73a983c8.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:45:55', 'updated_at' => '2024-03-25 10:45:55'),
            array('id' => '38', 'name' => '169005ff-218a-4d6c-8acc-58b57d62286b.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:02', 'updated_at' => '2024-03-25 10:46:02'),
            array('id' => '39', 'name' => 'ed1d9b96-4f94-4511-9ea1-30345e6b4cd4.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:02', 'updated_at' => '2024-03-25 10:46:02'),
            array('id' => '40', 'name' => '6b0e27f9-088d-4347-a712-3b10f7f12aa4.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:04', 'updated_at' => '2024-03-25 10:46:04'),
            array('id' => '41', 'name' => 'c241ff44-b9f5-4964-961c-94a76f416ed3.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:05', 'updated_at' => '2024-03-25 10:46:05'),
            array('id' => '42', 'name' => '2e716afb-e05a-4864-8e21-322df3256993.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:06', 'updated_at' => '2024-03-25 10:46:06'),
            array('id' => '43', 'name' => '0d11ed70-5a22-4c3b-bd6b-017bb60d1b9c.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:06', 'updated_at' => '2024-03-25 10:46:06'),
            array('id' => '44', 'name' => '45d6391c-3325-4ed1-b41e-831b6997ed8c.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:09', 'updated_at' => '2024-03-25 10:46:09'),
            array('id' => '45', 'name' => '7cdeda6d-cb73-4d22-8a0c-2d19b6cd961e.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:09', 'updated_at' => '2024-03-25 10:46:09'),
            array('id' => '46', 'name' => '90a69314-6da7-43e0-8e82-4675710ae1e2.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:11', 'updated_at' => '2024-03-25 10:46:11'),
            array('id' => '47', 'name' => 'f007add3-2a79-41ee-8ee5-4caaf955810b.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:11', 'updated_at' => '2024-03-25 10:46:11'),
            array('id' => '48', 'name' => '9cc12615-6e49-498c-8e9b-e94e9b5a7778.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:12', 'updated_at' => '2024-03-25 10:46:12'),
            array('id' => '49', 'name' => 'd34eceee-1726-4f9c-9742-44cd383f4827.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:13', 'updated_at' => '2024-03-25 10:46:13'),
            array('id' => '50', 'name' => '56a40a3a-4e2d-48bb-a01c-9501105ea22f.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:14', 'updated_at' => '2024-03-25 10:46:14'),
            array('id' => '51', 'name' => 'dac1bbdf-0098-4b2b-b6a9-eabd751b7630.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '1', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:14', 'updated_at' => '2024-03-25 10:46:14'),
            array('id' => '52', 'name' => '92c5f9bb-49d4-4065-9126-013017b311eb.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '2', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:39', 'updated_at' => '2024-03-25 10:46:39'),
            array('id' => '53', 'name' => '6d072295-cfd0-46d1-b2f8-990da974751f.webp', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '2', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:40', 'updated_at' => '2024-03-25 10:46:40'),
            array('id' => '54', 'name' => '1360a1d0-0275-439d-9bfd-b3881fd7d4a0.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '2', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:41', 'updated_at' => '2024-03-25 10:46:41'),
            array('id' => '55', 'name' => 'fa3969f8-eb76-4c97-8325-0e0c81afb406.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '2', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:41', 'updated_at' => '2024-03-25 10:46:41'),
            array('id' => '56', 'name' => 'dcf8479a-0702-463c-9645-011baf96dbf8.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '2', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:42', 'updated_at' => '2024-03-25 10:46:42'),
            array('id' => '57', 'name' => '1ba8e69a-e2d5-4333-a219-2129d8d9bdef.png', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '2', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:42', 'updated_at' => '2024-03-25 10:46:42'),
            array('id' => '58', 'name' => '6d0e98c3-b862-4c50-b57e-d04b2f931ca0.png', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '2', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:43', 'updated_at' => '2024-03-25 10:46:43'),
            array('id' => '59', 'name' => '992df1bd-0300-4344-866f-087a2110f221.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:59', 'updated_at' => '2024-03-25 10:46:59'),
            array('id' => '60', 'name' => '41b10ab4-2c60-4eab-b009-a9973982e07f.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:46:59', 'updated_at' => '2024-03-25 10:46:59'),
            array('id' => '61', 'name' => 'fa9e5535-c67e-46d4-be24-173453bb8376.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:47:00', 'updated_at' => '2024-03-25 10:47:00'),
            array('id' => '62', 'name' => 'aca6fe07-2b15-4183-a517-7de8bd781b41.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:47:01', 'updated_at' => '2024-03-25 10:47:01'),
            array('id' => '63', 'name' => '71e34a0b-292f-47d4-9fdf-e40687442452.webp', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:47:02', 'updated_at' => '2024-03-25 10:47:02'),
            array('id' => '64', 'name' => 'fc257965-2e2c-4951-b0f9-7abd7f282f3b.jpeg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:47:02', 'updated_at' => '2024-03-25 10:47:02'),
            array('id' => '65', 'name' => '58acf827-9739-4cd7-b1ae-0175485ba385.PNG', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:47:03', 'updated_at' => '2024-03-25 10:47:03'),
            array('id' => '66', 'name' => '4c064980-adda-4e0a-8a85-50c1c963a652.PNG', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:47:03', 'updated_at' => '2024-03-25 10:47:03'),
            array('id' => '67', 'name' => '3ffe3b72-1c9a-45ee-a6ad-df6f6d62626d.jpeg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:47:04', 'updated_at' => '2024-03-25 10:47:04'),
            array('id' => '68', 'name' => '516eed26-6701-4ad0-b344-e827565a4c29.jpeg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:47:05', 'updated_at' => '2024-03-25 10:47:05'),
            array('id' => '69', 'name' => 'c554bdc3-430d-410a-a1bd-51bdbe5a1021.jpg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:47:06', 'updated_at' => '2024-03-25 10:47:06'),
            array('id' => '70', 'name' => '8afd7f72-3342-496d-9473-bf0987262708.jpeg', 'size' => NULL, 'caption' => NULL, 'alter_tag' => NULL, 'category_id' => '3', 'author_id' => '1', 'created_at' => '2024-03-25 10:47:06', 'updated_at' => '2024-03-25 10:47:06')
        );
        Gallery::insert($galleries);
    }
}
