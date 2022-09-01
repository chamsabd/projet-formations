<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' =>$this->faker->word,
            'date_debut'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),  
            'description' =>$this->faker->sentence, 
            'date_fin' =>$this->faker->date($format = 'Y-m-d', $max = 'now'),   
            'responsable_id' =>User::get('id')->random(),
            'formateur_id' =>User::get('id')->random(),
            'formateur_externe_id' =>User::get('id')->random(),//table formateurexterne 

            'etat' =>$this->faker->boolean,   
             'nbr_place' =>$this->faker->randomNumber(),
             'prix' =>$this->faker->randomFloat($nbMaxDecimals=2, $min = 0, $max = 99999),
            'created_at'=>now()  
        ];
    }
}
