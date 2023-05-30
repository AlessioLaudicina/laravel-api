<?php

namespace Database\Seeders;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Bootstrap', 'API', 'MySQL', 'Laravel', 'VueJs'];

        foreach ($data as $technology){
            $new_technology = new Technology();
            $new_technology->name = $technology;
            $new_technology->slug = Str::slug($technology);
            $new_technology->save();
        }
    }
}
