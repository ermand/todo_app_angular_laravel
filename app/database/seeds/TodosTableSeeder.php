<?php

use Faker\Factory as Faker;

class TodosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Todo::create([
                'title' => $faker->sentence(),
                'completed' => $faker->boolean()
			]);
		}
	}

}