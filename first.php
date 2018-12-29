<?php
/**
 * Created by PhpStorm.
 * User: godfather
 * Date: 12/12/18
 * Time: 3:56 PM
 */
//$string1 = "PHP=A Powerful Language";
//$string2 = urlencode($string1);
//$string3 = rawurlencode($string1);
//echo $string2;
//echo $string3;
//$path = "Programming Php";
//$encpath = rawurlencode($path);
//$url = "http://localhost/{$encpath}";
//$enc_aging = rawurlencode($url);
//echo $enc_aging;
$phrase = "PHP PHP,Programming, is ,the best language ever PHP";
//$sub1 = substr($phrase, 0, 3);
//echo $sub1;
//$sub2 = substr($phrase, 11);
//echo $sub2;
//echo strlen($sub2);
//echo substr_count($phrase, 'is');
//echo substr_count($phrase, 'is',18);
//echo substr_count($phrase, 'is',15,10);
//echo substr_replace($phrase, 'salam ', 4,0);
//echo strrev("salam");
//echo str_repeat('____*', 6);
//$field = explode(',', $phrase,2);
//echo $field;
//foreach ($field as $item) {
//    echo $item . '*-----*';
//}
//
//$string = implode(',', $field);
//echo $string;
//dont put here constant value as $count
//echo str_replace('is', 'was', $phrase,$count);
//echo $count;

//$pos = strpos($phrase, 'PHP',1);
//echo $pos;
//$pos = strrpos($phrase, 'php');
//echo $pos;
//if ($pos === false) {
//    echo true;
//}else{
//    echo false;
//}
//its not case sensitive to search string 'php'or 'PHP'

//echo stripos($phrase, 'php', 1);

/*query string is sotring datas in url against post method that stors data in body of request */

//if (isset($_POST['name'])){
//    $name = htmlspecialchars($_POST['name']);
//    if (strlen($name) < 3) {
//        echo "your name is too short";
//    }else{
//        echo "YOUR name is {$name}";
//    }
//
//}else{
//if (isset($_POST['sub'])) {
//    var_dump($_POST);
//}
////////////////////////////////////////////////send file method form
if (isset($_FILES['myfile'])) {
    $name = $_FILES['myfile']['name'];
    $tmp = $_FILES['myfile']['tmp_name'];
//    if (substr($name, strlen($name) - 4, 4) == ".zip") {
//        echo "You cannot upload compressed file!";
//        die("You cannot upload compressed file!");
//    }
    if (move_uploaded_file($tmp,"myfiles/$name")) {
        echo "YOUR FILE WAS SUCCESS FULLY UPLOADED";
    }else{
        echo "An error occurred -Error Code :", $_FILES['myfile']['error'];
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000000"/>
    <input type="file" name="myfile" />
<input type="submit" name="submit" value="Upload"/>
</form>

</form>




<!--!--<form action="first.php" method="post">-->-->
    <!--    <input type="text" name="name" size="20"/>-->
    <!--    <input type="submit" name="submit" value="GO!"/>-->
    <!--</form>-->
    <!--<form method="post">-->
    <!--    <p>Selectyour favorite language(s)</p>-->
    <!--    -->
    <!--    <select name="language[]" multiple>-->
    <!--        <option value="csharp">C#</option>-->
    <!--        <option value="javascript">JAVA SCRIPT</option>-->
    <!--        <option value="php">PHP</option>-->
    <!--        <option value="csharp">C#</option>-->
    <!--        <option value="csharp">C#</option>-->
    <!--        <option value="csharp">C#</option>-->
    <!--        <option value="csharp">C#</option>-->
    <!--    </select>-->
    <!--    <input type="submit" name="sub" value="Send"/>-->
    <!--</form>-->

    <!--    <form method="post">-->
    <!--        <input type="checkbox" name="11" />C#</br>-->
    <!--        <input type="checkbox" name="12" value="javascript"/>JAVASCRIPT</br>-->
    <!--        <nput type="radio" name="13"/>PHP</br>-->
    <!--        <input type="submit" name="sub" value="send"/>-->
    <!--    </form>-->