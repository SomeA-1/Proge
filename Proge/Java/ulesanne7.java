//Arko Avarsalu
import java.util.Scanner;
public class ulesanne7{
     private static Scanner scanner = new Scanner(System.in);
    public static void main(String[] args) {
        arvuta();
    }
    static void arvuta(){
        System.out.println("Sisesta number: ");
            String input1 = scanner.nextLine();
        System.out.println(input1);
        System.out.println("Sisesta teine number");
            String input2 = scanner.nextLine();
        System.out.println(input2);
        try{
            int vastus = Integer.parseInt(input1) + Integer.parseInt(input2);
            System.out.println(vastus);
            retry();
        } catch (NumberFormatException e){
            System.out.println("Üks sisestatud väärtustest ei ole number");
            retry();
        }
    }
    static void retry(){
        System.out.println("Kas soovid uuesti proovida? (jah/ei)");
        String input3 = scanner.nextLine();
        if (input3.equals("jah")){
            arvuta();
        } else if (input3.equals("ei")){
            System.out.println("Head aega!");
        } else {
            System.out.println("Vale sisend");
            retry();
        }
    }

}
