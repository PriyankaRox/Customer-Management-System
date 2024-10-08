<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->command->info('Users table seeded!');

        $this->call(ClientsTableSeeder::class);
        $this->command->info('Clients table seeded!');

        $this->call(CustomersTableSeeder::class);
        $this->command->info('Customer table seeded!');

        $this->call(LocationsTableSeeder::class);
        $this->command->info('Location table seeded!');
    }
}
