<?php

function create_quote_today()
{
    $file = fopen($_SERVER['CONTEXT_DOCUMENT_ROOT']
                            . "/submissions/submission06"
                            . "/resources/quote_today.txt", "w");
    fwrite($file, date("l, F jS") . "\n");

    require('/var/shared/vendor/autoload.php');
    require($_SERVER["CONTEXT_DOCUMENT_ROOT"]
                    . '/../htpasswd/mongodb.inc');
    $client = new 
        MongoDB\Client("mongodb://$username:$password@localhost/u02");
    $collection = $client->u02->quotes_mongo;
    $quote_number = rand(1, $collection->count());
    $entry = $collection->findone(['_id' => $quote_number]);

    $quote_today = "";
    $quote_today = "Today's "
                . $entry['adjective']
                . " quote, from "
                . $entry['author']
                . ":\n"
                . $entry['text'];
    fwrite($file, $quote_today);
    fclose($file);
    return $quote_today;
}

if (file_exists($_SERVER['CONTEXT_DOCUMENT_ROOT']
                . "/submissions/submission06"
                . "/resources/quote_today.txt"))
{
    $file = fopen($_SERVER['CONTEXT_DOCUMENT_ROOT']
                . "/submissions/submission06"
                . "/resources/quote_today.txt", "r");
    $date = trim(fgets($file));
    if ($date == date("l, F jS"))
    {
        $quote = fgets($file, 2000);
        $quote .= fgets($file, 2000);
        fclose($file);
        echo $quote;
    } else {
        fclose($file);
        unlink($_SERVER['CONTEXT_DOCUMENT_ROOT']
                        . "/submissions/submission06"
                        . "/resources/quote_today.txt");
        echo create_quote_today();
    }

} else {
    echo create_quote_today();
}
?>
