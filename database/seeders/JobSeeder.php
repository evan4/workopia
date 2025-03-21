<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
  use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Job::factory(4)->create();
    }
}
