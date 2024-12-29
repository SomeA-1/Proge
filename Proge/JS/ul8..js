let print = console.log

let coin = [200, 0.2, 10, 0.01, 2, 1, 0.1, 0.02, 0.05, 100, 5, 0.5, 50, 20]

let count = 0
let oiged = [1, 2, 5, 10, 20, 50, 100, 200]

let coin2 = []

while (count != coin.length) {
    if (oiged.includes(coin[count])){
        coin2.push(coin[count])
    }
    count++
}

let cointotal = 0
for (let i = 0; i < coin2.length; i++) {
    cointotal = cointotal + coin2[i]
}

print(coin2)
print(coin2.length)
print(cointotal)