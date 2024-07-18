<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\config\globals as Config;

// users
use App\Models\User as tblUsers;
use App\Models\products as tblProducts;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return $this->createProduct();
        // $Config = new Config;

        // $Create = new tblProducts;
        // $Create->code = $Config->uniqCode(['label'=>'pd']);
        // $Create->name = "Product_001";
        // $Create->quantity = 100;
        // $Create->price = 9000;
        // $Create->images = "/images/product/product_01.jpg";
        // $Create->save();
    }


    // create users
    public function createUsers(){
        //
        $user = new tblUsers;
        $user->level = 2;
        $user->name = "Users";
        $user->email = "u@g.com";
        $user->password = Hash::make('123456');
        $user->save();


        // tblUsers::create([
        //     'level' =>  2,
        //     'name' => 'John doe',
        //     'email' => 'john@gmail.com',
        //     'password' => Hash::make('john@123')
        // ]);,
    }

    // create product
    public function createProduct(){
        $Config = new Config;

        for($i=1;$i<5;$i++){

            $Create = new tblProducts;
            $Create->code = $Config->uniqCode(['label'=>'pd']);
            $Create->name = "Product_00" . $i;
            $Create->quantity = 100;
            $Create->price = 9000;
            $Create->images = "/images/product/product_0".$i.".jpg";
            $Create->save();
        }

    }
}
