<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CastomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        for ($i = 1; $i <= 50; $i++) {
            DB::table('castoms')->insert([
                'demo' => "Demo $i",
                'description' => "Description for demo $i",
                'status' => $i % 2,  // alternate between true (1) and false (0)
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
