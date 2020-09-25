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
            'name'           => 'Bulutoy',
            'designation'    => 'Antipolo',
            'profile_pic'    =>  'https://ca-times.brightspotcdn.com/dims4/default/31d48c6/2147483647/strip/true/crop/2974x1983+0+0/resize/840x560!/quality/90/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2Fe1%2F30%2Fc8e3355d4140a27c41ebdcd9b3df%2Fvirus-outbreak-trump-82232.jpg'
        ]);

        $user2 = User::create([
            'first_name'    => 'Rigor',
            'middle_name'   => 'A',
            'last_name'     => 'Sagun',
            'email'         => 'rigor@gmail.com',
            'password'      => bcrypt('password')
        ]);

        $user2->profile()->create([
            'name'           => 'Black Mamba',
            'designation'    => 'Manil',
            'profile_pic'    =>  'https://ca-times.brightspotcdn.com/dims4/default/31d48c6/2147483647/strip/true/crop/2974x1983+0+0/resize/840x560!/quality/90/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2Fe1%2F30%2Fc8e3355d4140a27c41ebdcd9b3df%2Fvirus-outbreak-trump-82232.jpg'
        ]);
    }
}
