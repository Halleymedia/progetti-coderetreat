# Game of Life: Unit testing con PHP
Questo progetto richiede PHP 7.2 o PHP 7.3 come ambiente di lavoro e usa [PHPUnit 8](https://phpunit.de/getting-started/phpunit-8.html) come test runner. Prima di iniziare, segui questi passi:
  * Installa [PHP 7.2 o 7.3](https://www.php.net/downloads.php) e [Composer](https://getcomposer.org/download/);
  * Apri il prompt dei comandi, vai nella directory del presente progetto e digita il comando `composer install`;
  * Apri la directory con [Visual Studio Code](https://code.visualstudio.com/) e installa l'estensione [PHPUnit Test Explorer](https://marketplace.visualstudio.com/items?itemName=recca0120.vscode-phpunit). A quel punto i test saranno eseguibili dal pannello _Test_ di Visual Studio Code;
    * In alternativa puoi eseguire i test da riga di comando lanciando `./vendor/bin/phpunit src`.
    * Opzionalmente puoi installare anche l'estensione [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) per avere suggerimenti durante la digitazione del codice;
  * Inizia a scrivere i test nel file [CellaTest.php](CellaTest.php) ma puoi anche creare altri file che preferisci, purché il loro nome abbia il suffisso `Test.php`;
  * Scrivi l'implementazione nel file [Cella.php](Cella.php) o altro file di codice che preferisci creare.