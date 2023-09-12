//Arko Avarsalu
public class ulesanne3{
    public static void main(String[] args){
    int[] arvud = {12,5,10,10,28,17,5,19,0,13,0,22,7,0,17,2,24,1,13,29,0,7,16,8,7,4,27,8,8,23,26,25,15,2,26,1};
    int[][] kuupaevad = {{1,23},{2,15},{3,29},{4,15},{5,26},{6,17},{7,26},{8,15},{9,28},{10,12},{11,24},{12,16},{13,21},{14,10},{15,10},{16,26},{17,27},{18,19},{19,14},{20,14},{21,14},{22,26},{23,20},{24,28},{25,29},{26,11},{27,28},{28,19},{29,25},{30,12}};
    int kokku = 0;    
    for (int arv:arvud) {
            kokku = kokku+arv;
    }
    System.out.println("Esimene arv on "+arvud[0]);
    System.out.println("Viimane arv on "+arvud[arvud.length-1]);
    System.out.println("Arve on kokku "+arvud.length);
    System.out.println("Arvude summa on "+ kokku);
    System.out.println("Arvude keskmine on "+ kokku/arvud.length);

        for (int jark = 0; jark < 31; jark++) {
            System.out.println(kuupaevad[jark][0]+". kuupäeval oli "+kuupaevad[jark][1]+" kraadi");
    }


}

}