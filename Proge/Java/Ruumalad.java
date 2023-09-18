public class Ruumalad {
	public static double roopkylikP(String a, String b, String h) {
		float diagonaal1 = Float.parseFloat(a);
        float diagonaal2 = Float.parseFloat(b);
		float korgus = Float.parseFloat(h);
		double p = 12*diagonaal1*diagonaal2*korgus;
		return p;
	}
	
	public static double ristkylikP(String a, String b, String h) {
		float alus = Float.parseFloat(a);
        float laius = Float.parseFloat(b);
		float korgus = Float.parseFloat(h);
		double p = alus*laius*korgus;
		return p;
	}
	
	public static double kolmnurkP(String a, String b, String h) {
		float alus = Float.parseFloat(a);
        float laius = Float.parseFloat(b);
		float korgus = Float.parseFloat(h);
		double p = alus*laius*korgus/3;
		return p;
	}
	public static double keraP(String r) {
		float raadius = Float.parseFloat(r);
		double p = 4*Math.PI*raadius*raadius*raadius/3;
		return p;
	}
}