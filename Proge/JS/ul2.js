let print = console.log

//1
let h = '20';
let m = '34';
let s = '14';
let time = h+':'+m+':'+s;
print("Kell on " + time);
//2
let quote = "'Ma olen su suhkruissi' - Tume Vaader vm";
print(quote)
//3
let nimi = "John";
let pnimi = "Jhonsson"
let tervitus = `Tere, ${nimi} ${pnimi}, initsiaalid ${nimi[0]}.${pnimi[0]}`
print(tervitus);
//4
let split = "6"
let fname = "Jhon, Jhonsson"
let jhon = fname.slice(split).toUpperCase()
print(jhon)
print(jhon.length)
//5
let epost = "karrolk@netlog.com";
print(epost.replaceAll("netlog", "gmail"));
let data = "1,Marshal,Martinovic,mmartinovic0@dedecms.com,Male,40.19.226.175"
//6
print(data.split(",")[5])
print((data.split(",")[3]).split("@")[0])
