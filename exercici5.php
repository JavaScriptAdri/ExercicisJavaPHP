<html>
<form action="exercici5.php" method="POST">
                Numero Divisors: <input type="number" name="Numero"><br>
                <input type="submit">
           </form>
          
         
<body>
    <html>
    <body>
            <?php
        var introduce = prompt("Escriu un numero");
        var numeros;
        
        for (numeros=2;numeros < introduce/2; numeros++) {
            if (introduce % numeros === 0) {
                console.log(numeros," ho divideix ");
            }
        }
             ?>
                
                
        </body>
        </html>
 
    
</body>
</html>
