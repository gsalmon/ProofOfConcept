<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Eloquent::unguard();

        $this->call('OptionOneSeeder');
        $this->command->info('All data seeded!');
	}

}

class OptionOneSeeder extends  Seeder
{
    public function run()
    {
        // clear our database ------------------------------------------
        DB::table('users')->delete();
        DB::table('items')->delete();
        DB::table('carts')->delete();

        //create a dummy user
        $user_one = User::create(array('email' => 'foo@bar.com'));
        $this->command->info('User table seeded!');

        //Create some dummy items
        $item_one = Item::create(array(
            'name' => 'Test Item 1',
            'description' => 'This is a test item.',
            'price' => '2000'));
        $item_two = Item::create(array(
            'name' => 'Test Item 2',
            'description' => 'This is another test item.',
            'price' => '1000'));
        $this->command->info('Item table seeded!');

        //Create add some dummy items to users cart
        Cart::create(array('user_id' => $user_one->id, 'item_id' => $item_one->id));
        Cart::create(array('user_id' => $user_one->id, 'item_id' => $item_two->id));
        $this->command->info('Cart table seeded!');
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }

}

class ItemTableSeeder extends Seeder {

    public function run()
    {
        DB::table('items')->delete();

        //Create some dummy items
        Item::create(array('name' => 'Test Item 1', 'description' => 'This is a test item.', 'price' => '2000'));
        Item::create(array('name' => 'Test Item 2', 'description' => 'This is another test item.', 'price' => '1000'));
    }

}

class CartTableSeeder extends Seeder {

    public function run()
    {
        DB::table('carts')->delete();

        //Create add some dummy items to user 1s cart
        Cart::create(array('userid' => '1', 'itemid' => '1'));
        Cart::create(array('userid' => '1', 'itemid' => '2'));
    }

}


