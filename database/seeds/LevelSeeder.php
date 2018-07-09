<?php

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            [
                'id' => 1,
                'level' => 1,
                'description' => 'Agent1',
            ],[
                'id' => 2,
                'level' => 2,
                'description' => 'Agent2',
            ],[
                'id' => 3,
                'level' => 3,
                'description' => 'Agent3',
            ],[
                'id' => 4,
                'level' => 4,
                'description' => 'Agent4',
            ],[
                'id' => 5,
                'level' => 5,
                'description' => 'Agent5',
            ],[
                'id' => 6,
                'level' => 6,
                'description' => 'Agent6',
            ],[
                'id' => 7,
                'level' => 7,
                'description' => 'Agent7',
            ],[
                'id' => 8,
                'level' => 8,
                'description' => 'Administrator1',
            ],[
                'id' => 9,
                'level' => 9,
                'description' => 'Administrator2',
            ],
        ];

        foreach ($levels as $level) {
            $level_model = new Level;
            $level_model->id = $level['id'];
            $level_model->level = $level['level'];
            $level_model->description = $level['description'];
            $level_model->save();
        }
    }
}
