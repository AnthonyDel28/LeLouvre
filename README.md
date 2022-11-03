## Symfony Exam (Musée du Louvre)


Pour le cours de POO Framework nous avons du réaliser, en guise d'examen, un site web dont le thème était "le musée".
Ce projet a été réalisé à partir du framework Symfony et de Bootstrap.
Pour mon projet je me suis inspiré du Musée du Louvre, l'un des plus connus au monde.

![image search api](https://i.postimg.cc/85gQ9zwg/2022-11-03-22-28-35.png)


### Ce qu'il contient :beginner:  

- Site entièrement basé sur un thème sobre style "Musée"   
- Page d'accueil avec : Navbar (4 items), Slider, les 3 peintures les plus populaires du musée, Div informative et enfin le footer.  
- Page "Galerie" qui permet de lister toutes les oeuvres et de les trier en fonction du type d'oeuvre et de la technique de peinture utilisée.  
  Chaque oeuvre possède un bouton qui permet d'arriver sur une vue.twig qui est le détail complet de l'oeuvre. 
  Cette vue contient l'oeuvre en image, ses infos ainsi qu'une section commentaires entièrement fonctionnelle.
- Page "Team"(Gouvernance du Louvre): Contient la liste des membres du Musée récupérés dans une simple table en BDD
- Page "About": Simple page contenant du texte et des illustrations

- Page Admin: (accessible via votre adresse serveur symfony locale suivie de "/admin". Dans mon cas: 127.0.0.1:8000/admin)
  Cette page admin liste toutes les oeuvres du musées qui sont en BDD et permet de:  
      - Rendre visible/invisible une peinture  
      - Créer une nouvelle peinture (avec ses infos et une image(Via VichUploader))  
      - Modifier cette peinture (ses infos ainsi que son image)  
      - Lister les commentaires de chaque oeuvre et les modifier  
      - Supprimer une peinture  
      - Les confirmations se font via des messages flash  
      
 ![image search api](https://i.ibb.co/pr6Tjgq/2022-11-04-00-01-06-localhost-127-0-0-1-lelouvre-php-My-Admin-5-2-0.png)

## Outils utilisés: :diamond_shape_with_a_dot_inside:
![Symfony](https://img.shields.io/badge/Symfony-V6-red)
![Bootstrap](https://img.shields.io/badge/Bootstrap-V5-blue)
![PHPSTORM](https://img.shields.io/badge/PhpStorm-IDE-purple)


Made with :heart: by Anthony D.
