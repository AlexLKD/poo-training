<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des élèves</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des élèves</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                <br>
                Définir toutes les propriétés à l'instanciation.
                <br>
                Créer 2 étudiants différents.
            </p>
            <div class="exercice-sandbox">
                <?php
                class Student
                {
                    private string $lastName = "";
                    private string $firstName = "";
                    public DateTime $birthdate;
                    private string $graduation = "";
                    private string $schoolName = "";
                    public function __construct(string $lastName, string $firstName, string $graduation)
                    {
                        $this->lastName = $lastName;
                        $this->firstName = $firstName;
                        $this->graduation = $graduation;
                    }

                    public function getlastName(): string
                    {
                        return $this->lastName;
                    }
                    public function setLastName(string $lastName): bool
                    {
                        return $this->lastName = $lastName;
                    }
                    public function getFirstName(): string
                    {
                        return $this->firstName;
                    }
                    public function setFirstName(string $firstName): bool
                    {
                        return $this->firstName = $firstName;
                    }
                    public function getGraduation(): string
                    {
                        return $this->graduation;
                    }
                    public function setGraduation(string $graduation): bool
                    {
                        return $this->graduation = $graduation;
                    }
                    public function getBirthdate(): DateTime
                    {
                        return $this->birthdate;
                    }
                    public function getAge(): int
                    {
                        $today = new DateTime;
                        $this->birthdate;
                        $age = $this->birthdate->diff($today)->y;
                        return $age;
                    }

                    public function getSchoolName(): string
                    {
                        return $this->schoolName;
                    }

                    public function setSchoolName(string $schoolName)
                    {
                        $this->schoolName = $schoolName;
                    }
                    public function __toString()
                    {
                        return 'Bonjour, je m\'appelle ' . $this->firstName . ', j\'ai ' . $this->getAge() .
                            ' ans et je vais à l\'école ' . $this->schoolName . ' en classe de ' . $this->graduation . '.';
                    }
                }

                $firstStudent = new Student("Germain", "Michel", "Baccalauréat");
                $firstStudent->birthdate = new DateTime("1992-05-15");
                $secondStudent = new Student("Leroy", "Daniel", "BEP");
                $secondStudent->birthdate = new DateTime("1947-12-10");

                var_dump($firstStudent, $secondStudent);
                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                <br>
                Modifier le niveau scolaire des 2 élèves et les afficher.
            </p>
            <div class="exercice-sandbox">
                <?php
                $firstStudent->setGraduation('Master');
                $secondStudent->setGraduation('Licence');
                echo "Le niveau d'étude de " . $firstStudent->getFirstName() . " est " . $firstStudent->getGraduation() . ".";
                echo "</br>";
                echo "Le niveau d'étude de " . $secondStudent->getFirstName() . " est " . $secondStudent->getGraduation() . ".";

                ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Remplacer la propriété d'âge par la date de naissance de l'élève.
                <br>
                Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.
            </p>
            <div class="exercice-sandbox">
                <?php
                // new DateTime("1947-12-10")

                echo "La date de naissance de " . $firstStudent->getFirstName() . " est " . $firstStudent->getBirthdate()->format("Y-m-d") . ".";
                echo "</br>";
                echo "La date de naissance de " . $secondStudent->getFirstName() . " est " . $secondStudent->getBirthdate()->format("Y-m-d") . ".";
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de donner leur âge.
                <br>
                Afficher l'âge des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                echo "L'âge de " . $firstStudent->getFirstName() . " est : " . $firstStudent->getAge();
                echo "</br>";
                echo "L'âge de " . $secondStudent->getFirstName() . " est : " . $secondStudent->getAge();
                ?>

            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">
                On veut aussi savoir le nom de l'école où va un élève.
                <br>
                Ajouter la propriété et ajouter la donnée sur les élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                $firstStudent->setSchoolName('Jean Jaurès');
                $firstStudent->setSchoolName('Victor Hugo');
                var_dump($firstStudent, $secondStudent);
                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.".
                <br>
                Afficher la phrase de présentation des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                echo $firstStudent;
                echo "</br>";
                echo "</br>";
                echo $secondStudent;
                ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>