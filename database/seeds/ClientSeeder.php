<?php

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            [
                "first_name" => "Client",
                "last_name" => "Client",
                "phone" => "0953812828",
                "email" => "client@client.com",
                "password" => Hash::make('secret'),
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
