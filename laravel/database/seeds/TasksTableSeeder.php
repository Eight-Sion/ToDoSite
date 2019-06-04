<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Comment;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 50)
            ->create()
            ->each(function ($task) {
                $comments = factory(App\Comment::class, 2)->make();
                $task->comments()->saveMany($comments);
            });
    }
}