#### Stap 3: Gegevens ophalen via functions = Model
- Maak een bestand *model.php*.
- Zorg dat dit bestand via een require wordt ingeladen *bovenaan* in de twee PHP bestanden.
- Zet hierin twee functions *get_latest_plants()* en *get_all_plants()*.
- Kopieer de juiste code uit de twee PHP bestanden naar de juiste functions.
- Zorg dat de functions met een *return* een array met *plantjes* uit de database teruggeven.
- Roep nu de juiste functions aan bovenin de PHP bestanden en wijs de teruggegeven array uit de functions toe aan een variabele (bijv. $plantjes).
- Maak de foreach loop weer werkend.
- **Test of alles weer werkt**.

Goed bezig! Door naar [stap 4](Stap4.md)

---
#### Hulplijn
In `model.php` staan dus twee functies

```php
function get_latest_plants() {
   
   // Hier zet je de juiste code
   
   return $plantjes;

}

function get_all_plants() {
   
   // Hier zet je de juiste code
 
   return $plantjes;
   
}
```

en in de twee PHP/HTML bestanden roep je ze aan:

```php
$plantjes = get_latest_plants();
```