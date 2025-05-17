import java.util.Scanner;

public class LeerCaracter {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Ingrese un carácter: ");
        char caracter = scanner.next().charAt(0);
        System.out.println("El carácter ingresado es: " + caracter);
        scanner.close();
    }
}