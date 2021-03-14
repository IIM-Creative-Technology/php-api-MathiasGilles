<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $arrayOfUser = [
            ["email" => "alexis.bougy@devinci.fr", "password" => "motdepasse", "lastName" => "Bougy", "firstName" => "Alexis"],
            ["email" => "nicolas.raubert@devinci.fr", "password" => "motdepasse", "lastName" => "Raubert", "firstName" => "Nicolas"],
            ["email" => "karine.mousdik@devinci.fr", "password" => "motdepasse", "lastName" => "Mousdik", "firstName" => "Karine"]
        ];

        foreach ($arrayOfUser as $user) {
            $usr = new User();
            $usr->setEmail($user['email'])
                ->setLastName($user['lastName'])
                ->setfirstName($user['firstName'])
                ->setPassword($this->passwordEncoder->encodePassword($usr, $user["password"]))
                ->setRoles(["ROLE_ADMIN"]);
            $manager->persist($usr);
        }

        $manager->flush();
    }
}
