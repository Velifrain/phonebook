<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Contact;

use App\Models\PhoneNumber;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory(15)->create();
        PhoneNumber::factory(15)->create();

        // \App\Models\User::factory(10)->create();
    }
}
