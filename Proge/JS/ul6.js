let print = console.log

let muutuja = -0
switch (true) {
    case (muutuja > 0):
       print("positiivne");
       break;
    case (muutuja < 0):
       print("negatiivne");
       break;
    case (muutuja == 0):
       print("null");
       break;
    }

let inimarv = 7;
let laud;
switch (true) {
    case (inimarv < 3 ):
    laud = "Valige laud kahele inimesele.";
    break;
case (inimarv < 5):
    laud = "Valige laud neljale inimesele.";
   break;
case (inimarv < 7):
    laud = "Valige laud kuuele inimesele.";
   break;
case (inimarv > 6):
   laud = "Valige suur laud.";
   break;
   
}
print(laud)