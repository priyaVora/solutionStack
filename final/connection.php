<?php
class connection { 
    public $servername = "localhost:3306";
    public $username = "prvora89";
    public $password = "Miracle@89";
    public $dbname = "mysql";
    
    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    // $sql = "INSERT INTO MyContacts (_name, email, phone_number)
    // VALUES ('John', 'Doe', 'john@example.com')";
    
    function get_connection() { 
        echo 'Hello';

        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname); 
        
       
        if(!isset($conn)) { 
            echo $conn->error;
        } else { 
            echo "<h1>Welcome to your Contact Database!</h1>";
        } 
        return $conn;
    }
    
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    
}
// $conn->close();
?>