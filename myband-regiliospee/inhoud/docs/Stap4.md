#### Stap 4: De weergave ontdoen van dubbele code = View
- Maak twee bestanden *header.php* en *footer.php*.
- Kopieer alle HTML code die BOVENIN HETZELFDE IS in beide PHP bestanden (homepage.php en alle_plantjes.php) naar *header.php*.
- Kopieer alle HTML code die ONDERIN HETZELFDE IS in beide PHP bestanden (homepage.php en alle_plantjes.php) naar *footer.php*.
- Verwijder nu deze stukken HTML boven en onderaan uit **homepage.php** en **alle_plantjes.php**.
- Gebruik **include** om de header.php en footer.php in beide bestanden op dezelfde plek in te laden.
- **Test of alles weer werkt**.

Hopsa. Door naar [stap 5](Stap5.md)

---
#### Hulplijn

```php
include 'header.php';

// de andere HTML en PHP die er al stond

include 'footer.php';
```