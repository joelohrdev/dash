<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    private array $departments = [
        'Sales',
        'Accounting',
        'Service',
        'Parts',
        'Body Shop',
        'Finance',
        'Porter/Driver',
    ];

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement($this->departments),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
