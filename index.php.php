<?php
    session_start();
    
   
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
                             <input type="hidden" name="katt" value="1">

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
                             <input type="hidden" name="hund" value="2">

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
                             <input type="hidden" name="Gaben" value="2">

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
                             <input type="hidden" name="Delfin" value="4">

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
