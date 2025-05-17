import java.util.Scanner;

public class AreaRombo {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Ingrese la diagonal mayor del rombo: ");
        double diagonalMayor = scanner.nextDouble();

        System.out.print("Ingrese la diagonal menor del rombo: ");
        double diagonalMenor = scanner.nextDouble();

        double area = (diagonalMayor * diagonalMenor) / 2;

        System.out.println("El área del rombo es: " + area);

        scanner.close();
    }
}
