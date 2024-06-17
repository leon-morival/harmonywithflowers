<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Remedy;

class RemediesTableSeeder extends Seeder
{
    public function run()
    {
        Remedy::create([
            'name' => 'Rescue Remedy',
            'description' => 'A mix of five different Bach Flower Remedies.',
            'price' => 12.99
        ]);

        Remedy::create([
            'name' => 'Mimulus',
            'description' => 'Helps you deal with known fears and anxieties.',
            'price' => 9.99
        ]);

        Remedy::create([
            'name' => 'Clematis',
            'description' => 'Helps you live more actively in the present rather than in the future or your own dream world.',
            'price' => 8.99
        ]);
    }
}
