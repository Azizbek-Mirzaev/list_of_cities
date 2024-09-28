<?php

namespace App\Console\Commands;

use App\Models\City;
use Illuminate\Console\Command;
use GuzzleHttp\Client;

class ParseCities extends Command
{

    protected $signature = 'parse:cities';
    protected $description = 'Parse cities from hh.ru API';

    public function handle()
    {
        $client = new Client();
        $response = $client->get('https://api.hh.ru/areas');
        $areas = json_decode($response->getBody()->getContents(), true);

        // Обработка только российских городов
        foreach ($areas[0]['areas'] as $region) {
            foreach ($region['areas'] as $city) {
                City::updateOrCreate(
                    ['name' => $city['name']],
                    ['name' => $city['name']]
                );
            }
        }

        $this->info('Cities parsed successfully!');
    }
}
