<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
  protected $model = Job::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'user_id' => User::inRandomOrder()->first(),
          'title' => fake()->jobTitle(),
          'description' => fake()->paragraphs(2, true),
          'salary' => fake()->numberBetween(1000, 10000),
          'tags' => implode(', ', fake()->words(3)),
          'job_type' => fake()->randomElement(['Full-Time', 'Part-Time', 'COntract']),
          'remote' => fake()->boolean(),
          'requirements' => fake()->sentences(3, true),
          'benefits' => fake()->sentence(),
          'address' => fake()->streetAddress(),
          'city' => fake()->city(),
          'state' => fake()->state(),
          'zipcode' => fake()->postcode(),
          'contact_email' => fake()->safeEmail(),
          'contact_phone' => fake()->phoneNumber(),
          'company_name' => fake()->company(),
          'company_description' => fake()->sentence(),
          'company_logo' =>fake()->imageUrl(100, 100, 'business', true, 'logo'),
          'company_website' => fake()->url(),
        ];
    }
}
