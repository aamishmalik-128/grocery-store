<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin= new Admin();
        $admin->name= 'Admin';
        $admin->email='aamish420malik@gmail.com';
        $admin->password= FacadesHash::make('password');
        $admin->phone='03335214543';
        $admin->token='';
        $admin->save();

    }
}
