# Arko Avarsalu
# Iseseisev 4



#4.6 Kuupäev
def kuu_nimi(o):
    kuud = ["", "jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"]
    return kuud[o]


def kuupaev(p,k,a):
    print(f"{p}. {k}. {a}. a")
idk = input("Sisestage kuupäev (formaadis DD.MM.YYYY): ")
p,k,a = idk.split(".")
kuupaev(p,kuu_nimi(int(k)),a)







#4.5 Munnid
pronksid=[1, 2, 5]
summa = []

input = input("Mis on tekstifaili nimi? (koos .txt): ")
nk = open(str(input))
for i in nk:
    summa.append(int(i.replace("\n","" )))
    #print(summa)

def mündid(nk):
    for i in summa:
        if i >= 6:
            summa.remove(i)
            print(f"{i} removed")
        else:
            print(f"{i} stays")
    print(summa)
    print(f"Hoiupõrsasse läheb {sum(summa)} senti")
    
mündid(nk)

#4.4 Tervitused
jrk=1
def tervitus(jrk):
    print('Võõrustaja: "Tere!"')
    print(f"Täna {jrk}. kord tervitada, mõtiskleb võõrustaja.")
    print('Külaline: "Tere, suur tänu kutse eest!"')
    print("\n")
mitu = int(input("Mitu külalist on: "))

for i in range (mitu):
    tervitus(jrk)
    jrk+=1


#4.3 Eelarve
def eelarve(kuts,inim):
    minim = inim*10+55
    maksim = kuts*10+55
    print(f"Maksimaalne eelarve on {maksim}€")
    print(f"Minimaalne eelarve on {minim}€")



kuts=int(input("Mitu inimest on kutsutud: "))
inim=int(input("Mitu inimest tuleb: "))

eelarve(kuts, inim)





#4.2 Abel tsjus
def mpa(ok):
    mpka = int(ok)*0.4/3
    print(round(mpka))

mpa(input("Õunte kogus KG: "))

#4.1 Paneer
def banner(lause):
    print(lause.upper())

mitu=int(input("Mitu korda soovite kuvada: "))
lause= input("Sisestage lause: ")


for i in range(mitu):
    banner(lause)
"""