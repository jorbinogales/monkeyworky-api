<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            'name' => 'Bank Of America',
            'owner' => 'Zelle',
            'email' => 'keystone26@hotmail.com',
            'type' => 'USD',
        ]);
    }
}
