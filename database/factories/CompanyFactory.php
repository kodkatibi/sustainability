<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->company;
        return [
            'user_id' => User::inRandomOrder()->first('id')->id,
            'name' => $name,
            'description' => $this->faker->text,
            'slug' => \Str::slug($name.'-'.rand(1,100)),
            'sector' => $this->faker->firstName,
            'website' => $this->faker->url

        ];
    }
}
