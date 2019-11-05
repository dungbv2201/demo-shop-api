<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $images =[
            'https://peaceful-sands-42159.herokuapp.com/images/ao-thun-2.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/ao-thun-3.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/ao-thun-5.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/ao-thun-6.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/ao-thun-7.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/ao-thun-8.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/ao-thun-11.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/ao-thun-12.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/aothun-10.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/aothun-9.jpg',
        ];

        $jeans =[
            'https://peaceful-sands-42159.herokuapp.com/images/quan-jean-1.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/quan-jean-2.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/quan-jean-3.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/quan-jean-4.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/quan-jean-6.jpg',
            'https://peaceful-sands-42159.herokuapp.com/images/quanj-5.jpg',
        ];

        foreach ($images as $key=>$img){
            \App\Models\Product::create([
                'name' => 'Áo thun '.($key+1),
                'price' => random_int(10,100),
                'sale_off' => $key %2 ==0? random_int(10,40):0,
                'category_id' =>1,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' =>$img,
                'stock' => random_int(5,20)


            ]);
        }
        foreach ($jeans as $key=>$jean){
            \App\Models\Product::create([
                'name' => 'Quần Jean '.($key+1),
                'price' => random_int(10,100),
                'sale_off' => $key %2 ==0? random_int(10,40):0,
                'category_id' =>1,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' =>$img,
                'stock' => random_int(5,20)


            ]);
        }
    }
}
