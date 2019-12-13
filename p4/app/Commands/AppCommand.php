<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('history', [
            'title' => 'varchar(255)',
            'history' => 'text',
    ]);
        dump('Migration complete.');

    }

    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
$faker = \Faker\Factory::create();

# Use a loop to create 10 history
for ($i = 0; $i < 10; $i++) {

    # Set up a history
    $history = [
        'title' => $faker->words(3, true)  ,
        'history' => $faker->sentences(3, true),
    ];

    # Insert the history
    $this->app->db()->insert('history', $history);

    }
    dump('Seeding complete.');
}

    public function fresh()
    {

        $this->migrate();
        $this->seed();
    }
}
