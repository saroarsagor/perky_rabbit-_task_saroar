<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class AccessControlsTableSeeder extends Seeder
{


    public function run()
    {
        $dev = User::where('email', 'systemadmin@gmail.com')->first();

        if (empty($dev)) {

            $data = [
                [
                    'id'=>'1',
                    'name' => 'System Admin',
                    'email' => 'systemadmin@gmail.com',
                    'user_type' => 'systemadmin',
                    'password' => bcrypt('123456'),
                ],
                [
                    'id'=>'2',
                    'name' => 'User Name',
                    'email' => 'user@gmail.com',
                    'user_type' => 'user',
                    'password' => bcrypt('123456'),
                ]
            ];

            User::insert($data);
        }
    }
}
