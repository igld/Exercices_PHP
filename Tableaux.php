<?php

include("common/header.php");
?>

<h1>Tableaux</h1>
<div>
    <?php
    //  echo (extension_loaded('xdebug') ? '' : 'non '), 'exists';

    $tab = array(22, 6, 12, 52, 2, 34, 40, 61);
    // var_dump($tab);
    echo '<pre>';
    print_r($tab);
    echo '</pre>';


    if (verifParite($tab) === 'impair') {
        echo "Il y a au moins un nombre impair dans le tableau";
    } else {
        echo "Il n'y a que des nombres pair dans le tableau";
    }


    function verifParite($tab)
    {
        foreach ($tab as $key => $value) {
            //echo "$key et $value ";
            if (($value % 2) !== 0) {
                return 'impair';
            }
        }
        return 'pair';
    }


    ?>
</div>

<?php

include("common/footer.php");
?>