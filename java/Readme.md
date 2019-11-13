# Game of Life: Unit testing con Java
Questo progetto usa Java 1.7 con Maven come ambiente di lavoro e [JUnit](https://xunit.net/) come test runner. Prima di iniziare, segui questi passi:
  * [Installa JDK 7+](https://www.oracle.com/technetwork/java/javase/downloads/index.html) e [Maven](https://maven.apache.org/download.cgi);
  * Apri la directory del presente progetto con [Visual Studio Code](https://code.visualstudio.com/) e installa le estensioni [Java Extension Pack](https://marketplace.visualstudio.com/items?itemName=vscjava.vscode-java-pack) e [Java Test Runner](https://marketplace.visualstudio.com/items?itemName=vscjava.vscode-java-test). A quel punto i test saranno eseguibili dal pannello _Test_ di Visual Studio Code;
    * In alternativa puoi eseguire i test da riga di comando lanciando `mvn test`.
  * Inizia a scrivere i test nel file [src/test/java/gameoflife/CellaTest.java](src/test/java/gameoflife/CellaTest.java) ma puoi creare altri file di codice se preferisci;
  * Puoi scrivere l'implementazione nel file [src/main/java/gameoflife/Cella.java](src/main/java/gameoflife/Cella.java) o in qualsiasi altro file di codice che preferisci.