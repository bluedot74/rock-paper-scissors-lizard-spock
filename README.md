# Rock Paper Scissors Lizard Spock
============================

A Symfony based game to play Rock Paper Scissors Lizard Spock against a random computer.

The code is in the src/JoshWillis/RockPaperScissorsLizardSpockBundle.

There is a small PHPUnit test suite in src/JoshWillis/RockPaperScissorsLizardSpockBundle/Tests.

The heart of the app is the Game class (src/JoshWillis/RockPaperScissorsLizardSpockBundle/Game.php) which takes two Player objects, calculates, and returns an Outcome object. Using the getVerb methods on the actions themselves it is able to generate a description of the outcome.