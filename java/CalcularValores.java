import java.util.Scanner;

public class CalcularValores {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Ingrese un número real: ");
        double numero = scanner.nextDouble();

        double doble = numero * 2;
        double cuadrado = Math.pow(numero, 2);
        double suma = doble + cuadrado;

        System.out.println("El doble de " + numero + " es: " + doble);
        System.out.println("El cuadrado de " + numero + " es: " + cuadrado);
        System.out.println("La suma del doble y el cuadrado es: " + suma);

        scanner.close();
    }
}
