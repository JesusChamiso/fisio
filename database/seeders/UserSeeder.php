<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Medico',
            'email' => 'medicofisio@gmail.com',
            'password' => bcrypt('12345')
        ])->assignRole('medico');
        
        User::create([
            'name' => 'Secretaria',
            'email' => 'secretariafisio@gmail.com',
            'password' => bcrypt('54321')
        ])->assignRole('secretaria');
        
        User::create([
            'name' => 'Cajero',
            'email' => 'cajerofisio@gmail.com',
            'password' => bcrypt('78910')
        ])->assignRole('cajero');
    }
}
