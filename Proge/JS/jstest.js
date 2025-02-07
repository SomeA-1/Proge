// Ãœlesanne 3: Arvutuste tegemine massiiviga
// Kirjuta kalkulaatoriprogramm, mis:
//     Deklareerib kaks muutujat, a = 10 ja b = 5 (arvud).
//     Loob massiivi tulemused, mis sisaldab nende kahe arvu summa, vahe, korrutise ja jagatise.
//     Teisendab iga massiivi elemendi stringiks, lisades selle ette selgitava teksti (nÃ¤iteks "Summa: 15") ja salvestab tulemused uude massiivi kirjeldused.
//     Kuvab kÃµik arvutuste tulemused massiivist kirjeldused Ã¼kshaaval konsoolis.

    let a = 10;
    let b = 5;
    let tulemused = [a + b, a - b, a * b, a / b];
    let kirjeldused = [
        `Summa: ${tulemused[0]}`,
        `Vahe: ${tulemused[1]}`,
        `Korrutis: ${tulemused[2]}`,
        `Jagatis: ${tulemused[3]}`
    ];
    
    kirjeldused.forEach(kirjeldus => console.log(kirjeldus));


// Ãœlesanne 7: Kasutaja tervitus
// Kirjuta programm, mis:
    
//     Loob objekti nimega kasutaja, millel on omadused nimi (string) ja vanus (number).
//     Loob funktsiooni tervitaKasutajat, mis vÃµtab argumendiks kasutaja objekti ja tagastab sÃµnumi kujul: "Tere, [nimi]! Sa oled [vanus] aastat vana."
//     Kasutab funktsiooni ja kuvab sÃµnumi konsoolis.

let kasutaja = {
    nimi: "Mati",
    vanus: 30
};

function tervitaKasutajat(kasutaja) {
    return `Tere, ${kasutaja.nimi}! Sa oled ${kasutaja.vanus} aastat vana.`;
}

console.log(tervitaKasutajat(kasutaja));