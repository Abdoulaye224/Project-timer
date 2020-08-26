<?php

namespace App\DataFixtures;

use App\Entity\Project;
use App\Entity\Team;
use App\Entity\Timer;
use App\Entity\User;
use Faker\Factory as Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Migrations\Version\Factory;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Faker::create();

        // on créé 10 users
        for ($i = 0; $i < 6; $i++) {
            $user = new User();
            $user->setFirstName($faker->firstName);
            $user->setLastName($faker->lastName);
            $user->setPassword($faker->password);
            $user->setEmail($faker->email);
            $manager->persist($user);
            $manager->flush();


            $group = new Team();
            $group->setName($faker->colorName);
            $group->setTeamAdmin($user->getId());
            $group->addUser($user);
            $manager->persist($group);
            $manager->flush();



            $project = new Project();
            $project->setName($faker->city);
            $project->setDescription($faker->title);
            $group->addProject($project);
            $project->setProjectAdmin($user->getId());
            $manager->persist($project);
            $manager->flush();

            $entry = new Timer();
            $entry->setDateStart($faker->dateTime);
            $entry->setDateEnd($faker->dateTime);
            $entry->setUser($user->getId());
            $entry->setTeam($group->getId());
            $entry->setProject($project->getId());
            $manager->persist($entry);
            $manager->flush();


        }

        $manager->flush();
        $manager->flush();



    }
}
