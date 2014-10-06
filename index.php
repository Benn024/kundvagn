<?php
session_start();
if (isset($_SESSION["vagn"])) {
    
} else {
    $_SESSION["vagn"] = array();
}

$fanns_redan = false;

//foreach($_SESSION["vagn"] as $produkt){
//    if($produkt["id"] == ){
//        echo "<br>Hittad avbryter";
//        $fanns_redan = true;
//    }else{
//        echo "<br>Matchar inte. Forsätter söka";
//    }
//}

if (isset($_GET["id"])) {
    //lägg t prod
//    echo $_GET["id"];
    //foreach ($_SESSION["vagn"] as $produkt){
    if (count($_SESSION["vagn"]) < 1) {
        $_SESSION["vagn"][] = array("id" => $_GET["id"], "antal" => $_GET["antal"], "pris"=>$_GET["pris"]);
    }
    for ($i = 0; $i < count($_SESSION["vagn"]); $i++) {
        
        if ($_SESSION["vagn"][$i]["id"] == $_GET["id"]) {
//            echo "woogoo fins en " . $_GET["id"];
            $_SESSION["vagn"][$i]["antal"] = $_SESSION["vagn"][$i]["antal"] + $_GET["antal"];
            $_SESSION["vagn"][$i]["pris"] = $_SESSION["vagn"][$i]["pris"] + $_GET["pris"];
            $fanns_redan = true;
        } 
    }
    //loop körd, fanns redan true om den fanns i vagnen
    if ($fanns_redan == false) {
        $_SESSION["vagn"][] = array("id" => $_GET["id"], "antal" => $_GET["antal"]);
    }
} else {
    //ingen produkt
}

if(isset($_GET["rensa"])){
    unset($_SESSION["vagn"]);
    header("Location: index.php");
    exit();
    
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
                            <input type="hidden" name="pris" value="300">

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
                            <input type="hidden" name="pris" value="700">

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
                            <input type="hidden" name="pris" value="1337">

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
                            <input type="hidden" name="pris" value="1000"
                        </td>
                        <td>
                            <input type="text" name="antal" value="1">
                        </td>
                        <td><input type="submit" name="action" value="add"</td>
                    </tr>

                </form>
            </table>

            <form>
                <input href="index.php?action=rensa" type="submit" name="rensa" value="rensa" href="index.php">
            </form>
            <form>
                <input href="" type="submit" name="visa" value="Visa Kundvagn" href="">
            </form>


        </div>
    </body>
</html>
