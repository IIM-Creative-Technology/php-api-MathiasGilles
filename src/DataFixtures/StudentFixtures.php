<?php

namespace App\DataFixtures;

use App\Entity\Student;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StudentFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $promos = $manager->getRepository('App:Classroom')->findAll();

        $arrayOfA2 = [
            ["lastName" => "Gilles", "firstName" => "Mathias", "age" => "21", "yearOfEnter" => "2019", "promo" => $promos[0]],
            ["lastName" => "Lamirand", "firstName" => "Cyril", "age" => "21", "yearOfEnter" => "2019", "promo" => $promos[0]],
            ["lastName" => "Dayaux", "firstName" => "Jules", "age" => "21", "yearOfEnter" => "2019", "promo" => $promos[0]],
            ["lastName" => "Gilles", "firstName" => "Diego", "age" => "21", "yearOfEnter" => "2019", "promo" => $promos[0]],
            ["lastName" => "Viardot", "firstName" => "Alexis", "age" => "21", "yearOfEnter" => "2019", "promo" => $promos[0]],
            ["lastName" => "Stefani", "firstName" => "Tanguy", "age" => "21", "yearOfEnter" => "2019", "promo" => $promos[0]],
            ["lastName" => "Gourdikian", "firstName" => "Djivan", "age" => "21", "yearOfEnter" => "2019", "promo" => $promos[0]],
            ["lastName" => "Cauchois", "firstName" => "Kevin", "age" => "21", "yearOfEnter" => "2019", "promo" => $promos[0]],
            ["lastName" => "Wiart", "firstName" => "Clare", "age" => "21", "yearOfEnter" => "2019", "promo" => $promos[0]],
            ["lastName" => "Fontaine", "firstName" => "Alexandre", "age" => "21", "yearOfEnter" => "2019", "promo" => $promos[0]],
        ];

        $arrayOfA3 = [
            ["lastName" => "Sperling", "firstName" => "Steven", "age" => "22", "yearOfEnter" => "2018", "promo" => $promos[1]],
            ["lastName" => "McMillian", "firstName" => "Arlene", "age" => "22", "yearOfEnter" => "2018", "promo" => $promos[1]],
            ["lastName" => "Holmes", "firstName" => "Craig", "age" => "22", "yearOfEnter" => "2018", "promo" => $promos[1]],
            ["lastName" => "Rouse", "firstName" => "Dan", "age" => "22", "yearOfEnter" => "2018", "promo" => $promos[1]],
            ["lastName" => "Sokolowski", "firstName" => "Jason", "age" => "22", "yearOfEnter" => "2018", "promo" => $promos[1]],
            ["lastName" => "Hines", "firstName" => "Jeremy", "age" => "22", "yearOfEnter" => "2018", "promo" => $promos[1]],
            ["lastName" => "Jones", "firstName" => "Nicholas", "age" => "22", "yearOfEnter" => "2018", "promo" => $promos[1]],
            ["lastName" => "Smith", "firstName" => "John", "age" => "22", "yearOfEnter" => "2018", "promo" => $promos[1]],
            ["lastName" => "Dayton", "firstName" => "Fred", "age" => "22", "yearOfEnter" => "2018", "promo" => $promos[1]],
            ["lastName" => "Murrin", "firstName" => "Bryan", "age" => "22", "yearOfEnter" => "2018", "promo" => $promos[1]],
        ];

        $arrayOfA4 = [
            ["lastName" => "Luke", "firstName" => "Mohler", "age" => "23", "yearOfEnter" => "2017", "promo" => $promos[2]],
            ["lastName" => "Michelle", "firstName" => "Rolland", "age" => "23", "yearOfEnter" => "2017", "promo" => $promos[2]],
            ["lastName" => "Murakami", "firstName" => "Sharon", "age" => "23", "yearOfEnter" => "2017", "promo" => $promos[2]],
            ["lastName" => "Harold", "firstName" => "Barringer", "age" => "23", "yearOfEnter" => "2017", "promo" => $promos[2]],
            ["lastName" => "Travers", "firstName" => "Blanche", "age" => "23", "yearOfEnter" => "2017", "promo" => $promos[2]],
            ["lastName" => "Smoke", "firstName" => "Pop", "age" => "23", "yearOfEnter" => "2017", "promo" => $promos[2]],
            ["lastName" => "Feld", "firstName" => "Julien", "age" => "23", "yearOfEnter" => "2017", "promo" => $promos[2]],
            ["lastName" => "Bouahbda", "firstName" => "Adams", "age" => "23", "yearOfEnter" => "2017", "promo" => $promos[2]],
            ["lastName" => "Gines", "firstName" => "Alice", "age" => "23", "yearOfEnter" => "2017", "promo" => $promos[2]],
            ["lastName" => "Dalton", "firstName" => "Dylan", "age" => "23", "yearOfEnter" => "2017", "promo" => $promos[2]],
        ];

        $arrayOfA5 = [
            ["lastName" => "Scott", "firstName" => "Travis", "age" => "24", "yearOfEnter" => "2016", "promo" => $promos[3]],
            ["lastName" => "Lebg", "firstName" => "Drake", "age" => "24", "yearOfEnter" => "2016", "promo" => $promos[3]],
            ["lastName" => "Pump", "firstName" => "Lil", "age" => "24", "yearOfEnter" => "2016", "promo" => $promos[3]],
            ["lastName" => "Brisebart", "firstName" => "Claire", "age" => "24", "yearOfEnter" => "2016", "promo" => $promos[3]],
            ["lastName" => "Dufour", "firstName" => "Simon", "age" => "24", "yearOfEnter" => "2016", "promo" => $promos[3]],
            ["lastName" => "Dannais", "firstName" => "Valentin", "age" => "24", "yearOfEnter" => "2016", "promo" => $promos[3]],
            ["lastName" => "Pagnol", "firstName" => "Marcel", "age" => "24", "yearOfEnter" => "2016", "promo" => $promos[3]],
            ["lastName" => "Bonaparte", "firstName" => "Napoleon", "age" => "24", "yearOfEnter" => "2016", "promo" => $promos[3]],
            ["lastName" => "De La Vega", "firstName" => "Diego", "age" => "24", "yearOfEnter" => "2016", "promo" => $promos[3]],
            ["lastName" => "Hardy", "firstName" => "Jeff", "age" => "24", "yearOfEnter" => "2016", "promo" => $promos[3]],
        ];

        function boucle($array,$manager){
            foreach ($array as $entry) {
                $student = new Student();
                $student->setLastName($entry['lastName'])
                    ->setFirstName($entry['firstName'])
                    ->setAge($entry['age'])
                    ->setYearOfEnter($entry['yearOfEnter'])
                    ->setPromotion($entry['promo']);

                $manager->persist($student);
            }
        }

        boucle($arrayOfA2,$manager);
        boucle($arrayOfA3,$manager);
        boucle($arrayOfA4,$manager);
        boucle($arrayOfA5,$manager);

        $manager->flush();
    }
}
