# Arko Avarsalu
# Iseseisev töö 2


#2.5 Õunad
import random
lits=[]
mitu = int(input("Mitu põialpoissi tahab õunu?: "))
for i in range(mitu):
    oun = (random.randint(1,2))
    print(oun)
    lits.append(oun)
print(f"Lumevalgukesele jääb {14-sum(lits)}")


#2.4 Male
mitu = int(input("Mitu ruutu?: "))
nisu = 1
for i in range(mitu-1):
    nisu = nisu
    nisu = nisu * 2
print(f"{mitu} ruudu eest {nisu} nisutera")

#2.3 Täring
import random
mitu = int(input("Mitu täringut soovite veeretada?: "))
for i in range(mitu):
    print(random.randint(1, 6))


#2.2 Lapselikud murevanemad
ringid = int(input("Mitu ringi?: "))
ring = 0
porgand = 0
while ring<ringid:
        ring+=1
        if ring%2==0:
            porgand+=ring
print(f"Porgandite arv: {porgand}")



#2.1 Äratus
mitu =  int(input("Mitu korda korrata?: "))
for i in range(mitu):
    print("WAKE THE [¤¤¤¤] UP")
