<?php

namespace App\DataFixtures;
use App\Entity\Technic;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TechnicFixtures extends Fixture {

    private array $technics = [
        'Peinture à l\'huile' => 'La technique de peinture picturale est réalisée à partir de pigments organiques et d’huile siccative. Avant d’appliquer la peinture, il faudra ajouter des diluants ou des médiums. Cela facilitera son application sur les différents supports. Vous pouvez d’ailleurs modifier sa texture grâce à la technique. L’utilisation de la peinture à l’huile permet d’obtenir une pâte épaisse et graisseuse. Un peintre qui utilise la peinture à l’huile doit être patient lors de la réalisation d’une toile. En effet, il est important d’attendre plusieurs semaines avant de pouvoir appliquer d’autres couches de couleurs. Dans le cas contraire, les tableaux seront pleins de craquelures.',
        'Aquarelle' => 'L’aquarelle est une technique de peinture à base d’eau. Elle doit être appliquée sur un support épais. Exemple, le papier ou la soie. Les aquarelles sont disponibles sous différents conditionnements. Il existe sous forme de craies, crayon et l’aquarelle liquide. Les œuvres sont faciles à réaliser avec l’aquarelle. Du fait que les croquis peuvent être dessinés avec du crayon avant d’effectuer l’opération de coloriage. En revanche, le peintre doit être précis puisqu’il reste impossible d’effacer les traits de la peinture.',
        'Pastel' => 'Les pastels peuvent à la fois servir pour le dessin et la peinture. Il existe différentes techniques de peinture à base de pastel qui peuvent être appliquées durant la peinture. Vous pouvez utiliser les pastels secs ou les pastels gras. La grande différence entre les deux pastels se situe au niveau de ses caractéristiques et les produits choisis pour sa fabrication. En fait, les pastels secs sont tendres ou durs. De son côté, les pastels gras sont fabriqués avec de l’huile ou de la cire. Les pastels doivent être utilisés en couches. Le peintre se doit de superposer les couleurs afin d’obtenir une couleur particulière sur la toile.',
        'Tempera' => 'La tempera est un mélange entre la peinture à l’eau et l’œuf. Elle peut être appliquée sur plusieurs types de supports. Exemple, un plâtre, toile ou enduits. Quand la tempera est sèche, elle ne peut plus être dissoute malgré l’utilisation d’eau ou d’alcool. La tempera sèche également rapidement ce qui peut devenir un inconvénient majeur pour un peintre lors de la réalisation de fondus. La présence d’œuf peut aussi impacter la résistance du tableau contre l’humidité ou la moisissure.',
        'Peinture acrylique' => 'La peinture acrylique est une technique picturale qui utilise des résines synthétiques mélangées avec des pigments. La peinture acrylique se dilue à l’eau. De plus, l’œuvre d’art deviendra indélébile. La peinture acrylique fait partie des différentes techniques de peinture le plus en vogue aux 19ème siècles. Une fois sec, il devient impossible de retoucher les couleurs du tableau.'
        ];

    public function load(ObjectManager $manager): void
    {
        foreach($this->technics as $technic => $description) {
            $tech = new Technic();
            $tech->setName($technic);
            $tech->setDescription($description);
            $manager->persist($tech);
        }

        $manager->flush();
    }
}