<?php

namespace Database\Seeders;

use Faker\Provider\Internet;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([

     //   'user_id'=>
      'text'=> Str::random(10)
]);
    }
}
