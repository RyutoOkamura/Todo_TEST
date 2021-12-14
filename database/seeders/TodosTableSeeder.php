<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = ['Todo1', 'Todo2', 'Todo3'];
        foreach ($contents as $content){
            DB::table('todos')->insert([
                'content' => $content,
                'created_at' => new Datetime(),
                'updated_at' =>  new Datetime()
            ]);
        }
    }
}
