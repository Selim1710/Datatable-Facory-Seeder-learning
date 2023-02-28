<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * image-URL, width and height
     * faker can automatically generate image
     * 
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'image'=>$this->faker->image('public/backend/images',640,480, null, false),
            'description'=>$this->faker->sentence(),
        ];
    }
}
