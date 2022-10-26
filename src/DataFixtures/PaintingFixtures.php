<?php

namespace App\DataFixtures;

use App\Entity\Painting;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PaintingFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        foreach($this->categories as $category => $description) {
            $cat = new Category();
            $cat->setName($category);
            $cat->setDescription($description);
            $manager->persist($cat);
        }

        $manager->flush();
    }

   private array $title = ['']
}