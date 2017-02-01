<?php

echo "Hello World man!";
echo "test pull";


try {
    $dbh = new PDO(getenv('MYSQL_DSN'),getenv('MYSQL_USER'),getenv('MYSQL_PASSWORD'));

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to Database<br/>';

    $sql = "SELECT * FROM tutorials_tbl";
    foreach ($dbh->query($sql) as $row)
    {
        echo $row["collection_brand"] ." - ". $row["collection_year"] ."<br/>";
    }


    $dbh = null;
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

?>