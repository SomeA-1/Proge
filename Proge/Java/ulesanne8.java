//Arko Avarsalu
import java.util.Scanner;
public class ulesanne8{
    private static Scanner scanner = new Scanner(System.in);
    public static void main(String[] args) {
        System.out.println("(1) Rööpküliku ruumala \n(2) Risttahuka ruumala \n(3) Püramiidi ruumala");
        System.out.print("Vali Ülesanne: ");
        int valik = scanner.nextInt();
        System.out.print("Sisesta laius: ");
        String a = scanner.next();
        System.out.print("Sisesta pikkus: ");
        String b = scanner.next();
        System.out.print("Sisesta kõrgus: ");
        String h = scanner.next();
        double p = 0;
        String kujund = "";
        //Switch statement mis vahetab ruumala arvutamist
        switch(valik){
            case 1: p = Ruumalad.roopkylikP(a, b, h);
            kujund = "Rööptahuka";  break;
            case 2: p = Ruumalad.ristkylikP(a, b, h);
            kujund = "Risttahuka";  break;
            case 3: p = Ruumalad.kolmnurkP(a, b, h);
            kujund = "Püramiidi";  break;
            default: System.out.println("Sellist ülesannet ei ole");
        }
        System.out.println(kujund+" pindala on: "+p);
    }
}

