<?php

namespace App\DataFixtures;

use App\Entity\Subject;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SubjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arrayOfSubjects = [
            ["name" => "PHP : Débutant", "start" => new \DateTime('06-09-2021'), "end" => new \DateTime('10-09-2021')],
            ["name" => "PHP : Intermédiaire", "start" => new \DateTime('13-09-2021'), "end" => new \DateTime('17-09-2021')],
            ["name" => "PHP : Expert", "start" => new \DateTime('20-09-2021'), "end" => new \DateTime('24-09-2021')],
            ["name" => "Photoshop : Débutant", "start" => new \DateTime('06-09-2021'), "end" => new \DateTime('10-09-2021')],
            ["name" => "Photoshop : Intermédiaire", "start" => new \DateTime('13-09-2021'), "end" => new \DateTime('17-09-2021')],
            ["name" => "Photoshop : Expert", "start" => new \DateTime('20-09-2021'), "end" => new \DateTime('24-09-2021')],
            ["name" => "3DS Max : Débutant", "start" => new \DateTime('06-09-2021'), "end" => new \DateTime('10-09-2021')],
            ["name" => "3DS Max : Intermédiaire", "start" => new \DateTime('13-09-2021'), "end" => new \DateTime('17-09-2021')],
            ["name" => "3DS Max : Expert", "start" => new \DateTime('20-09-2021'), "end" => new \DateTime('24-09-2021')],
            ["name" => "Javascript : Débutant", "start" => new \DateTime('27-09-2021'), "end" => new \DateTime('01-10-2021')],
            ["name" => "Javascript : Intermédiaire", "start" => new \DateTime('04-10-2021'), "end" => new \DateTime('08-10-2021')],
            ["name" => "Javascript : Expert", "start" => new \DateTime('11-10-2021'), "end" => new \DateTime('15-10-2021')],
            ["name" => "Illustrator : Débutant", "start" => new \DateTime('27-09-2021'), "end" => new \DateTime('01-10-2021')],
            ["name" => "Illustrator : Intermédiaire", "start" => new \DateTime('04-10-2021'), "end" => new \DateTime('08-10-2021')],
            ["name" => "Illustrator : Expert", "start" => new \DateTime('11-10-2021'), "end" => new \DateTime('15-10-2021')],
            ["name" => "Sketch Up : Débutant", "start" => new \DateTime('27-09-2021'), "end" => new \DateTime('01-10-2021')],
            ["name" => "Sketch Up : Intermédiaire", "start" => new \DateTime('04-10-2021'), "end" => new \DateTime('08-10-2021')],
            ["name" => "Sketch Up : Expert", "start" => new \DateTime('11-10-2021'), "end" => new \DateTime('15-10-2021')],
            ["name" => "Swift iOS : Débutant", "start" => new \DateTime('18-10-2021'), "end" => new \DateTime('22-10-2021')],
            ["name" => "Swift iOS : Intermédiaire", "start" => new \DateTime('25-10-2021'), "end" => new \DateTime('29-10-2021')],
            ["name" => "Swift iOS : Expert", "start" => new \DateTime('02-11-2021'), "end" => new \DateTime('05-11-2021')],
            ["name" => "InDesign : Débutant", "start" => new \DateTime('18-10-2021'), "end" => new \DateTime('22-10-2021')],
            ["name" => "InDesign : Intermédiaire", "start" => new \DateTime('25-10-2021'), "end" => new \DateTime('29-10-2021')],
            ["name" => "InDesign : Expert", "start" => new \DateTime('02-11-2021'), "end" => new \DateTime('05-11-2021')],
            ["name" => "3D Slash : Débutant", "start" => new \DateTime('18-10-2021'), "end" => new \DateTime('22-10-2021')],
            ["name" => "3D Slash : Intermédiaire", "start" => new \DateTime('25-10-2021'), "end" => new \DateTime('29-10-2021')],
            ["name" => "3D Slash : Expert", "start" => new \DateTime('02-11-2021'), "end" => new \DateTime('05-11-2021')],
            ["name" => "Découverte Web", "start" => new \DateTime('06-09-2021'), "end" => new \DateTime('10-09-2021')],
            ["name" => "Découverte 3D", "start" => new \DateTime('13-09-2021'), "end" => new \DateTime('17-09-2021')],
            ["name" => "Découverte Créa & Design", "start" => new \DateTime('20-09-2021'), "end" => new \DateTime('24-09-2021')],
        ];

        $promos = $manager->getRepository('App:Classroom')->findAll();
        $intervenants = $manager->getRepository('App:Intervenant')->findAll();

        foreach ($arrayOfSubjects as $entry) {
            $subjet = new Subject();
            $subjet->setName($entry['name'])
                ->setDateStart($entry['start'])
                ->setDateEnd($entry['end'])
                ->setIntervenant($intervenants[array_rand($intervenants)])
                ->setClassroom($promos[array_rand($promos)]);

            $manager->persist($subjet);
        }

        $manager->flush();
    }
}
