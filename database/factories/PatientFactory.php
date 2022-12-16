<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PatientForm>
 */
class PatientFactory extends Factory
{

    protected $model = PatientForm::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $faker->randomElement(['Male', 'Female']);


        return [
            'name' => $this->faker->name(),
            'age' => Str::random(2),
            'gender' => $gender,
            'birthdate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'height' => ,
            'weight' => ,
            'address' => $this->faker->address(),
            'contact_number' => ,
            'email' => ,
            'doctor_consulting' => ,
            'day' => ,
            'available_from' => ,
            'available_to' => ,
            'heart_rate' => ,
            'blood_pressure' => ,
            'temperature' => ,
            'oxygen_saturation' => ,
            'other_reason_for_consultation' => ,
            'main_reason_for_consultation' => ,
            'allergies' => ,
            'maintenance_medications' => ,
            'current_medications' => ,
            'is_done_consulting' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
