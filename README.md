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
* 'remember_token' => Str::random(10),

