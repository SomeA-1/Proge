



total = 0
kogus = int(input("Mitu toodet on kokku?: "))
for i in range(kogus):                         #Kordab "kogus" korda
    print("Toode nr. " + str(i+1))
    hind = int(input("Sisesta hind: "))
    if hind >= 10:                                  #Kui hind on suurem või võrdne 10-ga, siis 10% allahindlus
        total += hind-hind*0.1
    elif hind < 10:                                 #Kui hind on väiksem kui 10, siis 5% allahindlus
        total += hind-hind*0.05
print("Tooteid on kokku "+str(kogus)+" ja nende hind kokku on "+str(total)+" eurot.")



    