
    <?php
        $servername = "localhost";
        $username = "nnagda";
        $password = "1234";
        $dbname="project";


        
        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "Connection Fail";
            
        }
        
        
        $sql= "SELECT* FROM DailySteps";
        $result = mysqli_query($conn,$sql);
    
        //echo mysqli_num_rows($result)."</br>";
        
        while($row = mysqli_fetch_array($result)) {
             echo $row["ID"].",".$row["Date"].",".$row["TotalSteps"].",".$row["TotalMiles"]."<br/>\n"; 
        }
        
        
        
        

        
    ?>
