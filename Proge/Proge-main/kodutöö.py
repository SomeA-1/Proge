# Arko Avarsalu
# 9/11
# 15.11 kodutöö



#See rida aktiveerib try statementi, mis aitab vigadega
try:
#See rida prindib teksti "PROGRAMMI PEALKIRI"
    print("PROGRAMMI PEALKIRI")
#See rida küsib kasutajalt arvu
    arv = int(input("Sisestage arv: "))

###Need read kontrollivad kas kasutaja sisestas midagi, kui ei, siis programm nutab
#if arv == "":
    #exec Cry

    #See rida kontrollib kas arv on võrdne 0'iga
    if arv==0:
        #See rida prindib "0 ei ole paaris ega paaritu arv"
        print("0 ei ole paaris ega paaritu")
    #See rida käivitub kui arv on midagi peale 0'i, ning kontrollib kas selle jääk on 0 kui seda jagatakse kahega
    elif arv%2 == 0:
        #See rida prindib "Arv on paaris"
        print("Arv on paaris")
    #See rida jätkab programmi kui jääk pole 0
    else:
        #See rida prindib arv on paaritu, kuna jääk pole 0
        print("Arv on paaritu")
#See rida püüab ValueError vigasi
except ValueError:
    #See rida solvab teid kuna te ei oska numbreid sisestada
    print("Kas te olete loll? Sisestage arv!!!!!")
