# TD01 : PHP - Structures

## 1. Arrays

### Arrays simples

1. Créez un array : `$array = ['val1', 'val2'];` avec 5 éléments et débuguez-le.
2. Affichez le 3ème élément du tableau.
3. Quelle est une autre façon d'écrire un array ? Jusqu'à quelle version de PHP faut-il écrire les arrays avec l'ancienne manière ?

### Arrays associatifs

1. Créez un array associatif `$array = ['key1 => 'val1'];` et débuguez-le.
2. Affichez un élément du tableau associatif.

### Arrays multi-dimentionnels

1. Créez un array multi-dimentionnel et débuguez-le.
2. Affichez un élément du tableau multi-dimentionnel.

## 2. Conditions : if/elseif/else, switch et ternaires

Pour les exerices 1 et 2, vous afficherez le message grâce à l'instruction `echo`.

1. Créez une variable contenant l'âge du visiteur et affichez un message selon s'il a moins de 10 ans, moins 20 ans, 20 ans et plus grâce à la structure suivante. Vous devez afficher l'âge indiqué par le visiteur dans la réponse que vous afficherez.

```php
if (condition) {
    // action
}
elseif (condition) {
    // action
}
else {
    // action par défaut
}
```

2. Créez une variable contenant le nom d'un produit et affichez le tarif du produit avec une structure `switch` :

```php
switch (variable_à_tester) {
    case valeur1:
        // action
        break;
    case valeur2:
        // action
        break;
    default:
        // action par défaut
}
```

3. Pour les deux scripts précédents: affichez les données avec du HTML plutôt qu'avec echo, hormis pour les variables.

4. Créez une variable *âge* contenant l'âge du visiteur. Créez un booléen *majeur* contenant vrai ou faux selon l'âge du visiteur avec une condition ternaire : `$variable = (condition) ? valeur_si_vraie : valeur_si_fausse` 

## 3. Boucles

1. WHILE : Initialisez une variable à 0 et affichez quelque chose comme suit, sur 100 lignes.

```plaintext
Ceci est la ligne 1
Ceci est la ligne 2
Ceci est la ligne 3
...
```

grâce à la structure suivante :

```php
while ($i <= 100) {
    // action
}
```

2. FOR : Effectuez la même chose grâce à la structure suivante :

```php
for ($i = 1, $i <= 100, $i++) {
    // action
}
```

## 4. Boucles et arrays

1. Créez un tableau avec 10 éléments.

2. Affichez grâce à une boucle `for` les 5 premiers éléments du tableau en utilisant l'indice de la boucle comme indice du tableau.
3. Affichez tous les éléments du tableau grâce à la structure suivante:

```php
foreach ($array as $element) {
    // action sur $element
}
```

4. Affichez quelque chose comme :

```
L'élément 1 est ***
L'élément 2 est ***
L'élément 3 est ***
...
```

grâce à la structure suivante :

```php
foreach ($array as $key => $element) {
    // action sur $element et sur $key
}
```

## 5. Recherches dans les tableaux

Soit le tableau suivant :

```php
$legumes = [
    printemps  => ['asperge', 'blette', 'navet', 'radis'],
    ete        => ['comcombre', 'courgette', 'tomate', 'brocoli'],
    automne    => ['fenouil', 'haricot', 'oignon', 'poireau'],
    hiver      => ['potiron', 'topinampour', 'salsifi', 'betterave'],
];
```

1. Vérifiez si la saison "été" existe dans le tableau $legumes grâce à `array_key_exists('valeur', $array)`.
2. Vérifiez si "tomate" est présente dans les légumes d'été (`$legumes['ete']`) grâce à `in_array('valeur', $array)`.
3. Retrouvez l'indice de la position de "navet" dans les légumes de printemps gr$ace à array_search('valeur', $array)`.

## 6. Boucles dans des boucles !

1. Affichez la liste des saisons dans une liste `ul`.
2. Affichez la liste des légumes par saison dans des sous-listes.