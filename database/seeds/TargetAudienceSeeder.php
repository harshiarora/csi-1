<?php

use Illuminate\Database\Seeder;

class TargetAudienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('target_audience')->delete();
        
        $data = [
            ['target_name' => ''],
            ['target_name' => ''],
            ['target_name' => ''],
            ['target_name' => ''],
            ['target_name' => '']
        ];
           
        foreach ($data as $value) {
            EventType::create($value);
        }
    }
}
