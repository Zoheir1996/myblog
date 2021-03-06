<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $categories=['Sport', 'IT', 'Sciences', 'Nutrition','Automobile'];
        for ($i = 0; $i < count($categories); $i++){

        Category::create([
            'label' => $categories[$i],
            'created_at'=> Carbon::now()
        ]);
    }
    }
}
