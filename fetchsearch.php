<?php
$connect=mysqli_connect("localhost", "root","", "search");
$output='';
$sql = "SELECT * FROM tutors where tname LIKE '%".$_POST["search"]."%'";
// $sql = "SELECT * FROM tutors where tsurname LIKE '%".$_POST["search"]."%'";
// $sql = "SELECT * FROM tutors where temail LIKE '%".$_POST["search"]."%'";
$result= mysqli_query($connect, $sql);
if(mysqli_num_rows($result)>0)
{
    
    $output .= '<h4 align="center" class="bg-white pb-2 pt-2" >Qidiruv natijasi</h4>';
    $output .= '<div class="table-responsive">
        <table class="table bg-light">
            <tr class="table-dark">
                <th>Tyutor ismi</th>
                <th>Tyutor familyasi</th>
                <th>Tyutor email</th>
                <th>Tyutor tel raqami</th>
                <th>Tytorga biriktirilgan gruppalar</th>
                <th>Tytor manzili</th>
             
            </tr>';
    while($row = mysqli_fetch_array($result))
    { 
      
        $output .=  '
            <tr>
                <td>'.$row["tname"].'</td>            
                <td>'.$row["tsurname"].'</td>
                <td>'.$row["temail"].'</td>
                <td>'.$row["tphone_number"].'</td>
                <td>'.$row["hgroups"].'</td>
                <td>'.$row["address"].'</td>
                 
            </tr>';
       
        
    }
      echo $output;
}
else
    {
        echo 'Malumot topilmadi';
    }
?>