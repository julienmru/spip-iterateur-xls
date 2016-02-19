# spip-iterateur-xls

Ce plugin permet d’utiliser des fichiers XLS, XLSX ou ODS dans des boucles DATA de SPIP, par exemple :

```
<BOUCLE_test(DATA){source xls,monfichier.xls}>
<BOUCLE_test(DATA){source xlsx,monfichier.xlsx}>
<BOUCLE_test(DATA){source ods,monfichier.ods}>
```

Ce plugin utilise les flux RSS de [spreadsheet-reader par nuovo](https://github.com/nuovo/spreadsheet-reader).