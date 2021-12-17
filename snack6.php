    
<!-- // Snack 6
    // Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.-->



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
 
    $db_keys = array_keys($db);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container" style="display: flex">

    <div class="teachers" style="width: 300px; height: 300px; background-color: grey; margin: 20px">
        <?php
            for ($i= 0; $i < count($db[$db_keys[0]]); $i++) {
                
                echo $db[$db_keys[0]] [$i] ['name'];
                echo $db[$db_keys[0]] [$i] ['lastname'];

            }

        ?>
    </div>


    <div class="pm" style="width: 300px; height: 300px; background-color: green;  margin: 20px">
        <?php
            for ($i= 0; $i < count($db[$db_keys[1]]); $i++) {
                
                echo $db[$db_keys[1]] [$i] ['name'];
                echo $db[$db_keys[1]] [$i] ['lastname'];

            }
        ?>
    </div>

</div>


</body>
</html>
