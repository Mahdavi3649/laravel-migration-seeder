<?php

use Illuminate\Database\Seeder;

use App\Viaggio;

class ViaggiTableSeeder01 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $viaggi = [
            [
                'id' => 1,
                'price' => 2500,
                'place' => 'Barcelona',
                'description' => 'si trova un paradiso inesplorato: è uno degli ultimi angoli d’Europa in grado di catturare i viaggiatori con il suo fascino esotico fuori dal tempo. La varietà di paesaggi, in una terra così piccola',
                'duration' => 8,
                'residence_type' => 'Hotel',
                'image' => 'https://content.skyscnr.com/m/0ae895370607a52c/original/GettyImages-176963521.jpg',
                'travel_style' => 'Classic',
                'tour' => 'Cruise',
            ],
            [  
                  'id' => 2,
                'price' => 2000,
                'place' => 'Madeira',
                'description' => 'si trova un paradiso inesplorato: è uno degli ultimi angoli d’Europa in grado di catturare i viaggiatori con il suo fascino esotico fuori dal tempo. La varietà di paesaggi, in una terra così piccola',
                'duration' => 11,
                'residence_type' => 'Villa',
                'image' => 'https://assets3.thrillist.com/v1/image/3073092/414x310/crop;webp=auto;jpeg_quality=60;progressive.jpg',
                'travel_style' => 'Break',
                'tour' => 'Car',
            ],
            [
                'id' => 3,
                'price' => 1500,
                'place' => 'Egypt',
                'description' => 'si trova un paradiso inesplorato: è uno degli ultimi angoli d’Europa in grado di catturare i viaggiatori con il suo fascino esotico fuori dal tempo. La varietà di paesaggi, in una terra così piccola',
                'duration' => 7,
                'residence_type' => 'Hotel',
                'image' => 'https://img.traveltriangle.com/blog/wp-content/uploads/2018/11/egypt-trip-cover.jpg',
                'travel_style' => 'Break',
                'tour' => 'Camel',
            ]

        ];

        foreach ($viaggi as $viaggio) {

            $new_viaggio = new Viaggio();
            $new_viaggio->id = $viaggio['id'];
            $new_viaggio->price = $viaggio['price'];
            $new_viaggio->place = $viaggio['place'];
            $new_viaggio->description = $viaggio['description'];
            $new_viaggio->duration = $viaggio['duration'];
            $new_viaggio->residence_type = $viaggio['residence_type'];
            $new_viaggio->image = $viaggio['image'];
            $new_viaggio->travel_style = $viaggio['travel_style'];
            $new_viaggio->tour = $viaggio['tour'];
            $new_viaggio->save();
        }
    }
}
