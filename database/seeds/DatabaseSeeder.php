<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public static $cities=['Shanghai','Beijing','Guangzhou','Hangzhou','Xiamen','Shenzhen'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (DatabaseSeeder::$cities as $city){
            App\City::create([
                'name'=>$city
            ]);
        }

        $length=40000;
        $max=365*4*24*60*60;
        $number=[];
        $num=chr(rand(65,90)).chr(rand(65,90));
        for ($i=0;$i<$length;$i++){
            $no=$num.rand(1000,9999);
            $time=time()+rand(0,$max);
            if(in_array($no,$number)){
                $flight=\App\Flight::where('no',$no)->orderBy('time')->get()->last();
//                print_r($flight->time);
                //dd(strtotime($flight->time)+24*60*60);
                $time=strtotime($flight['time'])+24*60*60;
                App\Flight::create([
                    'plane_id'=>$flight['plane_id'],
                    'city_from'=>$flight['city_from'],
                    'city_to'=>$flight['city_to'],
                    'no'=>$no,
                    'time'=>date('Y-m-d H:i:s',$time)
                ]);
                continue;
            }

            $plane=rand(1,App\Plane::all()->count());
            $city1=rand(1,App\City::all()->count());
            $city2=rand(1,App\City::all()->count());
            if($city1==$city2){
                $i--;
                continue;
            }
            $number[]=$no;
            App\Flight::create([
                'plane_id'=>$plane,
                'city_from'=>$city1,
                'city_to'=>$city2,
                'no'=>$no,
                'time'=>date('Y-m-d H:i:s',$time)
            ]);
        }
    }
}
