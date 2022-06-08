<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 2,
                'status' => 1,
            ]);

            DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 3,
                'status' => 1,
            ]);
            DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 1,
                'status' => 1,
            ]);
            DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 4,
                'status' => 1,
            ]);
            DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 5,
                'status' => 1,
            ]);DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 6,
                'status' => 1,
            ]);DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 8,
                'status' => 1,
            ]);DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 7,
                'status' => 1,
            ]);DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 9,
                'status' => 1,
            ]);
            DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 10,
                'status' => 1,
            ]);

            DB::table('connections')->insert([
                'user_id' => 1,
                'connected_id' => 11,
                'status' => 1,
            ]);
            DB::table('connections')->insert([
                'user_id' => 2,
                'connected_id' => 3,
                'status' => 1,
            ]);
          
            DB::table('connections')->insert([
                'user_id' => 2,
                'connected_id' => 4,
                'status' => 1,
            ]);
            DB::table('connections')->insert([
                'user_id' => 2,
                'connected_id' => 5,
                'status' => 1,
            ]);DB::table('connections')->insert([
                'user_id' => 2,
                'connected_id' => 6,
                'status' => 1,
            ]);DB::table('connections')->insert([
                'user_id' => 2,
                'connected_id' => 8,
                'status' => 1,
            ]);DB::table('connections')->insert([
                'user_id' => 2,
                'connected_id' => 7,
                'status' => 1,
            ]);DB::table('connections')->insert([
                'user_id' => 2,
                'connected_id' => 9,
                'status' => 1,
            ]);
            DB::table('connections')->insert([
                'user_id' => 2,
                'connected_id' => 10,
                'status' => 1,
            ]);

            DB::table('connections')->insert([
                'user_id' => 2,
                'connected_id' => 11,
                'status' => 1,
            ]);

            DB::table('connections')->insert([
                'user_id' => 12,
                'connected_id' => 1,
                'status' => 0,
            ]);
            DB::table('connections')->insert([
                'user_id' => 13,
                'connected_id' => 1,
                'status' => 0,
            ]);
            DB::table('connections')->insert([
                'user_id' => 14,
                'connected_id' => 1,
                'status' => 0,
            ]);
         
    }
}
