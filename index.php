<?php

session_start();
if(isset($_SESSION["vagn2"])){
    
}else{
$_SESSION["vagn2"] = array();
}
$arr = array(); //session
$arr[] = array(); //vagn
$arr[0][] = 3;
$arr[0][] = 4;
var_dump($arr);

if (isset($_GET["id"])) {
    //lägg t prod
//    echo $_GET["id"];

    $produkt = $_GET["id"];
//    array_push($_SESSION["vagn"], $produkt);
    $_SESSION["vagn2"][] = $produkt;

} else {
    //ingen produkt
}
var_dump($_SESSION);
//    echo $_GET["antal"];
//    if(isset($_SESSION["vagn"])){
//    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Säljer kattningar</title>
    </head>
    <body>
        <div id="wrapper">

            <table>
                <form>
                    <tr>
                        <td>
                            <p>Katt</p>
                            <input type="hidden" name="id" value="katt">

                        </td>
                        <td>
                            <input type="text" name="antal" value="1">
                        </td>
                        <td><input type="submit" name="action" value="add"</td>
                    </tr>

                </form>
                <form>
                    <tr>
                        <td>
                            <p>Hund</p>
                            <input type="hidden" name="id" value="hund">

                        </td>
                        <td>
                            <input type="text" name="antal" value="1">
                        </td>
                        <td><input type="submit" name="action" value="add"</td>
                    </tr>

                </form>

                <form>
                    <tr>
                        <td>
                            <p>Gaben</p>
                            <input type="hidden" name="id" value="Gaben">

                        </td>
                        <td>
                            <input type="text" name="antal" value="1">
                        </td>
                        <td><input type="submit" name="action" value="add"</td>
                    </tr>

                </form>

                <form>
                    <tr>
                        <td>
                            <p>DelFIN</p>
                            <input type="hidden" name="id" value="delfin">

                        </td>
                        <td>
                            <input type="text" name="antal" value="1">
                        </td>
                        <td><input type="submit" name="action" value="add"</td>
                    </tr>

                </form>
            </table>

            <form>
                <input type="submit" name="action" value="reset">
            </form>



        </div>
    </body>
</html>
