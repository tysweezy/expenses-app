<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // start off with one project
        factory(App\Project::class, 1)->create();
        
        //start off with 10 expenses
        factory(App\Expense::class, 10)->create();
    }
}
