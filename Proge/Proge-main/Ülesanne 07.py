# Arko Avarsalu
# 01.11.22
# Ülesanne 7
import math
def kuup(a):
    print(f"Kuubi ruumala on {a**3}")

def kera(r):
    print(f"Kera ruumala on {round(4/3*math.pi*r**3)}")

def koonus(k, h):
    print(f"Koonuse ruumala on {round(math.pi*k**2*h/3)}") 
def silinder(sr, sh):
    print(f"Silindri ruumala on {round(math.pi*sr**2*sh)}")


loop=1
while loop == 1:
        print("Leiame ruumala")
        kuju = int(input("1. Kuup \n2. Kera \n3. Koonus \n4. Silinder \n5. Välju \nTee valilk 1-5: "))
        if kuju == 1:
            kuup(a=int(input("Liisa kuubi üks külg: ")))
        elif kuju ==2:
            kera(r=int(input("Liisa kera raadius: ")))
        elif kuju ==3:
            koonus(k=int(input("Lisa koonuse raadius: ")), h=int(input("Lisa koonuse kõrgus: ")),)
        elif kuju ==4:
            silinder(sr=int(input("Lisa silindri raadius: ")), sh=int(input("Lisa silindri raadius: ")))           
        elif kuju ==5:
            loop = 0
        else:
            print("Sellist valikut ei ole")



def tere(a="tundmatu", keel="ge"):
    if keel=="et":
        print(f"Tere {a}")
    elif keel=="en":
        print(f"Hello, {a}")
    else:
        print(f"Guten tag, {a}")
tere("NIMI", "et")

"""