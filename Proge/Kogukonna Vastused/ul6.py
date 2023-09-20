

import datetime                                                    #Importib datetime mooduli
aeg = datetime.datetime.now()                              #Defineerib aja tänaseks kuupäevaks
ik = input("Sisesta isikukood: ")
if ik[0] == "1" or ik[0] == "3" or ik[0] == "5":         #Kui esimene number on 1, 3 või 5, siis on mees
    sugu = "mees"
elif ik[0] == "2" or ik[0] == "4" or ik[0] == "6":      #Kui esimene number on 2, 4 või 6, siis on naine
    sugu = "naine"
kuupaev = datetime.date(int("20"+ik[1:3]),int(ik[3:5]),int(ik[5:7]))   #Defineerib sünnikuupäeva
#kuupaev = ("20"+ik[1:3],ik[3:5],ik[5:7])   ##Lihtsam aga halvem lahendus
vanus = aeg.year - kuupaev.year - ((aeg.month, aeg.day)<(kuupaev.month, kuupaev.day))   #Defineerib vanuse
print("Inimene isikukoodiga: "+ik+" on "+str(vanus)+" aastat vana "+sugu+", kelle sünnikuupäev on "+str(kuupaev)+".")




