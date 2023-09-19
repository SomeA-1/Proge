//Arko Avarsalu
import java.util.Scanner;
public class ulesanne8_2 {
    private static Scanner scanner = new Scanner(System.in);
    public static void main(String[] args) {
        boolean loop = true;
        arvuti arvuti1 = new arvuti();
        arvuti1.specid("GTX 1080", "i7 7700k", "16GB", "1TB", "750W");

        arvuti arvuti2 = new arvuti();
        arvuti2.specid("Radeon RX 580", "Ryzen 5 1600", "8GB", "500GB", "500W");
        
        while (loop == true){
        System.out.print("Millise arvuti info soovite kuvada?: ");
        int valik = scanner.nextInt();
        switch(valik){
            case 1: arvuti1.specsheet(); break;
            case 2: arvuti2.specsheet(); break;
            default: System.out.println("Sellist arvutit ei ole");
        }
/*         System.out.print("Kas soovite komponente muuta?: ");
        String vastus = scanner.next();
        if(vastus.equals("jah")){
            System.out.print("Millise arvuti komponente soovite muuta?: ");
            int valik2 = scanner.nextInt();
            switch(valik2){
                case 1: arvuti1.specchange(); 
                case 2: arvuti2.specchange(); 
                default: System.out.println("Sellist arvutit ei ole"); */
            }
        }
        }
/*     }
}
 */