<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    private array $departments = [
        'Sales',
        'Accounting',
        'Service',
        'Parts',
        'Body Shop',
        'Finance',
        'Porter/Driver',
    ];

    public function run(): void
    {
        foreach ($this->departments as $department) {
            Department::create(['name' => $department]);
        }
    }
}
