import java.util.Scanner;

public class SumaDosNumeros {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Ingrese el primer número real: ");
        double num1 = scanner.nextDouble();

        System.out.print("Ingrese el segundo número real: ");
        double num2 = scanner.nextDouble();

        double suma = num1 + num2;

        System.out.println("La suma de " + num1 + " y " + num2 + " es: " + suma);

        scanner.close();
    }
}
