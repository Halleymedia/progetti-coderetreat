# Game of Life: Unit testing con .NET Core 3.0 / C#
Questo progetto usa .NET Core 3.0 come ambiente di lavoro e [XUnit](https://xunit.net/) come test runner. Prima di iniziare, segui questi passi:
  * [Installa .NET Core SDK v3.0](https://dotnet.microsoft.com/download/dotnet-core/3.0);
  * Apri la directory del presente progetto con [Visual Studio Code](https://code.visualstudio.com/) e installa le estensioni [C#](https://marketplace.visualstudio.com/items?itemName=ms-vscode.csharp) e [.NET Core Test Explorer](https://marketplace.visualstudio.com/items?itemName=formulahendry.dotnet-test-explorer). A quel punto i test saranno eseguibili dal pannello _Test_ di Visual Studio Code;
    * In alternativa puoi eseguire i test da riga di comando lanciando `dotnet test`.
  * Inizia a scrivere i test nel file [Tests/CellaTest.cs](Tests/CellaTest.cs) ma puoi creare altri file di codice se preferisci;
  * Puoi scrivere l'implementazione nel file [Models/Cella.cs](Models/Cella.cs) o in qualsiasi altro file di codice che preferisci.
