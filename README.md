# Feature
* add a datatable
* make a seeder and seeding data

  => Command:
  * php artisan make:factory ModelnameFactory

NameSpace:

use Illuminate\Support\Str;

* 'name' => $this->faker->name()
* 'email' => $this->faker->unique()->safeEmail(),
* 'mobile_number' => $this->faker->unique()->phoneNumber(),
* 'image'=>$this->faker->image('public/backend/images',640,480, null, false),
* 'description'=>$this->faker->sentence(),
* 'date'=>$this->faker->date('Y-m-d'),
* 'time'=>$this->faker->time('H:i:s'),
* 'user_id' => rand(1,10),
  

