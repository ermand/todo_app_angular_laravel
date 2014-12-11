<?php

use Faker\Factory as Faker;

class TodosTableSeeder extends Seeder {

	public function run()
	{
        Todo::truncate();

		$faker = Faker::create();

        $todos = ['Go to the store.', 'Exercise more.', 'Read a new book.', 'Lear more Angular JS', 'Read more about DDD.'];

		foreach(range(1, 5) as $index)
		{
			Todo::create([
                'title' => $faker->unique()->randomElement($todos),
                'completed' => $faker->boolean()
			]);
		}
	}

}