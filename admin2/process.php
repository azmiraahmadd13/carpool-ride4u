<?php


 $link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"carpool");

header('Content-Type: application/json');

 $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=1");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln1 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=2");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln2 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=3");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln3 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=4");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln4 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=5");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln5 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=6");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln6 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=7");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln7 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=8");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln8 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=9");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln9 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=10");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln10 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=11");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln11 = $row112['total'];
            }
            $res112=mysqli_query($link,"SELECT COUNT(userId) AS total FROM `user` WHERE MONTH(dateReg)=12");
        while($row112=mysqli_fetch_array($res112))
        {
           $bln12 = $row112['total'];
            }
 $data = array(0 => round($bln1,1),
				  1 => round($bln2,1),
				  2 => round($bln3,1),
				  3 => round($bln4,1),
				  4 => round($bln5,1),
				  5 => round($bln6,1),
				  6 => round($bln7,1),
				  7 => round($bln8,1),
				  8 => round($bln9,1),
				  9 => round($bln10,1),
				  10 => round($bln11,1),
				  11 => round($bln12,1),
				         
          
          );       

 echo json_encode($data);


?>