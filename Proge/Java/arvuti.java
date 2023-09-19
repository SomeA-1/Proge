import java.util.Scanner;
public class arvuti {
   private static Scanner scanner = new Scanner(System.in);
   public String GPU; 
   public String CPU;
   public String RAM;
   public String Storage;
   public String PSU;

   public void specid(String GPU, String CPU, String RAM, String Storage, String PSU){
       this.GPU = GPU;
       this.CPU = CPU;
       this.RAM = RAM;
       this.Storage = Storage;
       this.PSU = PSU;
   }
   public void specsheet(){
      System.out.print("GPU: "+GPU+"\nCPU: "+CPU+"\nRAM: "+RAM+"\nStorage: "+Storage+"\nPSU: "+PSU + "\nKas soovite komponente muuta?: ");
      String vastus = scanner.nextLine();
      if(vastus == "jah"){
         specchange();
      }
   }
   public void specchange(){
      System.out.println("GPU: "+GPU+"\nCPU: "+CPU+"\nRAM: "+RAM+"\nStorage: "+Storage+"\nPSU: "+PSU);
      System.out.println("Millist komponenti soovite muuta?: ");
      System.out.println("1. GPU\n2. CPU\n3. RAM\n4. Storage\n5. PSU");
      int valik = scanner.nextInt();
      switch(valik){
         case 1: System.out.println("Sisestage uus GPU: "); GPU = scanner.nextLine(); break;
         case 2: System.out.println("Sisestage uus CPU: "); CPU = scanner.nextLine(); break;
         case 3: System.out.println("Sisestage uus RAM: "); RAM = scanner.nextLine(); break;
         case 4: System.out.println("Sisestage uus Storage: "); Storage = scanner.nextLine(); break;
         case 5: System.out.println("Sisestage uus PSU: "); PSU = scanner.nextLine(); break;
         default: System.out.println("Sellist komponenti ei ole");
      }

   }





}
