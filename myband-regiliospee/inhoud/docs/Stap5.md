#### Stap 5: Het Model en de View aanroepen in de Controller (MVC!)
- Maak een bestand *controllers.php*.
- Zet hierin twee functions *homepage()* en *alle_plantjes()*.
- **Verplaats** nu de code die de database verbinding maakt uit de twee pagina's met HTML de naar deze twee functions.
- **Verplaats** nu de code waar je de gegevens ophaalt in de twee pagina's met HTML naar deze twee functions.
- In de function *homepage()* de code die *get_latest_plants()* aanroept.
- In de function *alle_plantjes()* de code die *get_all_plants()* aanroept.
- Zet na deze code een *include* die het juiste PHP bestand (met de HTML) in te laden IN de twee functions. 

Bijna klaar, alleen [stap 6](Stap6.md) nog!

---
#### Hulplijn
In `controllers.php` staat iets als:

```php
function homepage(){
  $pdo = dbConnect();
  $plantjes = /* welke function uit het model roep je hier aan? */
  // Hier komt de include van je PHP/HTML bestand
}

function alle_plantjes(){
  $pdo = dbConnect();
  $plantjes = /* welke function uit het model roep je hier aan? */ 
  // Hier komt de include van je PHP/HTML bestand
}
```