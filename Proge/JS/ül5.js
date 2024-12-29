let print = console.log


temperature = 15;
if (temperature > 25) {
    print("IT'S HOT")
} else if (temperature < 15) {
    print("IT HECCIN COLDE")
} else {
print("Eh it's alright i guess")
}

// KASUTAJTA
let kasutaja = "user"
print((kasutaja == "admin") ? "tere admin" : "tere kylaline")

// pilet
let pilet = "tais"
let vanus = 13


if (vanus <= 18) {
    if (pilet == "tais") {
        print("hind on 10€")
    }
    if (pilet == "soodus") {
        print("hinfd 8€")
    }
}

else if (vanus >= 18) {
    if (vanus < 64) {
        if (pilet == "tais"){
            print("hind 20€")
        }
        if (pilet == "soodus") {
            print("hind on 15€")
        }
    }
    if (vanus >= 64) {
        if (pilet == "tais") {
            print("hind 15€")
        }
        if (pilet == "soodus") {
            print("hind 8€")
        }
    }
}