import java.util.Scanner;

public class OperacionesTresNumeros {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Ingrese el primer número: ");
        double num1 = scanner.nextDouble();

        System.out.print("Ingrese el segundo número: ");
        double num2 = scanner.nextDouble();

        System.out.print("Ingrese el tercer número: ");
        double num3 = scanner.nextDouble();

        double resultado1 = num1 * 100;
        double resultado2 = num2 * 10;
        double resultado3 = num3 * 1;
        double sumaTotal = resultado1 + resultado2 + resultado3;

        System.out.println("Primer número multiplicado por 100: " + resultado1);
        System.out.println("Segundo número multiplicado por 10: " + resultado2);
        System.out.println("Tercer número multiplicado por 1: " + resultado3);
        System.out.println("Sumatoria de todas las operaciones: " + sumaTotal);

        scanner.close();
    }
}