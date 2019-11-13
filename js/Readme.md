# Game of Life: Unit testing con JavaScript
Questo progetto usa NodeJS come ambiente di lavoro e [Jasmine](https://jasmine.github.io/) come test runner. Prima di iniziare, seguire questi passi:
  * [Installa Node.js](https://nodejs.org/it/) (consigliata versione 12 o successiva);
  * Apri il prompt dei comandi, vai nel directory di questo progetto ed esegui il comando `npm install`;
  * Inizia a scrivere i test nel file [src/cella.spec.js](src/cella.spec.js). Potrai anche crearne altri, se vuoi, ma sempre con estensione `.spec.js`;
  * Puoi creare uno o più file su cui scrivere l'implementazione, ad esempio vedi [src/cella.js](src/cella.js);
  * Per lanciare i test, segui una di queste due alternative:
     * Lancia `npm test` da riga di comando;
     * Oppure apri la directory del presente progetto con [Visual Studio Code](https://code.visualstudio.com/) e installa l'estensione [Jasmine Test Explorer](https://marketplace.visualstudio.com/items?itemName=hbenl.vscode-jasmine-test-adapter). A quel punto i test saranno eseguibili dal pannello _Test_ di Visual Studio Code;
  * Opzionalmente puoi installare l'[estensione ESLint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint) per avere suggerimenti durante la digitazione del codice.