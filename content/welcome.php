<?php
require_once ('./libs/banbuilder/src/CensorWords.php');

$dataFileName = getcwd() . DIRECTORY_SEPARATOR . 'mydata.txt';
$nameInput = 'name';
$message = '';
$icon = 'stop';

if (!file_exists($dataFileName)) {
    touch($dataFileName);
}

$inputText = $_POST[$nameInput];
if(isset($inputText) && !empty($inputText)) {
    // check ban words
    $censor = new CensorWords;
    /*
     * To choose a non-English language file (or several dictionaries at once),
     * pass the semantic filename without the .php into the setDictionary method call as a parameter.
     * For example, to use the French dictionary of profanity, you would use:
     *
     * $langs = array('fr','it');
     * $badwords = $censor->setDictionary($langs);
     *
     * To add your new favorite words just use the next:
     *
     * array_push($badwords,
     *   'word1',
     *   'word2',
     * );
     *
     *
     * @see ../libs/banbuilder/src/dict/*
     * @see https://banbuilder.com/
     */
    $result = $censor->censorString($inputText);
    $matched = $result['matched'];
    if (is_array($matched) && sizeof($matched)) {
        // profanity word(s) found, so
        $cleaned = $result['clean'];
        $message = "Nice try...<br/>But $cleaned You was banned by our system.";
    } else {
        // check name uniqueness
        $userName = $inputText . PHP_EOL;
        $fileinput = file_get_contents($dataFileName);
        $ret = false;

        if (stripos($fileinput, $userName) === false) {
            $ret = file_put_contents($dataFileName, $userName, FILE_APPEND | LOCK_EX);
        }

        if($ret === false) {
            $message = 'Nice try...<br/>You can only enter your name once.';
        } else {
            $message = "Cross your fingers $userName<br/>You’ve just entered the raffle!";
            $icon = 'cross';
        }
    }
} else {
    $message = 'The field cannot be empty.<br/>Please click the home button to return to the entry form and re-enter your name.';
}
?>

<style scoped>
    .stop {
        width: 200px;
        height: 300px;
        background: url(/assets/images/stop.png) no-repeat center center;
    }
    .cross {
        width: 200px;
        height: 300px;
        background: url(/assets/images/cross.png) no-repeat center center;
    }

    @media screen and (max-width: 48em) {
        .stop {
            background-size: 100px 150px;
            width: 100px;
            height: 150px;
        }
        .cross {
            background-size: 100px 150px;
            width: 100px;
            height: 150px;
        }
    }

</style>

<div class="pure-u-1 pure-u-md-1 centered-text">
    <div class="horizontal-center <?=$icon?>"></div>
    <h3><?=$message?></h3>
</div>
