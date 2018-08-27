<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id' => '1',
            'image' => '/uploads/products/men1.jpg',
            'name' => 'Cleeve T Shirt',
            'short_description' => 'mdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
            'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_co
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
            'price' => '12000',
            'color' => 'Blue,black,yellow,red',
            'size' => 'Medium',
            'quantity'=>23
        ]);
        DB::table('products')->insert([
            'category_id' => '1',
            'image' => '/uploads/products/men2.jpg',
            'name' => 'Cleeve T Shirt',
            'short_description' => 'mdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
            'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_co
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
            'price' => '10000',
            'color' => 'Blue,black,yellow',
            'size' => 'Medium',
            'quantity'=>23
        ]);
        DB::table('products')->insert([
            'category_id' => '1',
            'image' => '/uploads/products/men3.jpg',
            'name' => 'Cleeve T Shirt',
            'short_description' => 'mdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
            'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_co
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
            'price' => '15000',
            'color' => 'Red,black,blue',
            'size' => 'Medium',
            'quantity'=>9
        ]);
        DB::table('products')->insert([
            'category_id' => '1',
            'image' => '/uploads/products/men4.jpg',
            'name' => 'Cleeve T Shirt',
            'short_description' => 'mdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
            'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_co
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
            'price' => '11000',
            'color' => 'Blue,black,yellow,red',
            'size' => 'Medium',
            'quantity'=>45
        ]);
        ///////////////End of Men's Product//////////

        DB::table('products')->insert([
            'category_id' => '2',
            'image' => '/uploads/products/wom1.jpg',
            'name' => 'Sleeveless Loose Plain Dresses',
            'short_description' => 'mdnwndwdonqwdkqjn IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
            'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
            'price' => '15000',
            'color' => 'Red,black,yellow,red',
            'size' => 'Short',
            'quantity'=>45
        ]);
        DB::table('products')->insert([
            'category_id' => '2',
            'image' => '/uploads/products/wom2.jpg',
            'name' => 'Sleeveless Loose Plain Dresses',
            'short_description' => 'mdnwndwdonqwdkqjn IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
            'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
            'price' => '14000',
            'color' => 'Red,black,yellow,red',
            'size' => 'Short',
            'quantity'=>7
        ]);
        DB::table('products')->insert([
            'category_id' => '2',
            'image' => '/uploads/products/wom3.jpg',
            'name' => 'Sleeveless Loose Plain Dresses',
            'short_description' => 'mdnwndwdonqwdkqjn IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
            'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
            'price' => '12000',
            'color' => 'Red,black,white,red',
            'size' => 'Short',
            'quantity'=>71

        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'image' => '/uploads/products/wom4.jpg',
            'name' => 'Sleeveless Loose Plain Dresses',
            'short_description' => 'mdnwndwdonqwdkqjn IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
            'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
            'price' => '10000',
            'color' => 'Red,black,yellow,red',
            'size' => 'Short',
            'quantity'=>2
        ]);

        ///////////////End of Women's Product//////////
        /// TODO IMPROVE THE PRODUCTS MODULARITY

        DB::table('products')->insert([
            'category_id' => '3',
            'image' => '/uploads/products/3.jpg',
            'name' => 'Plain dresse',
            'short_description' => 'mdnwndwdonqwdkqjn IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
            'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
            'price' => '10000',
            'color' => 'Pink,yellow',
            'size' => 'Short',
            'quantity'=>7
        ]);
    }
}
