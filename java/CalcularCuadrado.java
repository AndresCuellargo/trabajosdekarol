import java.util.Scanner;

public class CalcularCuadrado {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Ingrese un número real: ");
        double numero = scanner.nextDouble();
        double cuadrado = Math.pow(numero, 2);
        System.out.println("El cuadrado de " + numero + " es: " + cuadrado);
        scanner.close();
    }
}
