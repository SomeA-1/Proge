#Arko Avarsalu
#11.10.22
#Harjutus04


#rutkub
for i in range (0,10):
    print(f"{i};{i**2};{i**3}")

#Pank
intress=0.05
raha= int(input("kui palju raha te soovite panka panna?:"))
kaua= int(input("Mitmeks aastaks?:"))

for i in range(kaua):
    
#    print("Aasta;Algsumma;Intress;Aasta Lõpuks")
    print(f"{i}; {raha}; {intress}; {raha*intress}")
    profit=raha*intress
    raha=raha+profit

#ARVA
import random
loop = 1
while loop==1:
    arv=random.randint(1,3)
    for i in range(3):
        guess = int(input("Arva arv 1-3:"))
        if guess==arv:
            print("WAHOOOOOOOOOOOOOOOOOOO")
            break
        else:
            print("Paku uuesti")
    loop = int(input("Jätka? 0/1:"))
print("gameover")
        

#VIIIED
for i in range(1,101):
    if i%5!=0:
        print(i)

#Korrutustabel
arv=5
for i in range(10):
    print(f"{arv}*{i}={arv*i}")

#Paaris, paaritu
for i in range (0,999999999999999):
    if i%2==0:
        print(f"{i} on paarisarv")
    else:
        print(f"{i} on paaritu")

#Lotta bitches
import random
for i in range(5):
    print(random.randint(0,9),end=" ")

#Tagurpidi kolmnurk
j=10
for i in range(10): 
    print("* " *j)
    j-=1

#Kolmnurk
j=1
for i in range(1054):
    print("* " * j)
    j+=1
    
#5x5 grid
for i in range(5):
    print("* " * 5)

#FutBol
sugu = input("Sisestage oma sugu (m/n):")
if sugu == "mees":
    print("Palju õnne, sa oled mees")
    vanus = int(input("Sisestage oma vanus:"))
    lubatud  = 16,17,18
    if vanus in lubatud:
        print("YAY")
    
    else:
        print("EI MINE ÄRA")
    
else:
    print("Tunnen kaasa, olete naine")
    
    


#MÜÜK

hind = int(input("Sisestage toote hind:"))me
if hind >= 11:
   # print("Saate 20% allahindluse")
    discount = 0.2
else:
   # print("Saate 10% allahindluse")
   discount = 0.1

print(f"Toote lõpphind on {hind-hind*discount}€")


#JUUBEL
sp = "5.6.2017"
d,m,y = sp.split(".")
vanus=2022-int(y)
#print(vanus)

if vanus%5 == 0:
    print("JAH")
else:
    print("Ei")


#RUUT
a = input("Sisestage ruudu üks külg:")
b = input("Sisestage ruudu teine külg:")

if a == b:
    print(f"{a} ja {b} teevad kokku ruudu")
else:
    print(f"{a} ja {b} ei tee kokku ruudu")
    
#MATA
arv1 = input("Sisesta arv:")
arv2 = input("Sisesta arv:")
mark =  input("Sisesta tehtemärk ( + - * / )")
if mark =="+":
    vastus=arv1+arv2
elif mark=="-":
    vastus=arv1-arv2
elif mark=="*":
    vastus=arv1*arv2
elif mark=="/":
    vastus=arv1/arv2
else: vastus = "N/A"

print(f"{arv1}{mark}{arv2} = {vastus}")

"""