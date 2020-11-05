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
        $arr = array('A', 'B', 'C', 'D','E','F');
        $index=0;
        foreach ($arr as &$x) {
        
        $index++;
        \Illuminate\Support\Facades\DB::table('users')->insert([
             'username' => 'Admin_'.$x,
            'name' => 'Admin_'.$x,
            'email' => 'Admin_'.$x.'@e-dm5.uk',
             'email_verified_at' => '2000-01-01 00:00:00',
            'password' => \Illuminate\Support\Facades\Hash::make('Admin12#'),
        ]);
         
         $user = \App\Models\User::find($index);
            $user->profile()->create([
                'name' => $user->username,
            ]);       
        }
    }
}
