//Arko Avarsalu
public class ulesanne2{
    public static void main(String[] args){
        double tollid = 1;
        double elipsea = 52;
        double elipseb = 5.231;
        double minutid = Math.round(Math.random()*1000);
        double distants = 10;
        double aeg1 = 12.5;
        double aeg2 = 25;

        Mata(tollid);
        Elipse(elipsea, elipseb);
        Aeg(minutid);
        Kiirus(distants, aeg1, aeg2);
    }
    //Tõlgendab tollid meetriteks
    static void Mata(double tollid){
        double meetrid = tollid/39.37;
        System.out.println(tollid+"tolli on "+meetrid+" meetrit");
    }
    //Arvutab elipsi pindala
    static void Elipse(double elipsea, double elipseb){
        double elipses = Math.PI*elipsea*elipseb;
        System.out.println("Elipsi pindala on "+elipses);
        elipses = Math.round(elipses);
        System.out.println("Elipsi ümardatud pindala on "+elipses);
    }
    //Arvutab minutid tundideks ja minutiteks
    static void Aeg(double minutid){
        double tunnid = minutid/60;
        double minjaak = minutid%60;
        System.out.println(minjaak);
        System.out.println(minutid+" minutit on "+ Math.floor(tunnid) +" tundi ja " + Math.round(minjaak) +" minutit");
    }
    //Arvutab kiiruse 
    static void Kiirus(double distants, double aeg1, double aeg2){
        double kiirus1 = distants/aeg1;
        double kiirus2 = distants/aeg2;
        System.out.println("Esimese kiirus on "+kiirus1+" m/s ja teise kiirus on "+kiirus2+" m/s");
        KiiruseVahe(kiirus1, kiirus2);
    }
    //Arvutab kiiruste vahe
    static void KiiruseVahe(double kiirus1, double kiirus2){
        double kiirustevahe = kiirus1 - kiirus2;
        System.out.println("Kiiruste vahe on "+Math.abs(kiirustevahe)+" m/s");
        
    }
}
