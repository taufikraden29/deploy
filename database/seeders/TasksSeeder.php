<?php

namespace Database\Seeders;

use App\Models\Task;

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Task::factory(10)->create();
    }
}
