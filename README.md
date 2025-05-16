# Installation de PHPstan

## Tests d'analyse

### Dossier public
vendor/bin/phpstan analyse public (default level=0)
Résultat: 4 erreurs

vendor/bin/phpstan analyse -l 5 public 
Résultat: 10 erreurs

vendor/bin/phpstan analyse -l max public (max: level=11)
Résultat: 11 erreurs

### Dossier app
vendor/bin/phpstan analyse app (default level=0)
Résultat: 2 erreurs

vendor/bin/phpstan analyse -l 5 app
Résultat: 3 erreurs

vendor/bin/phpstan analyse -l max app (max: level=11)
Résultat: 24 erreurs (!)

## Correction des erreurs par pallier de niveau d'analyse

### Dossier app
level=0 - 2 erreurs
Des arguments manquants.

level=1 - 1 erreur
id not found.

level=2 et 3 - 0 erreurs

level=4 - 1 erreur
Property BaseController::$view is unused.



### Dossier public





