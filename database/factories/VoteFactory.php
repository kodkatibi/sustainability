<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Policy;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    protected $model = Vote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first('id')->id,
            'company_id' => Company::inRandomOrder()->first('id')->id,
            'policy_id' => Policy::inRandomOrder()->first('id')->id,
            'rate' => rand(0, 10)
        ];
    }
}
