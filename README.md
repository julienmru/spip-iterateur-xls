# spip-iterateur-xls

Ce plugin permet d’utiliser des fichiers XLS, XLSX ou ODS dans des boucles DATA de SPIP, par exemple :

```
<BOUCLE_fichier_xls(DATA){source xls,monfichier.xls}>
<BOUCLE_fichier_xlsx(DATA){source xlsx,monfichier.xlsx}>
<BOUCLE_fichier_openoffice(DATA){source ods,monfichier.ods}>
```

La première ligne est considérée comme le titre des colonnes. Vous pouvez ensuite accéder aux données via #TITRE_DE_LA_COLONNE (si le titre est "Titre de la colonne") ou #COL_A (pour la colonne A).

## Librairies tierces utilisées

### [spreadsheet-reader](https://github.com/nuovo/spreadsheet-reader) de Martins Pilsetnieks

Copyright (C) 2012-2015 Martins Pilsetnieks

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

### [Spreadsheet_Excel_Reader](http://code.google.com/p/php-excel-reader/) de Matt Kruse

This source file is subject to version 3.0 of the PHP license that is available through the world-wide-web at the following URI: http://www.php.net/license/3_0.txt.  If you did not receive a copy of the PHP License and are unable to obtain it through the web, please send a note to license@php.net so we can mail you a copy immediately