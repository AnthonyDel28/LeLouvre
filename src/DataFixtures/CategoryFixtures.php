<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    private array $categories = [
        'Peintures anglaises' => 'La peinture anglaise, plus précisément appelée l\'« école
anglaise de peinture », désigne un style pictural propre à l\'Angleterre (et aux artistes britanniques), durant les xviiie et xixe siècles.',
        'Peintures espagnoles' => 'La peinture en Espagne est toute la production picturale de ce pays depuis les premières représentations des peintures rupestres du paléolithique (es), en particulier dans la grotte d\'Altamira (vers 14000 av. J.-C.) à l\'art contemporain, dont l\'une des figures principales est Pablo Picasso.',
        'Peintures françaises' => 'La peinture française est considérée comme une des grandes écoles de peinture par son influence, son histoire et ses productions, aux côtés de la peinture italienne, de la peinture flamande et de la peinture hollandaise.',
        'Peintures germaniques' => 'La peinture allemande ou peinture germanique est toute la production picturale réalisée dans le territoire formé par l\'État fédéral allemand ou par des artistes qui y sont nés.',
        'Peintures italiennes' => 'La peinture italienne a, dans le domaine de l\'histoire de l\'art, une place singulière tant par la variété de ses genres artistiques que par son rayonnement au-delà de l\'Italie. La production picturale en Italie est intimement liée à l\'histoire de la péninsule et plus généralement à l\'histoire du continent européen. La peinture italienne s\'est nourrie des influences des puissances qui ont dominé la péninsule pendant des siècles et, dans le même temps, elle a profondément influencé l’art de tout l’Occident.'];

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
}