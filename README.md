# Indications :
--------------

## Box Sizing

Mettre tous tes éléments en __box-sizing : border-box__.
Pourquoi ? Par ce qu'en __content-box__, qui est le mode par défaut, le padding et le border ne sont pas 
compris dans les tailles de tes éléments. Exemple : __width: 100%__ avec un __border : 1px solid;__, ton
élément fera __100% + 2 px__ de large. Alors qu'en __border-box__, la taille de la bordure serait intégrée
au calcul de la taille totale de l'élément.


## Calc

Si tu en veux pas ou ne peux pas utiliser le __box-sizing__, tu peux utiliser la méthode CSS __calc__ qui te permet 
d'allier px et % dans un calcul de taille, exemple : __width: calc(100% - 2px)__.
