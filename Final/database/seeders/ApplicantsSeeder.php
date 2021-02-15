<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApplicantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('applicants')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(8),
            'phone' => Str::random(8),
            'position' => Str::random(8),
            'is_hired' => True
        ]);
    }
}
