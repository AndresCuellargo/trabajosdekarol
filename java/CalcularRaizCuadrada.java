import java.util.Scanner;

public class CalcularRaizCuadrada {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Ingrese un número real: ");
        double numero = scanner.nextDouble();

        double raizCuadrada = Math.sqrt(numero);

        System.out.println("La raíz cuadrada de " + numero + " es: " + raizCuadrada);

        scanner.close();
    }
}
