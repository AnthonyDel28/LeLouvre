<?php

namespace App\DataFixtures;

use App\Entity\Painting;
use App\Entity\Category;
use App\Entity\Technic;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Cocur\Slugify\Slugify;
use Faker;



class PaintingFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $categories = $manager->getRepository(Category::class)->findAll();
        $technics = $manager->getRepository(Technic::class)->findAll();
        $faker = Faker\Factory::create('fr_FR');
        $slugify = new Slugify();
            $x = 0;
            while($x <= 29) {
                $paint = new Painting();
                $paint->setTechnic($technics[$faker->numberBetween(0, count($technics) - 1)])
                    ->setCategory($categories[$faker->numberBetween(0, count($categories) - 1)])
                    ->setTitle($this->paints[$x])
                    ->setDescription($this->descriptions[$x])
                    ->setAuthor($this->authors[$x])
                    ->setHeight($faker->numberBetween(45, 420))
                    ->setWidth($faker->numberBetween(60, 500))
                    ->setSlug($slugify->slugify($this->paints[$x]))
                    ->setImage($slugify->slugify($this->paints[$x]) . '.jpg')
                    ->setDate($this->dates[$x]);
                    $manager->persist($paint);
                    $x++;
            $manager->flush();
        }}

        public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            TechnicFixtures::class
        ];
    }



    private array $paints = [
       'La nuit étoilée',
       'Le Jardin des délices',
       'La Ronde de nuit',
       'La Classe de danse',
       'La naissance de Vénus',
       'Impression, soleil levant',
       'Le déjeuner sur l\'herbe',
       'La liberté guidant le peuple',
       'Arrangement en gris et noir',
       'American Gothic',
       'Le Baiser',
       'La Cène',
       'La Dame à l\'hermine',
       'Guernica',
       'La Montagne Sainte-Victoire',
       'La Joconde',
       'Les Ménines',
       'Les Demoiselles d\'Avignon',
       'Le Radeau de la Méduse',
       'L\'école d\'Athènes',
       'Bal du moulin de la Galette',
       'La Persistance de la mémoire',
       'Les époux Arnolfini',
       'La grande Vague de Kanagawa',
       'Terrasse du café le soir',
       'Le Désespéré',
       'Un Baiser',
       'Le Syndic de la guilde des drapiers',
       'La mort de Socrate',
       'Femmes de Tahiti'
   ];

    private array $authors = [
            'Vincent Van Gogh',
        'Jérôme Bosch',
        'Rembrandt',
        'Edgar Degas',
        'Sandro Botticelli',
        'Claude Monet',
        'Édouard Manet',
        'Eugène Delacroix',
        'James Abbott McNeill Whistler',
        'Grant Wood',
        'Gustav Klimt',
        'Léonard de Vinci',
        'Léonard de Vinci',
        'Pablo Picasso',
        'Paul Cézanne',
        'Léonard de Vinci',
        'Diego Vélasquez',
        'Pablo Picasso',
        'Théodore Géricault',
        'Raphaël',
        'Auguste Renoir',
        'Salvador Dalí',
        'Jan Van Eyck',
        'Hokusai',
        'Vincent van Gogh',
        'Gustave Courbet',
        'Francesco Hayez',
        'Rembrandt',
        'Jacques-Louis David',
        'Paul Gauguin'
        ];
    private array $dates = [
        '1889 - 1890',
        '1503 - 1515',
        '1642',
        '1871 - 1874',
        '1485 - 1486',
        '1872',
        '1862 - 1863',
        '1830',
        '1871',
        '1930',
        '1907 - 1908',
        '1495 - 1498',
        '1489',
        '1937',
        '1892 - 1895',
        '1503',
        '1656',
        '1907',
        '1818 - 1819',
        '1508 - 1512',
        '1876',
        '1931',
        '1434',
        '1831',
        '1888',
        '1844 - 1845',
        '1859',
        '1662',
        '1787',
        '1891'
    ];

    private array $descriptions = [
        'Ce tableau représente ce que Van Gogh pouvait voir ou extrapoler de la chambre qu’il occupait lors de son séjour à l’asile de St Rémy de Provence. C’est à cette période difficile de sa vie tourmentée qu’il peint l’une des toiles les plus célèbres de l’histoire de l’art, aujourd’hui conservée au MoMA à New York. Ainsi, si beaucoup disent que cette œuvre constitue le cri de révolte d’un génie incompris, la plupart s’accordent surtout à dire que ce tableau est la projection de son instabilité mentale. Mais quand on s’y penche d’un peu plus près, cette œuvre n’est pas aussi folle qu’elle peut en avoir l’air, et Van Gogh n’a pas créé les différents éléments de sa toile au hasard. Chacun a sa propre signification, et conforte l’harmonie et l’attractivité de cette œuvre incroyable, chargée de significations.',
        'Le Jardin des délices, peint vers 1503, est un triptyque représentant à gauche l’Eden, à droite l’Enfer et au centre la troupe des descendants d’Adam et Eve. Si la lecture des deux panneaux des extrémités est sans ambiguïté, il n’en va pas de même de la partie centrale dont l’interprétation n’a cessé de faire polémique chez les historiens de l’art. Pris entre Paradis et Enfer, la logique a souvent voulu faire de ce panneau central l’expression de temps de débauche consécutifs au péché originel et annonçant la punition divine ultime. Une lecture religieuse s’impose donc en premier lieu mais, face à l’originalité si déroutante de cette représentation, demandons-nous plutôt ce que pourrait apporter d’éclairage une lecture symbolique de l’œuvre.',
        'Rembrandt a peint ce portrait de groupe sur commande de la compagnie de milice du capitaine Frans Banning Cocq et son lieutenant Willem van Ruytenburch. Rembrandt a été le premier à peindre des figures en action sur ses peintures de groupe. Le capitaine (en noir) ordonne à ses hommes de marcher. Les 18 hommes qui ont payé pour la peinture ont leurs noms inscrits sur un bouclier au-dessus de la porte, qui a été ajouté plus tard. Le tableau est resté accroché dans la grande salle pendant près d’un siècle.',
        'Degas s’inspire des estampes japonaises pour sa construction et joue du contraste entre le plein et le vide. Le peintre divise l’espace en deux parties égales, l’une occupée par les danseuses et le public, l’autre vide. Les trois plans sont définis par les attitudes des danseuses : au premier plan : deux danseuses observent la répétition. L’une est debout et tient un éventail, l’autre est assise sur le piano et se gratte le dos. À l’extrémité gauche du tableau Degas a placé un arrosoir (utilisé dans les salles de danse pour humidifier le parquet) et au pied de la danseuse debout, un petit chien. Ces détails réalistes font vivre le tableau.',
        'Déesse de l’Amour, de la Beauté et de la Pureté, Vénus est ici représentée dans son plus simple appareil. Sa pudeur est à peine dissimulée par sa longue chevelure blonde qui ne masque que partiellement ses courbes féminines. D’une taille quasi grandeur nature, elle dévoile son innocence et sa pureté à des yeux protecteurs. Sa posture est classique, dite en « contraposto », inspirée de l’Antiquité et de la mythologie grecque. Seulement, contrairement à des portraits plus académiques où la posture est droite et les pieds bien ancrés dans le sol, l’équilibre de Vénus nous paraît ici très instable. Bien qu’il soit léger, son déhanchement hérité de la statuaire grecque évoque le mouvement. À quoi peut-elle bien penser ? Le visage est las, semble inhabité ou teinté d’une douce mélancolie. Une question se pose cependant : s’agit-il de la représentation de la femme émancipée ou de l’idéal masculin sur fond de cliché ? La jeune femme représentée n’est autre que Simonetta Vespucci, considérée comme l’une des plus belles femmes de son époque. Elle est décédée prématurément à l’âge de 23 ans des suites d’une pneumonie',
        'Le soleil est sans aucun doute le point central de la composition. Il se distingue par ses teintes chaudes et sa netteté, au milieu de l’atmosphère froide et brumeuse du port. De nombreuses études ont d’ailleurs été réalisées sur ce soleil rougeoyant. Certains historiens ayant émis des doutes sur sa nature : levant, ou couchant ? Alors, en 2014, le Musée Marmottan qui héberge la toile a publié une étude poussée sur la datation de l’œuvre. Grâce à l’étude de données topographiques, telles que les marées, les bulletins météorologiques ou encore les trajectoires célestes, il est certain qu’il s’agit bien du soleil se levant. Les enquêteurs avancent même une date précise pour son exécution : le 13 novembre 1872 à 7h35 du matin, soit 30 minutes après l’aube. Claude Monet a peint cette toile en quelques heures, de la chambre de son hôtel sur le Quai de Southampton. Il ignorait alors qu’elle marquerait un véritable tournant dans l’Histoire de l’Art !',
        'Dans un décor que l’on imagine plutôt fictif et théâtral, quatre personnages partagent un moment autour de quelques mets. Ils profitent d’une quiétude au cœur des bois. Or le regard est inévitablement attiré vers le corps dénudé de la jeune femme assise, de surcroît entourée de deux hommes. Dans un contexte où l’art pictural met davantage en lumière la féminité dans les allégories et la mythologie, Manet dévoile ici un profond décalage entre le message qu’il tend à transmettre et l’époque dans laquelle il évolue. Pourtant décrié, Manet s’inspire du Jugement de Pâris, gravure de Raphaël à laquelle il a emprunté la composition (en bas à droite de la gravure).',
        'Eugène Delacroix réalise ce grand tableau entre octobre et décembre 1830. La scène représentée prend place lors des Trois Glorieuses, durant la Révolution de Juillet, les 27, 28 et 29 Juillet 1830. Contrairement à ce que l’on peut penser de prime abord, il ne s’agit donc pas d’une scène mettant en exergue la Révolution française de 1789, mais bien la Seconde révolution.  Celle-ci intervient durant la Restauration, lorsque le roi Charles X tente de restreindre les libertés par ordonnances. Le peuple parisien se soulève alors, pendant trois jours d’émeutes qui entreront dans l’histoire. Charles X abdique et est alors mise en place la Monarchie de Juillet, une monarchie constitutionnelle avec Louis-Philippe Ier comme roi. Delacroix, qui n’a pas pris part aux affrontements mais se sent profondément progressiste, décide de rendre hommage à la rébellion du peuple, de façon à la fois réaliste et allégorique. Le peuple et la Liberté marchent ensemble sur Paris, franchissant une barricade.',
        'La mise en scène n’est pas classique, madame Whistler étant assise de profil, et non de trois quarts ou de face. Cette position lui donne un caractère figé, rigide voire sévère. Le regard du modèle ne noue pas de lien avec le spectateur : il se porte vers l’extérieur, ce qui confère un sentiment d’enfermement et, paradoxalement, de force et de liberté intérieure. Madame Whistler semble garder ses idées pour elle. En ne représentant pas la totalité du visage de sa mère, le peintre exprime le caractère déterminé de celle-ci, dont l’intériorité nous reste mystérieuse. Un critique londonien allait peut-être trop loin en émettant l’hypothèse que cette peinture portait la marque du puritanisme américain. Néanmoins, la mère de l’artiste était réputée très pieuse et menait une vie austère. Elle jugeait avec réprobation le mode de vie « bohême » de son fils, et avait contribué à la séparation de l’artiste d’avec Joanna Hiffernan [ image 1 ], ancien modèle de Courbet, avec qui il entretenait une relation.',
        'Appartenant au courant du régionalisme, son œuvre la plus connue est incontestablement American Gothic, réalisée en 1930 . Au premier regard, ce portrait qui prend place à Eldon, dans l’Iowa rappelle beaucoup « Les Époux Arnolfini » du Flamand Van Eyck. Achetée par l’Art Institute of Chicago, l’oeuvre a été par la suite maintes fois reprise et détournée. On y trouve des allusions dans le dessin animé de Disney « Mulan », les séries « Dexter » et « Desperate Housewives » ou encore chez les Simpson. De nombreux détournements montrent aussi le « couple » rhabillé de façon moderne, notamment en vêtements streetwear ou déguisés personnages tout droit sortis de « Star Wars ».',
        'Ces amoureux semblent tout droit sortis d’un rêve, hors de portée du temps qui passe, comme s’il n’existait qu’eux, et que le monde autour – si tant est qu’il en existe un – ne pouvait avoir aucun impact direct sur cette bulle d’un Idéal romantique. Les capes dorées, véritable manteau nuptial, marquent l’opposition entre l’homme et la femme. Au-delà d’une opposition sexuée, autrement dit ce que l’on ne peut voir mais que l’on devine aisément, le peintre met en lumière des motifs distincts sur les deux vêtements. Les formes cohabitent harmonieusement. Espaces vides et espaces pleins se compensent, s’équilibrent parfaitement. L’aspect surchargé des vêtements et du parterre fleuri contraste avec l’arrière-plan couleur bronze finement parsemé de poussière d’or ou d’étoiles, qui nous donnent à rêver.',
        'C’est un exemple parfait de l’art chrétien de la Renaissance, qui illustre le verset 13 :21 de l’Evangile selon Saint Jean où Jésus, entouré de ses disciples, révèle que l’un d’entre eux va bientôt le trahir. Le tableau capture les réactions des apôtres de façon vive, montrant chacune de leurs personnalités en action. Alors qu’il s’agit d’une anecdote biblique, le tableau est bien plus qu’une scène religieuse de par sa composition extrêmement complexe. L’usage de De Vinci de la perspective ainsi que l’attention portée à la psychologie des personnages en fait l’une des premières pièces de l’art de la Renaissance, établissant plusieurs des conventions esthétiques du mouvement. Sa beauté frappante fera de nombreux émules par la suite.',
        'La popularité de ce portrait résulte probablement de la distinction naturelle du modèle, de l’impression immédiate de raffinement délicat qu’a su capter Vinci. La simplicité vestimentaire choisie par l’artiste permet de mettre en valeur l’élégance de Cecilia Gallerani au lieu d’attirer le regard sur la somptuosité de la parure, comme il est fréquent. Le long cou est souligné par un simple collier de perles et la main, volontairement surdimensionnée, se caractérise par de longs doigts reposant sur l’hermine. Le portrait est ainsi en adéquation avec ce que nous connaissons du modèle : une femme intelligente et cultivée, aimant fréquenter les écrivains et les artistes.',
        'En 1937, la République espagnole demande à Picasso de réaliser une grande composition pour l’exposition Universelle de Paris. Juste après, cette commande survient l’évènement le plus dramatique de la guerre civile espagnole. La petite ville basque de Guernica subit plusieurs vagues de bombardements. Par cet acte, L’Allemagne nazie et l’Italie fasciste veulent affirmer leur soutien officiel aux nationalistes de Franco face aux Républicains. Guernica, ravagée, compte des centaines de morts et de blessés, tous civils. Picasso, exilé à Paris, prend connaissance du drame dans les journaux. Troublé par les récits qu’il lit et les photographies qu’il voit, il crée Guernica comme il pousserait un énorme cri de colère face à la folie de l’humanité. On raconte même que lorsque l’ambassadeur nazi Otto Abetz a demandé à Picasso devant une photo de Guernica « C’est vous qui avez fait cela ? », l’artiste a répondu : « Non… vous »',
        'Nous pouvons percevoir une vue panoramique et en hauteur, Sainte-Victoire apparaît reléguée au second plan. Ce sont le pin et le viaduc du chemin de fer qui dominent la composition. Nous pouvons voir au premier plan la verticalité de la composition grâce aux pins puis l’horizontalité de celle-ci par le viaduc. Mais même reléguée au second plan, Sainte-Victoire nous révèle son relief avec un plateau et garde la lecture du tableau à l’horizontal. La crête, quant à elle, dissimule des lignes. La source du peintre est toute trouvée, elle s’appelle la montagne Sainte Victoire. Cette œuvre est ponctuée de nombreux facteurs de mise en scène, nous pouvons percevoir des plans successifs et des plans de verticalité et d’horizontalité. Ce tableau ressort grâce à sa palette de couleurs limitées et sa mise en scène.',
        'La Joconde est le portrait d’une jeune femme, sur fond d’un paysage montagneux aux horizons lointains et brumeux. Le flou du tableau est caractéristique de la technique du sfumato. Le sfumato, de l’italien enfumé, est un effet vaporeux, obtenu par la superposition de plusieurs couches de peinture extrêmement délicates qui donne au tableau des contours imprécis. Cette technique a été employée en particulier au niveau des yeux dans la mise en ombrage. La femme porte sur la tête un voile noir transparent et une robe. On remarque qu’elle est totalement épilée, conformément à la mode de l’époque, et ne présente ni cils ni sourcils. Elle est assise sur un fauteuil dont on aperçoit le dossier à droite du tableau. Ses mains sont croisées, posées sur un bras du fauteuil. Elle se trouve probablement dans une loggia : on peut voir un parapet juste derrière elle au premier tiers du tableau, ainsi que l’amorce de la base renflée d’une colonne sur la gauche. À l’arrière plan se trouve un paysage montagneux dans lequel se détachent un chemin sinueux et une rivière qu’enjambe un pont de pierre. La source de lumière provient essentiellement de la gauche du tableau. Le sourire de la Joconde constitue un des éléments énigmatiques du tableau, qui a contribué au développement du mythe. Son sourire apparaît comme suspendu, prêt à s’éteindre. Tout en donnant l’impression de suivre le spectateur des yeux, le regard de Mona Lisa fixe un point situé au-delà du spectateur, légèrement à sa droite, provoquant ainsi une mise en profondeur du dialogue entre l’œuvre et le spectateur. Bruno Mathon, critique d’art, dit ainsi que la Joconde « regarde quelque chose en vous, mais qui est derrière vous, dans votre passé. Elle regarde l’enfant que vous avez été, comme une mère regarde son enfant »',
        'Souriez… on ne bouge plus ! C’est un portrait de famille, devenu icône de l’histoire de l’art. Nous voici à la cour du roi Philippe IV, au Palais de l’Alcazar, dans l’atelier du peintre officiel du souverain : Diego Vélasquez (1599–1660). Au cœur de cette composition complexe, la petite infante Marguerite est entourée de ses demoiselles d’honneur, les fameuses « Ménines », qui donneront son titre moderne au tableau, ainsi que de deux nains, d’une gouvernante, d’un garde du corps et d’un gros chien. À leurs côtés, l’artiste lui-même se représente au travail, face à une toile dont on ne distingue que l’envers. Dans l’embrasure de la porte au second plan, la silhouette d’un chambellan est figée en pleine lumière. Au mur, un miroir nous renvoie un troublant reflet… celui du couple royal ! Le temps semble suspendu et les personnages surpris, à tel point que le spectateur a l’impression, malgré lui, d’interrompre ce moment en famille.',
        'Neuf mois sont nécessaires pour que naissent ces Demoiselles d’Avignon qui ne reçoivent pas l’accueil espéré par Picasso. Son entourage, stupéfait et même choqué par une telle mise en scène, ne comprend pas l’artiste. Il a quand même osé représenter des femmes nues dont les corps et le décor ne respectent absolument pas les codes académiques en peinture ! Et puis ces visages… Georges Braque lui aurait dit « C’est comme si tu voulais nous donner à boire du pétrole pour cracher du feu » et André Derain d’ajouter « Un jour, nous apprendrons que Picasso s’est pendu derrière sa grande toile ». Même les peintres d’avant-garde fustigent l’artiste ! Jusqu’en 1916, l’œuvre reste dans les ateliers. Les amateurs d’art ne la découvrent que 30 ans après sa réalisation lors d’une exposition au MoMA de New York où elle est conservée depuis.',
        'L’histoire a défrayé la chronique à l’époque. 1816, la frégate française La Méduse s’échoue au large des côtes mauritaniennes avec à son bord près de 400 hommes, alors qu’elle s’apprêtait à coloniser le Sénégal. A son commandement, un officier d’Ancien Régime qui n’a pas su empêcher l’échouage de la frégate sur un banc de sable. Et pour cause, il n’avait pas navigué depuis plus de 20 ans ! Théodore Géricault s’est rapidement saisi du sujet et a longuement étudié ce fait divers avant d’en dépeindre ce qui allait être le plus grand chef-d’œuvre de sa vie. Comment rester indifférent face à une telle scène ? Géricault immortalise un moment bouleversant d’horreur sur fond d’espoir. Pour rejoindre la terre ferme, les naufragés n’ont d’autre choix que de bâtir un radeau. Pendant treize jours, tous vont subir un véritable calvaire, ravagés par la soif et la faim, certains finissent même par s’entretuer. Ils ne sont pas plus de dix à survivre.',
        'L’école d’Athènes met en scène les philosophes de l’antiquité entourés de leurs disciples. Au centre du tableau se trouvent Platon (index tendu vers le plafond) et Aristote. À leur gauche Socrate instruit un groupe de jeunes athéniens. À l’extrême gauche du tableau Épicure est plongé dans la lecture d’un livre en s’appuyant sur une colonne. Au premier plan sur la gauche Pythagore écrit ses théorèmes. Le personnage accoudé au premier plan central représente certainement Michel-Ange. On ignore si celui-ci a été intégré à la composition à la demande du pape ou si Raphaël a souhaité rendre hommage à son rival qui travaillait à ce moment là sur le plafond de la chapelle Sixtine. Le personnage avachi sur les marches représente Diogène, fondateur de l’école cynique, méprisant les conventions et les apparences. Le groupe à droite entoure Euclide qui fait une démonstration sur une ardoise à l’aide d’un compas. Derrière lui, les astronomes Zoroastre et Ptolémée tiennent les sphères céleste et terrestre. Tout à fait à droite, le jeune homme qui regarde le spectateur n’est autre que Raphaël qui s’est placé lui-même au milieu des personnages. Cet ajout de personnages divers est un apport moderne que fait Raphaël à la tradition qui se serait limitée à la seule représentation des 7 philosophes qui font le sujet du tableau. Il réussit à créer une scène équilibrée tout en prenant certaines libertés avec la symétrie de la composition.',
        'En 1876, Auguste Renoir (1841 – 1919) loue un petit atelier rue Cortot à Montmartre. Durant tout l’été, il déplace son chevalet de son atelier jusqu’à une de ses guinguettes favorites de plein air, le Moulin de la galette. Elle tire son nom d’un des derniers moulins subsistant – d’ailleurs toujours debout aujourd’hui. À la fin du XIXe siècle, tous les dimanches après-midi, le petit monde bohème parisien se retrouve dans cette guinguette, sous les arbres, pour danser, manger et boire entre amis. Renoir réalise de nombreuses études préparatoires pour construire cette composition complexe, avec l’aide de ses amis qui posent volontiers. La toile, très représentative de la période impressionniste de Renoir, dégage un air d’insouciance et de gaieté. Renoir la présente au Salon des impressionnistes de 1877, et elle reçoit un accueil mitigé.',
        'La Persistance de la Mémoire, aussi populairement appelé Les Montres molles, est tout simplement un monde onirique et quelque peu étranger. L’œil du spectateur considère d’abord la toile dans son ensemble (qui ne mesure que 24x33cm !) et cette vaste scène déserte, avant de s’attarder plus franchement sur les détails au premier plan. Dans cette scène surréaliste, Dalí imagine que des montres métalliques fondent et s’amolissent. Une façon de souligner la bataille perdue d’avance contre le temps ? Fasciné par la Théorie générale de la relativité d’Albert Einstein, publiée en 1920, il évoque à sa manière cette quête impossible contre la finitude.',
        'Dans cette œuvre, Van Eyck représente un couple dans la chambre nuptiale. Ce genre de scènes profanes et privées apparaît à l’époque de Van Eyck, délaissant peu à peu les scènes plus religieuses. Si les deux personnages sont aujourd’hui présentés comme étant les époux Arnolfini, leur identité est en réalité sujette à controverse. Dans l’Inventaire des Avoirs de Marguerite de 1516, le tableau est décrit comme présentant « Hernoul-le-Fin avec sa femme ». A l’époque, le terme « Hernoul » voulait tout simplement dire « le cocu ». (Comme vous pouvez le voir, les gens de l’époque avaient beaucoup d’humour !). Ce personnage était souvent présent dans les farces populaires de l’époque.',
        'Si imprévisible et impressionnante qu’elle a donné son nom à l’œuvre, la vague ici représentée a de quoi donner le vertige. Or ce n’est pas une mais bien deux vagues qui occupent plus de la moitié de l’estampe. Au premier plan, ces monstres de la mer mesurent 15 mètres de haut. Ils attirent évidemment le regard du spectateur, comme aspiré au creux de la vague. Colorées en bleu et blanc, ces vagues sont sur le point de capturer leur proie. Sous l’écume aux doigts étonnamment crochus, le bleu de Prusse s’apprête à tout engloutir. Et ce ne sont pas ces trois barques de pêcheurs qui l’en empêcheront… Même si l’œuvre est en deux dimensions, le travail de perspective est précis. Inspiré par les peintres venus d’Europe, Hokusai donne profondeur à son estampe et va même jusqu’à reléguer le mythique Mont Fuji au second plan.',
        'Le sujet principal de ce tableau est donc cette terrasse de café, vue de côté, à la nuit tombée. En effet, au lieu de se mettre au centre de la place, face au café, le peintre s’est installé sur le côté, près du mur de la bâtisse voisine pour faire face à la terrasse dans sa longueur. Ce point de vue, adopté par le peintre, apporte une grande profondeur à la composition et dirige l’attention sur l’animation et la vie du lieu plutôt que sur le café en tant que bâtiment. Toutes les lignes de perspectives filent vers le fond de la terrasse et attire l’œil vers les clients attablés et le serveur, puis dans un deuxième temps vers cette rue qui se perd dans la nuit et accentue par sa présence la profondeur du tableau. La composition comporte une dominante de jaune et de bleu qui au premier abord marque la présence du contraste de la couleur en soi. Elle contient malgré tout toutes les couleurs du cercle chromatique, même si le rouge est peu présent, ainsi que le noir et le blanc, De plus beaucoup de contrastes sont présent dans l’œuvre.',
        'Le Désespéré est un tableau du peintre français Gustave Courbet. L’œuvre est un autoportrait de l’artiste. On pense qu’il a réalisé cette peinture entre 1843 et 1845, au début de son installation à Paris. Elle le montre « désespéré » mais surtout en pleine jeunesse. Courbet tenait beaucoup à cette toile puisqu’il l’emmena en exil avec lui en Suisse en 1873. Quelques années plus tard, le docteur Paul Collin au chevet de Courbet durant ses derniers jours, décrit l’atelier du peintre et, plus particulièrement, « un tableau représentant Courbet avec une expression désespérée et qu’il avait intitulé pour cette raison Désespoir. » La toile appartient à une collection privée d’investissement, mais a été exposée au musée d’Orsay en 2007.',
        'Le Baiser reste LE chef d’oeuvre de Francesco Hayez, la peinture qui fera sa renommée à travers l’Europe dans la seconde moitié du XIXème siècle. Pourtant, en 1859, le vieux peintre n’en est pas à son premier essai. Celui que Stendhal considérait comme le meilleur peintre de son temps s’est illustré à plusieurs reprises dans le genre de la peinture troubadour, peignant des scènes historiques et littéraires, à l’instar des peintres romantiques français. En 1823, il représente le mariage de Roméo et Juliette et immortalise le dernier baiser des deux amants (Le dernier baiser de Roméo et Juliette, Villa Carlotta), dont l’excès de réalisme scandalise la société milanaise. Si la scène que nous observons ici se passe vraisemblablement au Moyen-Age comme le suggèrent le décor gothique et les habits des personnages, les acteurs ne sont pas identifiés. Le sujet est universel : deux jeunes amants qui s’embrassent passionnément. Est-ce un baiser d’adieu, comme le laisse entendre la position active – le pied sur une marche – du jeune homme qui serait sur le départ ? L’ombre qui apparaît dans l’embrasure de la porte en bas à droite laisse d’ailleurs planer une menace sur l’avenir de ce couple. Le scène énigmatique a été interprétée de multiples façons, la plus récurrente étant celle du départ d’un volontaire engagé pour l’indépendance italienne.',
        'Les Staalmeesters montrent les cinq membres du conseil d’administration de la guilde des drapiers, dont les noms sont connus d’après des documents contemporains, ainsi que leur serviteur, qui est présenté sans chapeau. Le livre qui se trouve devant le président est probablement le livre de comptes dans lequel sont consignés les noms des drapiers dont les échantillons ont été approuvés, ainsi que la date et les frais qu’ils ont payés. Selon la vision traditionnelle de la peinture, les hommes sont assis sur une plate-forme surélevée devant les membres de la guilde des drapiers, à qui ils rendent compte des résultats du commerce de l’année. Conformément à cette interprétation, le syndic assis en troisième position à gauche fait un geste de la main droite – quelque chose comme: "Vous voyez?" – après avoir présenté un ensemble de faits particulier. D’autres critiques citent le comportement du personnage le second à partir de la gauche (le marchand de drap mennonite Volckert Jansz), qui, se disent-ils, se lève pour répondre à une question du public.',
        'La scène présente un nombre important de personnages (treize) et tout est étudié pour faire converger les regards sur le personnage principal : Socrate, qui focalise l’attention. Sur le point de boire la coupe de ciguë présentée par le bourreau, le philosophe a encore le courage de transmettre sa sagesse. Le torse du vieillard et sa jambe droite sont dénudés. À terre, des chaînes brisées : on vient de les enlever à Socrate, qui en est soulagé, et il entreprend son célèbre discours sur la douleur et le plaisir (qui est l’absence de douleur). La détermination de son regard et de son geste du maître enseignant à ses disciples contraste avec les attitudes effondrées des assistants. Une extrême émotion caractérise les personnages qui l’entourent – ce qui souligne l’impassibilité du philosophe.',
        'Le tableau représente deux femmes tahitiennes assises sur une plage, dans un moment de repos. Ce sujet pictural est typique du premier séjour de Gauguin dans le Pacifique. Ce sont des compositions de la vie simple dans lesquelles les personnages se détachent au premier plan et prennent plus d’importance que le contexte. Par ailleurs, les couleurs utilisées, notamment le rouge et le noir, sont de première qualité. Au premier abord, le tableau donne une impression significative de la nature. Paul Gauguin aurait bien pu réaliser une peinture sur d’autres supports comme le bois, mais le peintre en a décidé autrement. D’ailleurs, il peut arriver que l’on retrouve des représentations sur du bronze dans la mesure où l’artiste veut s’illustrer autrement tel est l’exemple du bracelet noa (appelé aussi bracelet tableau) qui peut être orné de différents motifs. Le verre acrylique ou l’alu peuvent aussi servir de support. Mais y appliquer du pastel ne serait pas très pratique.'
        ];
}