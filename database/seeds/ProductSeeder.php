<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'categories_id' => 1,
            'countries_id'  => 1,
            'title'         => 'LAYS',
            'description'   => 'Enak jajan an ini',
            'description_en'=> 'This snack is delicious',
            'best_selling'  => 1,
            'image_path1'   => 'PRODUCT'.Carbon::now()->format('Y/m/d').'/',
            'image_path2'   => 'PRODUCT'.Carbon::now()->format('Y/m/d').'/',
            'image_path3'   => 'PRODUCT'.Carbon::now()->format('Y/m/d').'/',
            'image_path4'   => '',
            'image_path5'   => '',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'countries_id'  => 1,
            'title'         => 'FANTA',
            'description'   => 'Enak minuman an ini',
            'description_en'=> 'This drink is delicious',
            'best_selling'  => 1,
            'image_path1'   => 'PRODUCT'.Carbon::now()->format('Y/m/d').'/',
            'image_path2'   => 'PRODUCT'.Carbon::now()->format('Y/m/d').'/',
            'image_path3'   => '',
            'image_path4'   => '',
            'image_path5'   => '',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'countries_id'  => 3,
            'title'         => 'RAMEN',
            'description'   => 'Enak mie ini',
            'description_en'=> 'This noodle is delicious',
            'best_selling'  => 1,
            'image_path1'   => 'PRODUCT'.Carbon::now()->format('Y/m/d').'/',
            'image_path2'   => 'PRODUCT'.Carbon::now()->format('Y/m/d').'/',
            'image_path3'   => 'PRODUCT'.Carbon::now()->format('Y/m/d').'/',
            'image_path4'   => 'PRODUCT'.Carbon::now()->format('Y/m/d').'/',
            'image_path5'   => 'PRODUCT'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
    }
}
