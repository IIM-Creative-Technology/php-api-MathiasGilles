<?php

namespace App\DataFixtures;

use App\Entity\Intervenant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class IntervenantFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arrayOfIntervenant = [
            ["firstName" => "Yoann", "lastName" => "Coualan", "yearOfEntrer" => "2019"],
            ["firstName" => "Alexis", "lastName" => "Bougy", "yearOfEntrer" => "2019"],
            ["firstName" => "Alexandre", "lastName" => "Pagnet", "yearOfEntrer" => "2019"],
            ["firstName" => "Pierre", "lastName" => "Grimaud", "yearOfEntrer" => "2019"],
            ["firstName" => "Emma", "lastName" => "Cargo", "yearOfEntrer" => "2019"],
            ["firstName" => "Jeremy", "lastName" => "Serval", "yearOfEntrer" => "2019"],
            ["firstName" => "Kath", "lastName" => "Alcini", "yearOfEntrer" => "2019"],
            ["firstName" => "Virak", "lastName" => "Mey", "yearOfEntrer" => "2019"],
            ["firstName" => "Rudy", "lastName" => "Lemen", "yearOfEntrer" => "2019"],
            ["firstName" => "Larry", "lastName" => "Montes", "yearOfEntrer" => "2019"],
        ];

        foreach ($arrayOfIntervenant as $int) {
            $intervenant = new Intervenant();
            $intervenant->setFirstName($int['firstName'])
                ->setLastName($int['lastName'])
                ->setYearOfEnter($int['yearOfEntrer']);

            $manager->persist($intervenant);
        }

        $manager->flush();
    }
}
