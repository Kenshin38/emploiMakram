<?php

namespace App\DataFixtures;

use App\Entity\Employee as EntityEmployee;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class EmployeeFixtures extends Fixture
{
    public function load(ObjectManager $manager){
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) {
            $employee = new EntityEmployee();
            $employee->setFirstname($faker->firstname);
            $employee->setLastname($faker->lastname);
            $employee->setEmployementDate($faker->dateTime());

            $manager->persist($employee);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
        Job::class,
        );
    }
}
