<?php

namespace App\Commands;

class AppCommand extends Command
{
    /**
     *
     */
    public function test()
    {
        dump('It works! You invoked your first command.');
    }
}

public function migrate() 
{
        $this->app->db()->createTable('products', [
    'name' => 'varchar(255)',
    'description' => 'text',
    'price' => 'decimal(10,2)',
    'available' => 'int',
    'weight' => 'decimal(10,2)',
    'perishable' => 'tinyint(1)'
]);

$this->app->db()->createTable('reviews', [
    'name' => 'varchar(255)',
    'content' => 'text',
    'product_id' => 'int',
]);

dump('Migration complete; check the database for your new tables.');

}

public function seed()
{
        $this->seedProducts();
        $this->seedReviews();

        dump('Seeding complete; check the database for your new data.')
}


public function seedProducts()
{
    # Set up product details
    # Note that `id` is omitted as that's created automatically using the db()->insert method
    $product = [
        'name' => 'Driscoll’s Strawberries',
        'description' => 'Driscoll’s Strawberries are consistently the best, sweetest, juiciest strawberries available. This size is the best selling, as it is both convenient for completing a cherished family recipes and for preparing a quick snack straight from the fridge.',
        'price' => 4.99,
        'available' => 0,
        'weight' => 1,
        'perishable' => 1
    ];

    # Insert product
    $this->app->db()->insert('products', $product);

    # Display all products to confirm results
    dump($this->app->db()->all('products'));
}

public function seedReviews()
{
    # Instantiate a new instance of the Faker\Factory class
$faker = \Faker\Factory::create();

# Use a loop to create 10 reviews
for ($i = 0; $i < 10; $i++) {

    # Set up a review
    $review = [
        'name' => $faker->name,
        'content' => $faker->sentences(3, true),
        'product_id' => ($i % 2 == 0) ? 1 : 2, # Alternate between products 1 and 2
    ];

    # Insert the review
    $this->app->db()->insert('reviews', $review);
}

}