import java.util.Scanner;

public class LeerReal {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Ingrese un número real: ");
        double numero = scanner.nextDouble();
        System.out.println("Número ingresado: " + numero);
        scanner.close();
    }
}
