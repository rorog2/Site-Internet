import composants
import os

print("\nBienvenu dans le créateur rapide de fichier PHP lisant une base de données")

print("\nQue voulez vous comme page ?")


mon_fichier = open("essai.php", "w")
mon_fichier.write(composants.composant)
mon_fichier.close()

os.system("pause")
