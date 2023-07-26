<?php

namespace Database\Seeders;

use App\Models\LocationTag;
use App\Models\LocationTagLocation;
use App\Models\Payments\Paysystem;
use App\Models\Route;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::select()->get();

        foreach ($users as $user) {
            $setting = new Setting();
            $setting->user_id = $user->id;
            $setting->key = "confirm_by";
            $setting->value = "telegram";
            $setting->save();

            $setting = new Setting();
            $setting->user_id = $user->id;
            $setting->key = "position";
            $setting->value = "Fullstack";
            $setting->save();

            $setting = new Setting();
            $setting->user_id = $user->id;
            $setting->key = "salary";
            $setting->value = "3000$";
            $setting->save();
        }
    }
}
