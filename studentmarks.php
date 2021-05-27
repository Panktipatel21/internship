  <html>
  <h1> Student marks </h1>
    <body>
        <form action="" method="post">
                <table border=0 >
                    <tr>
                        <td font size=4 >
                            Student Name:
                        </td>
                        <td>
                            <input type=text name="t1">
                        </td>
                    </tr>
                    <tr>
                        <td font size=4>
                            Marks for Physics
                        </td>
                        <td>
                            <input type=text name="t2">
                        </td>
                    </tr>
                    <tr>
                        <td font size=4>
                            Marks for Chemistry
                        </td>
                        <td>
                            <input type=text name="t3">
                        </td>
                    </tr>
                    <tr>
                        <td font size=4>
                            Marks for Math
                        </td>
                        <td>
                            <input type=text name="t4">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Result">
            
<?php
if(isset($_POST['s']))
{
    $a=$_POST['t1']; 
    $a1=$_POST['t2'];
    $a2=$_POST['t3']; 
    $a3=$_POST['t4']; 
	
    $sum=$a1+$a2+$a3; //total marks
    $avg=$sum/3;
	
    if($avg>=0&&$avg<=50)
        $grade="Fail";
    if($avg>50&&$avg<=70)
        $grade="C";
    if($avg>70&&$avg<=80)
        $grade="B";
    if($avg>80&&$avg<=90)
        $grade="A";
    if($avg>90)
        $grade="AA";
    echo "<br>";
	echo "<br>";
	echo "<br>";
    echo "<font size=4>Student is:  ".$a."<br>"; 
    echo "<font size=4>Total marks:  ".$sum."<br>"; 
    echo "<font size=4>Grade is:  ".$grade." "; 
}
?>
        </form>
    </body>
</html>