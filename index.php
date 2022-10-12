<html>
<head?>
    <meta charset="UTF-8">
    <title>karkuwka</title>
    
    </head?>
<body>
    <header>
    <div></div>
    </header>
<?php
    DB_HOST 51.123.43.245
DB_USER admin
DB_PASS 123456
DB_NAME quiz
        $con = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    $res = $con ->query("SELECT id, question FROM questions");
    $rows = $res -> fetch_array();
   
</body>
    </html>