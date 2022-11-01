<?php

namespace App\DataFixtures;

use App\Entity\Team;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Cocur\Slugify\Slugify;

class TeamFixtures extends Fixture
{
    private array $team = [
        ['Laurence Des Cars', 'Présidente-Directrice', 1],
        ['Kim Pham', 'Administrateur général', 2],
        ['Francis Steinbock', 'Administrateur général adjoint', 2],
        ['Matthias Grolier', 'Directeur de cabinet', 2],
        ['Olivier Gabet', 'Département des Objets d\'art', 3],
        ['Claire Bessède', 'Musée Eugène-Delacroix', 3],
        ['Sébastien Allard', 'Département des peintures', 3],
        ['Chris Dercon', 'Président de l\'art national', 3]
    ];

    public function load(ObjectManager $manager):void
    {
        $slugify = new Slugify();
        $x = 0;
        while($x <= count($this->team) - 1){
            $member = new Team();
            $member->setFullname($this->team[$x][0]);
            $member->setJob($this->team[$x][1]);
            $member->setRole($this->team[$x][2]);
            $member->setImage($slugify->slugify($this->team[$x][0]) . '.jpg');
            $manager->persist($member);
            $x++;
        }
        $manager->flush();

    }
}