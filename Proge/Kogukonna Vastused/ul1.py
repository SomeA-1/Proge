esimene = int(input("Sisesta esimene arv: "))              #küsib kasutajalt esimese arvu
teine = int(input("Sisesta teine arv: "))                       #küsib kasutajalt teise arvu
vastus = int(esimene*teine)                                        #arvutab vastuse
if vastus < 30:                                                             #kui vastus on väiksem kui 30
    print(str(esimene)+"*"+str(teine)+"="+str(vastus)) #väljastab vastuse
else:                                                                            #kui vastus on suurem kui 30
    print("Ma ei oska nii suuri numbreid kahjuks")        #siis väljastab selle lause
    



