<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Trenord',
                'departure_station' => 'Cremona',
                'arrival_station' => 'Brescia',
                'departure_time' => '15:25:00',
                'arrival_time' => '16:25:00',
                'train_code' => 10532,
                'carriage_number' => rand(1, 5),
                'is_in_time' => rand(0, 1),
                'is_delete' => rand(0, 1)
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Cremona',
                'arrival_station' => 'Brescia',
                'departure_time' => '16:25:00',
                'arrival_time' => '17:25:00',
                'train_code' => 10534,
                'carriage_number' => rand(1, 5),
                'is_in_time' => rand(0, 1),
                'is_delete' => rand(0, 1)
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Cremona',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '17:30:00',
                'arrival_time' => '18:40:00',
                'train_code' => 2178,
                'carriage_number' => rand(1, 8),
                'is_in_time' => rand(0, 1),
                'is_delete' => rand(0, 1)
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Cremona',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '19:30:00',
                'arrival_time' => '20:40:00',
                'train_code' => 2182,
                'carriage_number' => rand(1, 8),
                'is_in_time' => rand(0, 1),
                'is_delete' => rand(0, 1)
            ]
        ];

        foreach($trains as $train)
        {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriage_number = $train['carriage_number'];
            $newTrain->is_in_time = $train['is_in_time'];
            $newTrain->is_delete = $train['is_delete'];
            $newTrain->save();
        }
    }
}
