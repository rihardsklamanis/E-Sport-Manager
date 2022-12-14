<!-- form for findMethod() test -->
<form action="#" method="POST">
    <label for="test">Test input:</label><br>
    <input type="text" id="test" name="test" placeholder="Enter test text...">
    <input type="submit" placeholder="Submit Test">
</form> 
<button><a href="Request.php">Refresh</a></button><br>

<?php
class Request
{
        // Declaring variables
        private $method;
        private $uri;
    
    // Find current request type (GET, POST, PUT, DELETE)
    function findMethod()
    {
        // Detecting request type
        $this->method = $_SERVER['REQUEST_METHOD'];

        // Outputing request type
        if ($this->method == 'GET') {
            echo 'Method is GET <br>';
        } elseif ($this->method == 'POST') {
            echo 'Method is POST <br>';
        } elseif ($this->method == 'PUT') {
            echo 'Method is PUT <br>';
        } elseif ($this->method == 'DELETE') {
            echo 'Method is DELETE <br>';
        } else {
            echo 'Method is Unknown <br>';
        }
    }

    // Find user side URI
    function getURI()
    {
        // Get URI 
        $this->uri = $_SERVER['REQUEST_URI'];

        // Outputing URI
        echo $this->uri . '<br>';
    }
}

// Calling for class and methods
$r = new Request();
$r->findMethod();
$r->getURI();

?>
