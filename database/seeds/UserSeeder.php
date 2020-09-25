<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name'    => 'Bryan',
            'middle_name'   => 'p',
            'last_name'     => 'Casimero',
            'email'         => 'bryanjames@gmail.com',
            'password'      => bcrypt('password')
        ]);

        $user->profile()->create([
            'name'           => 'Brybrybry',
            'designation'    => 'Engineer/IT Specialist',
            'profile_pic'    =>  'https://media.discordapp.net/attachments/723983709404921927/736217611485970452/bry.jpg?width=427&height=427'
        ]);

        $user2 = User::create([
            'first_name'    => 'Rigor',
            'middle_name'   => 'A',
            'last_name'     => 'Sagun',
            'email'         => 'rigor@gmail.com',
            'password'      => bcrypt('password')
        ]);

        $user2->profile()->create([
            'name'           => 'reasagun',
            'designation'    => 'System Developer',
            'profile_pic'    =>  'https://media.discordapp.net/attachments/723983709404921927/736217611813257366/gor.jpg?width=432&height=427'
        ]);

        $user3 = User::create([
            'first_name'    => 'Lemuel',
            'middle_name'   => 'John',
            'last_name'     => 'Ami',
            'email'         => 'lemuel@gmail.com',
            'password'      => bcrypt('password')
        ]);

        $user3->profile()->create([
            'name'           => 'Engr. Bok-dev',
            'designation'    => 'Hardware specialist',
            'profile_pic'    =>  'https://media.discordapp.net/attachments/723983709404921927/736217608331853915/lem.jpg?width=427&height=427'
        ]);

        $user4 = User::create([
            'first_name'    => 'Jeraldine',
            'middle_name'   => 'Z',
            'last_name'     => 'Cagatin',
            'email'         => 'jaks@gmail.com',
            'password'      => bcrypt('password')
        ]);

        $user4->profile()->create([
            'name'           => 'Jenbytes',
            'designation'    => 'UI/UX developer',
            'profile_pic'    =>  'https://media.discordapp.net/attachments/723983709404921927/736217614216331294/Jaks.jpg'
        ]);
    }
}
