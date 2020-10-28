<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Categorie;
use App\Models\DriverLicense;
class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->name,
            'lastname' => $this->faker->name,
            'birthday' => $this->faker->date,
            'photo' => 'driver'.rand(1,3).'.jpg',
            'contact'=>$this->faker->randomNumber($nbDigits = 8, $strict = false),
            'type_piece' => $this->faker->randomElement($array = array('CNI', 'Passport', 'Carte de séjour', 'Attestation')),
            'number_piece' => Str::random(8).rand(1,100).Str::random(2),
            'categorie_id' => Categorie::all()->random()->id,
            'driver_license_id' => DriverLicense::all()->random()->id,
            'number_of_session' => rand(10,30),
            'city'=>$this->faker->randomElement($array = array('Abobo', 'Adjamé', 'Attécoubé', 'Cocody', 'Koumassi', 'Marcory', 'Port-Bouët', 'Treichville', 'Yopougon', 'Le Plateau')),
            'money' => rand(60000,100000),
            'advanced' => rand(30000,50000),
            'rest' => rand(30000,45000),
            'unique_id' => uniqid(),
            'token' => Str::random(60),
            'password' =>$this->faker->sha1

        ];
    }
}
