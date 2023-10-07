<?php
class Database
{
    // Private Variables
    private $servername = "172.31.22.43";
    private $username = "Anjali200556508";
    private $password = "829I6MkzoT";
    private $dbname = "Anjali200556508";
    public $con;

    // Database Connection
    public function __construct()
    {
        $this->con = mysqli_connect($this-> servername, $this-> username, $this->password, $this->dbname);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to database" . mysqli_connect_error());
        } else {
            return $this->con;
            echo "<p> Order Placed Successfully </p>";
        }
    }

// Function to insert order data into the database
    public function insertData($post)
    {
        $name = $this->con->real_escape_string($_POST['name']);
        $email = $this->con->real_escape_string($_POST['email']);
        $phone = $this->con->real_escape_string($_POST['phone']);
        $size = $this->con->real_escape_string($_POST['size']);
        $toppings = isset($_POST['toppings']) ? $_POST['toppings'] : [];
        $toppingsSerialized = serialize($toppings);
        $crust = $this->con->real_escape_string($_POST['crust']);

        $query = "INSERT INTO orders (name, email, phone, size, toppings, crust) 
              VALUES ('$name', '$email', '$phone', '$size', '$toppingsSerialized', '$crust')";

        $sql = $this->con->query($query);

        if ($sql) {
            header("Location: index.php?msg1=insert");
        } else {
            echo "Error: " . $this->con->error;
        }
    }
}
?>