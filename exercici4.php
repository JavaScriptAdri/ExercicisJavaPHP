<html>
<form action="exercici4.php" method="POST">
                Numero Primer: <input type="number" name="primer"><br>
                <input type="submit">
           </form>
          
         
<body>
    <html>
    <body>
            <?php
            if(isset($_POST['primer'])){
                for ( $i = 2; $i < $_POST['primer']; $i++) {
                    if ($_POST['primer'] % $i == 0) 
    
                    echo $_POST['primer'] . 'NO ÉS UN NUMERO PRIMER';
                
                else{              
              echo $_POST['primer'] . 'ÉS UN NUMERO PRIMER';
            }}
        }
             ?>
                
            
        </body>
        </html>
 
    
</body>
</html>
