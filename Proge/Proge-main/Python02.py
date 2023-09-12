# Arko Avarsalu
# 11.10.22
# Ülesanne 01

#8Kütusekulu arvutamine
L=int(input("Sisesta tangitud kütuse kogus:"))
S=int(input("Sisesta läbitud kaugus (km):"))

kulu=L/(S/100)

print(kulu)

#7Arvusüsteemid
arv= int(input("Sisesta täisarv kümnendsüsteemis:  "))
binar=bin(arv)
hexa=hex(arv)

print("Sisestatud arv binaaris:", binar, "ja 16nd süsteemis:",hexa)


#6Ajateisendus
aeg= int(input("Sisesta aeg minutites:"))
h=aeg//60
m=aeg%60
print("vastus on", h,":",m)


#5Hüpotenuus
import math
a=16
b=9
c=round(math.sqrt(pow(a,2)+pow(b,2)),2)
print(c)

#4Rulluisk
v=29.9
t=0.4	
s=(v*t)
print("Rulluisutaja jõuab", s, "kilomeetri kaugusele")

#3Pitsa
kogus=3
hind=12.90
joot=0.1

summa=round(((hind+(hind*joot))/kogus),2)
print("igaüks peab maksma", summa, "€")


#2Toote hind
hind=36.75
ale=0.4
kogus=3

summa=round((hind-(hind*ale))*kogus,2)
print(kogus, "toote hind on", summa, "€")


#1Ümbermööt
a, b, c= 30,30,30
p=a+b+c

print("Kolmnurga ümbermõõt on:", p)