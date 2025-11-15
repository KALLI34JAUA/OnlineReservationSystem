import java.util.*;

public class GuessTheNumber {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        Random rand = new Random();

        int totalScore = 0;
        int rounds = 3;   // number of rounds

        System.out.println("🎮 Welcome to the Guess The Number Game!");

        for (int r = 1; r <= rounds; r++) {

            int number = rand.nextInt(100) + 1; // Random number 1–100
            int attempts = 7;                   // Limit attempts
            int guess;
            int roundScore = 0;

            System.out.println("\n--- Round " + r + " ---");
            System.out.println("I'm thinking of a number between 1 and 100...");
            System.out.println("You have " + attempts + " attempts!");

            for (int i = 1; i <= attempts; i++) {

                System.out.print("Enter your guess: ");
                guess = sc.nextInt();

                if (guess == number) {
                    System.out.println("🎉 Correct! You guessed it in " + i + " attempts.");

                    // Scoring system
                    roundScore = (attempts - i + 1) * 10;
                    totalScore += roundScore;

                    break;
                }
                else if (guess > number) {
                    System.out.println("📉 Too high!");
                } 
                else {
                    System.out.println("📈 Too low!");
                }

                if (i == attempts) {
                    System.out.println("❌ Out of attempts! The correct number was " + number);
                }
            }

            System.out.println("Round " + r + " Score: " + roundScore);
        }

        System.out.println("\n=============================");
        System.out.println("🏁 Game Over!");
        System.out.println("⭐ Total Score: " + totalScore);
        System.out.println("=============================");
    }
}
