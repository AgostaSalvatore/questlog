<?php

namespace Database\Seeders;

use App\Models\Quest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quest::create([
            'title'       => 'Test Quest',
            'description' => 'This is a test quest',
            'status'      => 'pending',
            'priority'    => 'medium',
        ]);
    }
}
