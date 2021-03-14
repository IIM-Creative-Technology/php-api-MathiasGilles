<?php

namespace App\DataFixtures;

use App\Entity\Grade;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class GradeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $students = $manager->getRepository("App:Student")->findAll();

        foreach ($students as $student) {
            $test = $manager->getRepository('App:Subject')->getSubjectByPromo($student->getPromotion()->getId());

            foreach ($test as $subject) {
                $grade = new Grade();
                $grade->setStudent($student)
                    ->setResult(rand(0, 20))
                    ->setSubject($subject);

                $manager->persist($grade);

            }

        }
        $manager->flush();

    }

    public function getDependencies()
    {
        return [
            IntervenantFixtures::class,
            StudentFixtures::class,
            SubjectFixtures::class,
        ];
    }
}
