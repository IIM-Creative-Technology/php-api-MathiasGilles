<?php

namespace App\DataFixtures;

use App\Entity\Classroom;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClassroomFixtures extends Fixture
{

    public const CLASSROOM_REFERENCE = 'classroom';

    public function load(ObjectManager $manager)
    {
        $arrayOfClassroom = [
            ["name" => "A2", "yearOfExit" => "2024"],
            ["name" => "A3", "yearOfExit" => "2023"],
            ["name" => "A4", "yearOfExit" => "2022"],
            ["name" => "A5", "yearOfExit" => "2021"]
        ];

        foreach ($arrayOfClassroom as $classroom) {
            $promo = new Classroom();
            $promo->setName($classroom['name'])
                ->setYearOfExit($classroom['yearOfExit']);

            $manager->persist($promo);
        }

        $manager->flush();

        $this->addReference(self::CLASSROOM_REFERENCE, $promo);

    }
}
