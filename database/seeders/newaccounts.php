<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class newaccounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        \App\Models\User::create([
             'username' => 'Admin',
            'name' => 'Admin',
            'email' => 'Admin@'.env('DOMAIN_NAME'),
             'email_verified_at' => '2000-01-01 00:00:00',
            'level' => '9',
            'password' => \Illuminate\Support\Facades\Hash::make('Admin12#'),
        ]);
         
         \App\Models\User::create([
              'username' => 'Cikgu',
            'name' => 'Cikgu',
            'email' => 'Cikgu'.'@'.env('DOMAIN_NAME'),
             'email_verified_at' => '2000-01-01 00:00:00',
            'level' => '1',
            'password' => \Illuminate\Support\Facades\Hash::make('Admin12#'),
        ]);
         
             \App\Models\User::create([
              'username' => 'Warden',
            'name' => 'Warden',
            'email' => 'Warden'.'@'.env('DOMAIN_NAME'),
             'email_verified_at' => '2000-01-01 00:00:00',
            'level' => '2',
            'password' => \Illuminate\Support\Facades\Hash::make('Admin12#'),
        ]);
             
                 \App\Models\User::create([
              'username' => 'level3',
            'name' => 'level3',
            'email' => 'level3'.'@'.env('DOMAIN_NAME'),
             'email_verified_at' => '2000-01-01 00:00:00',
            'level' => '3',
            'password' => \Illuminate\Support\Facades\Hash::make('Admin12#'),
        ]);
        
     
            
        }
    }

