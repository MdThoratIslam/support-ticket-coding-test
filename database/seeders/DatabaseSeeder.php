<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\UserFactory;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $usersData                  = (new UserFactory())->definition();

        foreach ($usersData as $uData)
        {
            $user                   = User::create([
                'name'              => $uData['name'],
                'email'             => $uData['email'],
                'phone'             => $uData['phone'],
                'email_verified_at' => $uData['email_verified_at'],
                'password'          => bcrypt($uData['password']),
                'remember_token'    => $uData['remember_token'],
                'type'              => $uData['type'],
                'status_active'     => 1,
                'is_delete'         => 0,
                'created_at'        => now(),
                'updated_at'        => null,
            ]);
            $role                   = Role::firstOrCreate(['name' => $uData['role']]);
            $user->roles()->attach($role->id,['model_type' => User::class]);
        }
    }

}
