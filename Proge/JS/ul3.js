let print = console.log

// Ülesanded sisaldavad vajalikke kommentaare
// Sõidu aeg ja kaugus
// Õpilane tahab teada, kui kaua võtab aega teatud kauguse läbimine kindla kiirusega. Kasuta muutujaid sõidu kauguse (kilomeetrites) ja kiiruse (kilomeetrites tunnis) hoidmiseks. Arvuta ja kuva konsooli sõidu aeg (tundides).
let speed = 20; //kmh
let distance = 100 //km

let time = distance/speed;
print(time+" tundi")

// Postituste kuvamine
// Andmebaasis on 137 postitust ning soovime neid kuvada veebilehel. Iga lehekülg kuvab maksimaalselt 10 postitust. Sinu ülesanne on arvutada, mitu lehekülge on vaja postituste kuvamiseks ning mitu postitust on viimasel lehel.
postcount = 137;
perpage = 10

print("Lenekülgi on "+ Math.round(postcount/perpage))
print(postcount%perpage+" postitust viimasel")


let voimsus = 400 // W
let elektrihind = 9.69 // s/kwh

let tarbimine = voimsus/1000

let kulu = tarbimine*elektrihind

print("400w serveri jooksutamine tunniks võtab " +kulu+"€")

// Serveri töökulu
// Sinu ülesanne on arvutada, kui palju maksab serveri töös hoidmine ühe tunni jooksul, kasutades järgmisi andmeid:
// Serveri võimsus: 400 vatti (W)
// Elektri hind: 9.69 senti/kWh
// Sinu ülesanne on arvutada serveri töökulu ühe tunni jooksul eurodes. Selleks peate järgima järgmisi samme:
// Arvuta serveri voolutarbimine kilovatt-tundides (kWh) kasutades järgmist valem:
// Voolutarbimine (kWh) = Võimsus (W) / 1000
// Arvuta töökulu, korrutades serveri voolutarbimise elektri hinnaga:
// Töökulu (eurodes) = Voolutarbimine (kWh) * Elektri hind (eurod/kWh)
// Oma vastuses anna teada, kui palju maksab serveri töös hoidmine ühe tunni jooksul eurodes.