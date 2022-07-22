<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

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
    
        $students = [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni',
                'schoolGrades' => [5, 6, 10, 7]
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri',
                'schoolGrades' => [7, 8, 6, 9]
            ],
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini',
                'schoolGrades' => [6, 7, 4, 8]
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini',
                'schoolGrades' => [7, 8, 8, 9]
            ]
        ];

        function average($array) {
            return array_sum($array) / count($array); 
        }
    ?>

    <ul>
        <?php for($i = 0; $i < count($students); $i++) { ?>
                <?php $thisStudent = $students[$i] ?>

                <li>
                    <h3>
                        <?php echo $thisStudent['name']; ?> <?php echo $thisStudent['lastname']; ?>
                    </h3>

                    <div>
                        Media: <?php echo average($thisStudent['schoolGrades']); ?>
                    </div>
                </li>
        
        
        <?php } ?>
    </ul>
    
</body>
</html>