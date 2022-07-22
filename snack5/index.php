<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <?php   
 
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
    ?>

    <div class="grey">
        <div>
            <?php echo $db['teachers'][0]['name']; ?>
            <?php echo $db['teachers'][0]['lastname']; ?>
        </div>
        <div>
            <?php echo $db['teachers'][1]['name']; ?>
            <?php echo $db['teachers'][1]['lastname']; ?>
        </div>
    </div>

    <div class="green">
        <div>
            <?php echo $db['pm'][0]['name']; ?>
            <?php echo $db['pm'][0]['lastname']; ?>
        </div>
        <div>
            <?php echo $db['pm'][1]['name']; ?>
            <?php echo $db['pm'][1]['lastname']; ?>
        </div>
    </div>

    <!-- ho provato anche con un ciclo for ma non ci sono riuscito :) -->
</body>
</html>