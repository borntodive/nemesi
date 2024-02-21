<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApiKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ApiKey::factory()->create([
            'name' => 'Conftech',
            'key' => '6d264254-df6c-4f13-9d6b-0872af944b98',
        ]);
    }
}
