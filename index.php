<?php 
$title ="AZOZZ"
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo "$title";?></title> 
<meta charset="utf-8">

</head>
    <body>

    <center>
    	
    	<?php echo "  اهلا وسهلا بك في موقع تحويل الدولار الامريكي الى ريال سعودية والعكس ";?>
        <?php echo "<hr>";?>
        <?php echo "<br><br>";?>
    
    <form action="go.php" method="post">
        <!-- العمولة السعودية -->
        <?php echo " اذا كنت تريد تحويل الدولار الامريكي الى ريال سعودي اكتب الدولار هنا  ";?>
        <?php echo "<br><br>";?>
       <input type="txt" name="usa" placeholder=" ريال سعودي ">

        <?php echo "<br><br>";?>

        <!-- العمولة الامريكية -->
        <?php echo " اذا كنت تريد تحويل الريال السعودي الى دولار امريكي اكتب الريال هنا ";?>
        <?php echo "<br><br>";?>
       <input type="txt" name="use" placeholder=" الدولار الامريكي  ">

        <?php echo "<br><br>";?>
        
        <button name="submit" type="submit" > تحويل العمولة </button>
        </form>
</center>
        
    </body>
</html>