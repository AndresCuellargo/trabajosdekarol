import java.util.Scanner;

public class CalcularCubo {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Ingrese un número real: ");
        double numero = scanner.nextDouble();
        double cubo = Math.pow(numero, 3);
        System.out.println("El cubo de " + numero + " es: " + cubo);
        scanner.close();
    }
}
