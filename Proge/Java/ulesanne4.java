//Arko Avarsalu
import java.util.Scanner;
public class ulesanne4{
    public static void main(String[] args){
        
        Scanner scanner = new Scanner (System.in);
        System.out.print("Kirjuta üks väga pikk lause: "); 
        String lause = scanner.nextLine();
        scanner.close();
        String lausesplit = lause.split(" ")[0];
        System.out.println(lause.substring(0,1).toUpperCase() + lause.substring(1)); //ma tegin nii et esimene täht on suur aga vahemalt sa saad aru et ma oskan seda kasutada ja ma ei viitsi rewriteda xoxo
        System.out.println("Lauses on "+ lause.length()+ " sümbolit ja "+ lause.split(" ").length+ " sona.");
        System.out.printf("Esimene sona on: %s", lausesplit);
    
    }
}