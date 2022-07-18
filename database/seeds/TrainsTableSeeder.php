<?php
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $company = ['Trenord', 'Trenitalia', 'OBD'];
        //
        for($i=0; $i<20; $i++){
            $train = new Train();
            $train->train_number = rand(200, 370);
            $train->company = $company[rand(0,2)];
            $train->departing_station = 'Milano Centrale';
            $train->arriving_station = $faker->city;
            $train->departing_time = $faker->time;
            $train->arriving_time = $faker->time;
            $train->train_coaches = rand(3,7);
            $train->on_schedule = true;
            $train->cancelled = false;
            $train->save();

        };
    }
}
