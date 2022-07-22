<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $matches = [
            [
                'home' => 'Olimpia Milano',
                'guest' => 'Cantù',
                'homeScore' => 55,
                'guestScore' => 60
            ],
            [
                'home' => 'Bologna',
                'guest' => 'Sassari',
                'homeScore' => 72,
                'guestScore' => 90
            ],
            [
                'home' => 'Siena',
                'guest' => 'Trento',
                'homeScore' => 65,
                'guestScore' => 81
            ]
            ];
    ?>

    <h2>Risultati 22/07/2022</h2>
    <ul>
        <?php for($i = 0; $i < count($matches); $i++) { ?>
                <?php $thisMatch = $matches[$i] ?>

                <li>
                    <?php echo $thisMatch['home']; ?> - <?php echo $thisMatch['guest']; ?>
                    | <?php echo $thisMatch['homeScore']; ?> - <?php echo $thisMatch['guestScore']; ?> 
                </li>
        
        
        <?php } ?>
    </ul>
    
</body>
</html>