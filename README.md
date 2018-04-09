CV Symfony
========================
Voici le CV réalisé par Theo Duparc lors du cours de Symfony du semestre 4 du DUT MMI. 

Qu'est ce qu'on a utilisé ?
--------------

  * An AppBundle;

  * Twig;

  * Doctrine;

Qu'est ce que j'ai fais ? 
--------------
  * J'ai d'abord installé Symfony avec composer
  * J'ai créé des entités qui en fait sont des "pages" que sont situés dans le dossier entity. J'ai donc "experiences.php", "formations.php" et loisirs.php", ou l'on retrouve les classes, et les différents parametres qui qualifies une catégorie. Par exemple, une experiences est identifié par un nom, un id, une date, et un lieu. Ainsi de suite pour loisirs et formations.  
  * Ensuite j'ai installé une base de donné Mysql avec Phpmyadmin. On la ensuite synchronisé avec notre site, afin de pouvoir ajouter et supprimer des informations à la base et donc au sein des rubriques du site
  * J'ai mis en place des fonctionnalités "delete", "edit" et "create" pour que l'on puisse remplir la base de donné
  * Pour continué j'ai fais un peut de sécurité dans le fichier security.yml. Maintenant il faut obligatoirement s'identifier en tant qu'admin pour pouvoir accéder à la page des modifications
  * Ensuite j'ai modifié le fichier index.html pour remplir le CV avec mes compétences etc... Je l'ai fais de façon humoristique car j'ai essayé de me concentrer sur le coté développement vu que j'ai beaucoup plus de mal. 

Retours personnel sur le cours
--------------
Ayant beaucoup de mal avec le developpement web, voir une nouvelle façon de créer un site web à été assez compliqué, surtout pour ne pas tout mélénger. Mais néanmoins j'ai essayé au mieux de remplir les tâches. Avec le recul cette façon de faire être peut être plus simple, car pleut plus facielement inter-agir avec le site, et avori quelque chose de dynamique (avec la base de donnée également).
Merci et bonne continuation à vous. 

Theo Duparc. 