<?php

namespace App\DataFixtures;

use App\Entity\Job as EntityJob;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Job extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $title = new EntityJob();
        $title->setTitle('Commercial');
        $manager->persist($title);

        $title = new EntityJob();
        $title->setTitle('Developpeur');
        $manager->persist($title);

        $title = new EntityJob();
        $title->setTitle('Graphiste');
        $manager->persist($title);

        $title = new EntityJob();
        $title->setTitle('Designer-Web');
        $manager->persist($title);

        $title = new EntityJob();
        $title->setTitle('Support');
        $manager->persist($title);

        $manager->flush();
    }
}
