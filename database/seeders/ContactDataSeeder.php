<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_data')->insert([
            'phone' => '+7(999) 999 99-99',
            'email' => 'TEST@EMAIL.COM',
            'adress' => 'RUSSIA, VYAZNIKI',
        ]);
    }
}
