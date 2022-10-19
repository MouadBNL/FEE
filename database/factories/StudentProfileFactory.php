<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentProfile>
 */
class StudentProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $education = [
            '1er Année Cycle Préparatoire',
            '2eme Année Cycle Préparatoire',

            '1er Année Cycle Ingénieur Genie Informatique',
            '1er Année Cycle Ingénieur Genie Industriel',
            '1er Année Cycle Ingénieur Genie Electrique',
            '1er Année Cycle Ingénieur Genie Mecatronique',
            '1er Année Cycle Ingénieur Genie Reseau et Systeme de Telecomunication',

            '2eme Année Cycle Ingénieur Genie Informatique',
            '2eme Année Cycle Ingénieur Genie Industriel',
            '2eme Année Cycle Ingénieur Genie Electrique',
            '2eme Année Cycle Ingénieur Genie Mecatronique',
            '2eme Année Cycle Ingénieur Genie Reseau et Systeme de Telecomunication',

            '3eme Année Cycle Ingénieur Genie Informatique',
            '3eme Année Cycle Ingénieur Genie Industriel',
            '3eme Année Cycle Ingénieur Genie Electrique',
            '3eme Année Cycle Ingénieur Genie Mecatronique',
            '3eme Année Cycle Ingénieur Genie Reseau et Systeme de Telecomunication',
        ];
        return [
            'education' => $education[array_rand($education)],
            'summary' => fake()->paragraphs(),
            'skills' => 'Larave, Php, HTML5, CSS3, TailwindCSS, GitHub'
        ];
    }
}
