# TD00 : PHP - Setup

## 1. Qu'est-ce que PHP ? Mise en place de l'environnement de travail

1. Installez WAMP (Windows) ou MAMP (Mac) selon votre système.
2. Qu'installe WAMP/MAMP ? Peut-on travailler et avoir un système avec PHP sans passer par WAMP ?
3. Quelle est la différence entre Apache et Nginx ?

## 2. Premiers scripts PHP

1. Créer une page basique avec Bootstrap 4.
2. Créez des variables avec PHP que vous afficherez dans votre page HTML grace à l'instruction `echo` et accéder à votre page avec le serveur Apache.
3. Concaténez variables et texte afin d'afficher quelque chose du type : `Bonjour, bienvenue sur le site perso de var_PRENOM var_NOM, intitulé var_NOM_SITE_PERSO !`
4. Affichez, en échappant les caractères spéciaux nécessaires, `Ceci est un "escalathor", il permet à Thor d'escalader "l'immense" montagne.`

## 3. Débuguer les scripts

1. Afficher la date grâce à la fonction `date()`. Vous trouverez dans la documentation php.net comment afficher la date sous la forme "Monday 06 January 2019, 09:23:45".
2. Créez des variables avec les types suivants: *string*, *int*, *float*, *boolean*, *null*.
3. Débuguez les avec `var_dump()`.
4. Quelle est la différence entre `var_dump()` et `print_r()` ?

## 4. Configurer PHP

1. Affichez la configuration de PHP grâce à la fonction `phpinfo()` dans une page dédiée.
2. Localisez où se trouve le fichier php.ini
3. Vérifiez et adaptez le cas échéant si les erreurs peuvent s'afficher en ayant les lignes suivantes : `error_reporting = E_ALL` et `display_errors = On`.
4. Faites des erreurs pour tester l'affichage des erreurs ;)
5. Qu'est-ce qu'une *Parse error* ? Qu'est-ce qu'une *erreur 500* ?

## 5. Includes

1. Dans votre projet Bootstrap 4, séparez le code de votre visuel. Créez un fichier PHP séparé que vous incluerez dans votre index.php grâce à `include()`.
2. Quelles sont les différences entre `include()`, `include_once()`, `require()`, `require_once()` ?