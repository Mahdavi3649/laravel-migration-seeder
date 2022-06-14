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
        $viaggi = config('db.viaggi');
        

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
