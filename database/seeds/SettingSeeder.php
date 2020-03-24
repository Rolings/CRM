<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                "key" => "Client",
                "value" => "Client",
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }

    }
}
