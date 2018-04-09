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
  * Pour continué j'ai fais un peut de sécurité. C'est qu'il faut obligatoirement s'identifier en tant qu'admin pour pouvoir accéder à la page des modifications
  * Ensuite j'ai modifié le fichier index.html pour remplir le CV avec mes compétences etc... Je l'ai fais de façon humoristique car j'ai essayé de me concentrer sur le coté développement vu que j'ai beaucoup plus de mal. 
Enjoy!


[1]:  https://symfony.com/doc/3.4/setup.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.4/doctrine.html
[8]:  https://symfony.com/doc/3.4/templating.html
[9]:  https://symfony.com/doc/3.4/security.html
[10]: https://symfony.com/doc/3.4/email.html
[11]: https://symfony.com/doc/3.4/logging.html
[13]: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html
[14]: https://symfony.com/doc/current/setup/built_in_web_server.html
