<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DnsNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // first 20 test record

        //create  
        //php artisan make:seeder DnsNameSeeder


        //run
        //php artisan db:seed --class=DnsNameSeeder


        for($i = 0; $i < 20; $i++){
            \DB::table('d_n_s_infos')->insert([
                'domain' => 'domain'.$i.'.com.test',
                'ip' => long2ip((mt_rand()*mt_rand(1,2))+mt_rand(0,1))
            ]);
        }
    }
}
