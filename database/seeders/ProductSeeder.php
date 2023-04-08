<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "images" => "p-11.webp",
                "name" => "Shoes",
                "old_price" => "175000",
                "sales_price" => "84000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-12.webp",
                "name" => "Cellphones",
                "old_price" => "152000",
                "sales_price" => "95000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-13.webp",
                "name" => "Duis arcu tortor, suscipit eget, imperdiet nec",
                "old_price" => "25000",
                "sales_price" => "22000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-14.webp",
                "name" => "Vestibulum ante ipsum primis in faucibus",
                "old_price" => "39000",
                "sales_price" => "32500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-15.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "7500",
                "sales_price" => "6100",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-16.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "64500",
                "sales_price" => "60200",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-17.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "0",
                "sales_price" => "67500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-18.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "45000",
                "sales_price" => "41500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-19.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "0",
                "sales_price" => "6100",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-20.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "8400",
                "sales_price" => "7500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-21.webp",
                "name" => "Shoes",
                "old_price" => "102000",
                "sales_price" => "119500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-22.webp",
                "name" => "Cellphones",
                "old_price" => "80500",
                "sales_price" => "76000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-23.webp",
                "name" => "Duis arcu tortor, suscipit eget, imperdiet nec",
                "old_price" => "23900",
                "sales_price" => "23100",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-24.webp",
                "name" => "Vestibulum ante ipsum primis in faucibus",
                "old_price" => "15400",
                "sales_price" => "13600",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-25.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "20400",
                "sales_price" => "17800",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-26.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "770",
                "sales_price" => "500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-27.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "69000",
                "sales_price" => "67500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-28.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "7500",
                "sales_price" => "6000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-29.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "14500",
                "sales_price" => "12000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-30.webp",
                "name" => "Phasellus ullamcorper ipsum rutrum nunc",
                "old_price" => "4500",
                "sales_price" => "1500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JUTDYGHBJJKKH678789HG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-31.webp",
                "name" => "Ipsum rutrum nunc",
                "old_price" => "0",
                "sales_price" => "7800",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "JYYHJJ898HJKJK",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-32.webp",
                "name" => "Iphone 12Pro-Max",
                "old_price" => "0",
                "sales_price" => "10500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "KTTDUSSSS0088JJSS",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-33.webp",
                "name" => "Tecno Spark 12pro",
                "old_price" => "155000",
                "sales_price" => "145000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "NJSYYSR78299FVS788HS",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-34.webp",
                "name" => "Tecno Phartom 13",
                "old_price" => "215000",
                "sales_price" => "205000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "PLSFDSFGBN9876DVBNS",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-35.webp",
                "name" => "Iphone 12Pro-Max",
                "old_price" => "0",
                "sales_price" => "10500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "KTTDUSSSS0088JJSS",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-36.webp",
                "name" => "Iphone 11Pro-Max",
                "old_price" => "455000",
                "sales_price" => "450000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "OFGS987tGNSJH9",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-37.webp",
                "name" => "Iphone 13Pro-Max",
                "old_price" => "399000",
                "sales_price" => "395000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "KJJHFSGHHHG8976FG",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-38.webp",
                "name" => "Iphone 12Pro-Max",
                "old_price" => "0",
                "sales_price" => "10500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "KTTDUSSSS0088JJSS",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-39.webp",
                "name" => "Samsung Galaxy 11",
                "old_price" => "186000",
                "sales_price" => "184000",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "GSJSGFGVB87678SHSJSS",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
            [
                "images" => "p-40.webp",
                "name" => "Iphone 12Pro-Max",
                "old_price" => "0",
                "sales_price" => "10500",
                "quantity" => 100,
                "sold" => 0,
                "SKU" => "KTTDUSSSS0088JJSS",
                "category" => "Phones and Tablets",
                "status" => "Active",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima repellat deserunt fugiat. Laudantium molestiae quasi debitis omnis, adipisci, ex, blanditiis aspernatur quaerat consequatur eius animi autem cumque molestias earum odio."
            ],
        ];

        Product::insert($products);
    }
}
