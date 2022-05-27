<?php
$connect=mysqli_connect("localhost", "root","", "search");
$output='';
// $sql = "SELECT * FROM student where name LIKE '%".$_POST["search"]."%'";
$sql = "SELECT * FROM student where CONCAT(fulname, guruh, kurs, jins, talim_shakli) LIKE '%".$_POST["search"]."%'";
// $sql = "SELECT * FROM tutors where tsurname LIKE '%".$_POST["search"]."%'";
// $sql = "SELECT * FROM tutors where temail LIKE '%".$_POST["search"]."%'";
$result= mysqli_query($connect, $sql);
if(mysqli_num_rows($result)>0)
{
    
      $output .= '<div class="table-responsive" style="border-radius: 5px; border: solid 1px #0dcaf0">
        <table class="table bg-light">
            <tr class="">
                <th > <a class="btn btn-outline-info">Familya Ism Sharfi <span><img src="img/Color_Sort Down_20px.png" alt=""></span></a> </th>
                <th > <a class="btn btn-outline-info">Guruh </a> </th>
                <th ><a class="btn btn-outline-info"> Ta`lim shakli</th>
                <th > <a class="btn btn-outline-info"> Butun ro`yxat</a></th>
             
            </tr>';
    while($row = mysqli_fetch_array($result))
    { 
      
        $output .=  '
            <tr>
                <td>'.$row["fulname"].'</td>            
                <td>'.$row["guruh"].'</td>
                <td>'.$row["talim_shakli"].'</td>
                  <td><a href="login page simple/thirdlogin.php" class="btn btn-success">Batafsil</a></td>            
            </tr>';
       
        
    }
      echo $output;
}
else
    {
        echo $output .= '<h6 align="center" class="bg-warning pb-2 pt-2" style="border-radius: 5px; border: solid 1px white" >Iltimos kiritilgan ma`lumotni to`g`ri ekanligiga ishonch xosil qiling!!!</h6>';
    }
?>