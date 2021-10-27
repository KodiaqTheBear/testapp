<?php
    $title = 'Výchozí stránka s úkolem';
    require_once 'inc/head.php';

?>

<h1>Formulář</h1>
<br>
<!--<ul>-->
<!--    <li>-->
<!--        Vytvořte jednoduchý formulář (v bootstrap), který bude obsahovat 2 textová pole, jedno zaškrtávací pole a odesílací tlačítko.-->
<!--    </li>-->
<!--    <li>-->
<!--        Pole libovolně pojmenujte, účel formuláře je libovolný. Po odeslání formuláře na straně serveru pouze zachyťte tato data a uložte je pomocí Tracy do souborového logo s názvem data.post-->
<!--    </li>-->
<!--</ul>-->

<form method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName">Jméno</label>
            <input type="name" name="name" value="" placeholder="Jméno">
        </div>
        <div class="form-group col-md-6">
            <label for="inputSurname">Příjmení</label>
            <input type="surname" name="surname" value="" placeholder="Příjmení">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" name="robot" value="true">
            <label> Potvrzuji, že jsem robot </label>
        </div>
    </div>
    <input type="submit" name="submit" value="Odeslat">
</form>
<br>
<?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {

        $firstname = $_REQUEST['name'];
        $lastname = $_REQUEST['surname'];
        // display the results

        if ($firstname != "" or $lastname != "") {
            echo 'Your name is ' . $lastname . ' ' . $firstname;
            if (isset($_POST['robot'])) {
                $robot = $_REQUEST['robot'];
                echo ' and you are a robot.';
            }
        }
    }

// Instrukce k úkolu
// Formulář vytvoříte klasicky z HTML
// Jeho odeslání metodou POST zachytíte jako údaje v objektu REQUEST
// Data získaná z tohoto objektu zatím stačí pouze zalogovat pomoví Debbugeru
