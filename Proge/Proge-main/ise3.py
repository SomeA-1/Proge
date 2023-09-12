# Arko Avarsalu
# 10/11
# Iseseisev 3




#3.5 dahwelle
import datetime

x=datetime.datetime.now()
lits=[]

fail=open("nimekiri.txt")

for i in fail:
    print(i, end="")
    lits.append(i)

print("\n")
print(x.month,".", x.day)
print(lits[x.day])



#3.4 djuugbogs
lisst=[]
valik=input("Sisestage failinimi(.txt): ")
fail=open(f"{valik}",)
print("Laulude valik:")

for i in fail:
    print(i, end="")
    lisst.append(i)

print("\n")
laul=int(input("Mis laulu soovite: "))
print(f"Now playing: {lisst[laul-1]}")


#3.3 Sisse tulemine
konto=[]
pos=[]
neg=[]
fail = open("konto.txt")
for i in fail:
    o = float(i.rstrip("\n"))
    konto.append(o)
    #print(konto)
for i in konto:
    if i > 0:
        pos.append(i)
    else:
        neg.append(i)
for i in pos:
    print(i)


#3.2 Jänesed orsm

porgand = 0
mitu = int(input("Sisestage ringide arv: "))
for i in range(mitu):
    i+=1
    #print(i)
    if i%2==0:
        porgand += i
    else:
        porgand += 0
print(f"Porgandite arv {mitu} ringiga: {porgand}")


#3.1 Ülikool

fail = open("rebased.txt")
vastuv = []
for i in fail:
    vastuv.append(int(i))
#print (vastuv)
aasta = int(input("Millise aasta andmeid soovite vaadelda?: "))
if aasta < 2011:
    print("Sisestage aasta vahemikus 2011-2019")
elif aasta > 2019:
    print("Sisestage aasta vahemikus 2011-2019")
else:
    print(f"{aasta}. aastal oli {vastuv[aasta-2011]} vastuvõetut")