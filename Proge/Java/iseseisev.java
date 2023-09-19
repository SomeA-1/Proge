//Arko Avarsalu
// 1, 9, 13, 23, 26
import java.util.Random;
import java.util.Scanner;
public class iseseisev {
        private static Scanner scanner = new Scanner(System.in);

    public static void main(String[] args) {
        System.out.print("(1) Liida kaks arvu\n(2) Väljasta numbrid 1-67\n(3) Kolmnurk\n(4) Täringumäng\n(5) Vaiba hind\nVali ülesanne:");
        int valik = scanner.nextInt();
        //switch case et valida ülesanne
        switch(valik){
        case 1: esimene(); break;
        case 2: uheksas(); break;
        case 3: kolmteist(); break;
        case 4: kakskymmendkolm(); break;
        case 5: kakskymmendkuus(); break;
        default: System.out.println("Sellist ülesannet ei ole");
        }
    }
    //1  lihtne liitmine
    public static void esimene(){
        System.out.print("Sisesta number: ");
            int input1 = scanner.nextInt();
        System.out.print("Sisesta teine number: ");
            int input2 = scanner.nextInt();
        int vastus = input1 + input2;
        System.out.println(input1+"+"+input2+"="+vastus);        
    }
    //2 1-67
    public static void uheksas(){
        for(int i = 1; i <= 67; i++){
            System.out.print(i);
        }
    }
    //3 kolmnurk*****************************************
    public static void kolmteist(){
        System.out.print("Kui suur kolmnurga alus on?: ");
        int alus = scanner.nextInt();
        for(int i = 1; i <= alus; i++){
            for(int j = 0; j < i; j++){
                System.out.print("*");
            }
            System.out.println("\n");
        }
        for(int L = alus-1; L >= 1; L--){
            for(int j = 0; j < L; j++){
                System.out.print("*");
            }
            System.out.println("\n");
        }
    }
    //4 täringumäng
    public static void kakskymmendkolm(){
        Random rand = new Random(); 
        //deklraaib randomi ja punktiseisu
        int playerwins = 0;
        int computerwins = 0;
        //consenti kasutatakse uuesti mängimisel
        boolean consent = true;
        System.out.println("Oled alustanud mängu maailma kõige võimsama tehisintellektiga.");
        System.out.print("Kas sa oled valmis? ");
        String ready = scanner.next();
        if(ready.equals("jah")){
            System.out.println("Mäng algab!");}
        else if(ready.equals("ei")){
            System.out.println("Too bad!");
        }
            while(consent){
                int playerdic = rand.nextInt(6)+1; 
                int computerdic = rand.nextInt(6)+1;
                System.out.println("Arvuti veeretas: "+computerdic+" ja sina veeretasid: "+playerdic);
                if(playerdic > computerdic){
                    System.out.println("Sina võitsid!");
                    playerwins++;}
                else if(playerdic < computerdic){
                    System.out.println("Arvuti võitis!");
                    computerwins++;}
                else{
                    System.out.println("Viik!");
                }
                System.out.println("Arvuti:"+computerwins+" Mängija: "+playerwins);
                System.out.println("Kas soovid veel mängida? (jah/ei)");
                String answer = scanner.next();
                if(answer.equals("ei")){
                    consent = false;
                }
            }   
    }
    //5 lihtne matemaatika
    public static void kakskymmendkuus(){
        System.out.print("kui kallis on vaip ruutmeetri kohta?(x eur/m²): ");
        int vaibahind = scanner.nextInt();
        System.out.print("Kui suur on vaiba pikkus(m): ");
        int pikkus = scanner.nextInt();
        System.out.print("Kui suur on vaiba laius(m): ");
        int laius = scanner.nextInt();
        int vaibapindala = pikkus*laius;
        int vaibahindkokku = vaibapindala*vaibahind;
        System.out.println("Vaiba hind on: "+vaibahindkokku+" eurot");
    }
}
