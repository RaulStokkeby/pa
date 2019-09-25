#Programmeerimise alused
Antud kursus annab ülevaate programmeerimise aluste baasteadmistest PHP keele baasil
## Ajakava
### 20.09.2019
* Tarkvara installeerimine
    * [PhpStorm](https://www.jetbrains.com/phpstorm/)
    * [git](git-scm.com/download/)
* Tarkvara seadmistamine
    * Valmistasime litsentsi
    * PhpStorm põhiseadistus
    * git.exe ühendust PhpStormiga
    * github.com repo loomine ja ühendamine PhpStormiga
### 25.09.2019
* Git kasutamine käsureal

Kui repo ei ole initsialiseeritud, siis tuleb see ära teha

```
git init
```
Nüüd lisa muudatud fail jälgimissüsteemi (git)

```
git add (failinimi)
```

Koosta kirjeldus antud muudatustele

```
git comit -m "Kirjelduse sõne"
```

Lükka lokaalsest repost kirjeldus kaugreposse (näiteks github.com)
```
git push -uf origin master
```

Siin origin on ühenduse nimi ja master on peaharu

