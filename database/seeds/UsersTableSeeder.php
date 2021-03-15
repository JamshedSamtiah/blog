<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'userid'=> 'admin101',
            'role_id'=>'1',
            'name'=> 'Admin',
            'email'=>'admin@admin.com',
            'password'=> bcrypt('admin'),
        ]);
        $admin = User::create([
            'userid'=> 'user101',
            'role_id'=>'2',
            'name'=> 'user',
            'email'=>'user@user.com',
            'password'=> bcrypt('user'),
        ]);
    }
}
