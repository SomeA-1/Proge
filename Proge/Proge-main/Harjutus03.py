#Arko Avarsalu
#11.10.22
#Harjutus03

def isPalindrome(s):
    return s == s[::-1]

s = input("Sisestage palindroom:")
ans = isPalindrome(s)
 
if ans:
    print("Jah")
else:
    print("Ei")




algus = (input("Sisestage tundide alguse aeg:"))
lõpp = (input("Sisestage tundide lõpu aeg:"))

h1,m1 = algus.split(":")
minut1 = int(h1)*60+int(m1)
h2,m2 = lõpp.split(":")
minut2 = int(h2)*60+int(m2)
ajavahe = minut2-minut1

hh = ajavahe//60
mm = ajavahe%60
print(f"Ajavahe on {hh}:{mm}")

#Siit allapoole töötavad asjad
#Email
email=input("Sisestage oma email:")
print('@' in email)
#Nimi
nimi= input("Sisestage oma nimi:")
print("Tere,", nimi.capitalize().replace('Kurat', '*****').strip()+"!")


