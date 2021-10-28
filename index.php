<?php
$program = [
    'Politeknik Ungku Omar' => [
        'Sarjana Muda Teknologi Kejuruteraan Awam Dengan Kepujian' => [
            'STPM',
            'Matrikulasi',
            'Diploma',
        ],
        'Sarjana Muda Teknologi Kejuruteraan Pembuatan (Pengurusn Rnagkaiaan Bekalan) Dengan Keujian' =>[
            'STPM',
            'Matrikulasi',
            'Diploma', 
        ],
        'Diploma Kejuruteraan Awan' => [
            'SPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Seni Bina' => [
            'SPM',
            'Sijil Kolej Komuniti',
        ],

    ],
    'Politeknik Sultan Haji Ahmad Shah' => [
        'Diploma Kejuruteraan Awan' => [
            'SPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Seni Bina' => [
            'SPM',
            'Sijil Kolej Komuniti',
            
        ],
        'Diploma Geomatik' => [
            'SPM',
            'Sijil Kolej Komuniti',
            
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulangkaji Array</title>

    <style>
        *{
            font-family: verdana, geneva, Thoma, sans-serif;
        }
        li{
            line-height:1.5;
        }
    </style>
</head>
<body>
    <h1>Senarai Program Di Politeknik</h1>

   <!-- <pre><?php print_r($program); ?></pre>-->

    <ul>
    <?php
    foreach ($program as $poli => $value) {
        echo "<li>$poli";
        echo '<ul';
        foreach($value as $course => $syarat){
             echo "<li>$course</li>";
             echo "<ul>";
             foreach ($syarat as $kelayakan) {
                 echo "<li>$kelayakan</li>";
             }
             echo "</ul>";
             echo "</li>";
        }
         echo '</ul>';
         echo "</li>";  

        //echo = "$value";
        //print_r($value)
        //li utk bullet
    }
    ?>

<!--   <ul>
        <li>Politeknik Unku Omar
            <ul>
                <li>Sarjana Muda Teknologi Kejuruteraan Awam Dengan Kepujian</li>
                <li></li>
            </u>
        </li>
        <li>

        </li>
    </u> -->
<p>
    <a href = "latihan.php">Next</a>
</p>
</body>
</html>