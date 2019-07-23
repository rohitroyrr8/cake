<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Offer;

class OfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Offer::truncate();

        foreach(range(1, 20) as $i){
        	Offer::create([
        		'name' => $faker->firstname,
        		'vertical_id' => mt_rand(1, 10),
        		'advertiser_id' => mt_rand(1, 10),
        		'offer_currency' => 'INR',
        		'price_format' => 'CPA',
        		'payment_model' => 'First Touch',
        		'landing_page_id' => mt_rand(1, 6),
        		'recieved' => mt_rand(10, 150),
        		'payout' => mt_rand(2, 76),
        		'status' => 'Active'
        	]);
        }
    }
}
