<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User as User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->first_name = "Flavio";
        $user->name = 'PEIXOTO';
        $user->birth_date = '21-06-2001';
        $user->email = 'flavio.peixoto@ynov.com';
        $user->password = 'testdemdp';
        $user->save();
    }
}
