<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Email;

class EmailsSeeder extends Seeder
{
    public function run(): void
    {
        $emails = [
            'john.doe@example.com',
            'jane.smith@example.com',
            'mike.jones@example.com',
        ];

        foreach ($emails as $email) {
            Email::create(['email' => $email]);
        }
    }
}
