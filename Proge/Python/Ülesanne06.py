#Arko Avarsalu
#27.10.22
#Ülesanne06

fail = open("s6pru_l6ustaraamatus.txt", "r")

ref = 0
kusikud = 0
erakonnad=[]

for i in fail.readlines():
    ee,pe,er,kyl = i.split(" ")
    if er == "RE":
        ref +=1
    elif er=="KE":
        kusikud +=1
    if er not in erakonnad:
        erakonnad.append(er)
    with open("polit.txt", "a") as politik:
        politik.write(ee+" "+pe+"\n")



print(f"reformikaid kokku {ref}")
print(f"kusikuid kokku {kusikud}")
print(f"erakondi kokku {len(erakonnad)}")





fail.close()