<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Policy;
use Illuminate\Database\Seeder;

class PolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = Company::all('id');
        foreach ($companies as $company) {
            $data = array(
                'company_id' => $company->id,
                'title'=>'Beyaz kot politikası',
                'description'=>'ne kadar su kullanılıyor',
            );

            Policy::firstOrCreate($data);

            $data = array(
                'company_id' => $company->id,
                'title'=>'İş gücü',
                'description'=>'Çocuk işçi',
            );

            Policy::firstOrCreate($data);

            $data = array(
                'company_id' => $company->id,
                'title'=>'enerji Verimliliği',
                'description'=>'Yeşil enerji',
            );

            Policy::firstOrCreate($data);

            $data = array(
                'company_id' => $company->id,
                'title'=>'Üretim Verimliliği',
                'description'=>'Üretim aşamaları',
            );

            Policy::firstOrCreate($data);


        }
    }
}
