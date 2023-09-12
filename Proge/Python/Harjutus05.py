#Arko Avarsalu
#11.10.22
#Harjutus05


#T*rnid
import random
vanused = [random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99)]
print(vanused)


for vanus in vanused:
    print(f"{vanus*'*'}")


#ÄGE
import random
import statistics
vanused = [random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99), random.randint(1,99)]

print(vanused)
print(max(vanused))
print(min(vanused))
print(sum(vanused))
print(statistics.mean(vanused))


#Duplikaadid

opilased = ["Mario", "Mario", "Mario", "Mets", "Mets", "Mets", "Hein", "Hein"]
myopilased=set(opilased)
print(myopilased)


#Õpilased

opilased = ["Mario", "Mets", "Hein"]
jrk=0

for opilane in opilased:
    print(f"{jrk}. {opilane}")
    jrk+=1


chng = int(input(f"Mitmendat tahad muuta: "))
opilased.pop(chng)
midagi = input("Milleks tahad muuta: ")
opilased.insert(chng, midagi)

jrk=0
for opilane in opilased:
    print(f"{jrk}. {opilane}")
    jrk+=1

#Nimede lisamine loendisse

nimed=[]
for i in range(5):
    nimi = input("Sisestage nimi:")
    nimed.append(nimi)
nimed.sort()
print(nimed[0:4])
print(nimed[-1])
