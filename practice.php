<?php


class Car {
    
    private $make;
    private $model;
    private $year;
    

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    function get_make(){
       return $this->make;
    }
    function get_model(){
       return $this->model;
    }
    function get_year(){
       return $this->year;
    }

   
}

$car = new Car("Toyota", "Camry", 2020);
echo $car->get_make()."<br>";
echo $car->get_model()."<br>";
echo $car->get_year()."<br>";


/*Build a class that represents a user, with properties for their name, email,
 and password, and methods for logging in and logging out.*/

class User {
    private $name;
    private $email;
    private $password;
    private $isLoggedIn = false;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function login($email, $password) {
        if ($email == $this->email && $password == $this->password) {
            $this->isLoggedIn = true;
            echo "You are now logged in.\n";
        } else {
            echo "Invalid email or password.\n";
        }
    }

    public function logout() {
        $this->isLoggedIn = false;
        echo "You are now logged out.\n";
    }
}

// Create a new user object
$user = new User("John Doe", "johndoe@example.com", "password");

// Try logging in with correct credentials
$user->login("johndoe@example.com", "password")."<br>";

// Try logging in with incorrect credentials
//$user->login("johndoe@example.com", "wrongpassword")."<br>";

// Log out
//$user->logout();
echo "<br>";
echo "<hr>";


/*Develop a class that represents a shopping cart, with methods for adding and removing items, calculating the total price, and checking out. */

class ShoppingCart {
    private $items = array();
    /*In this code, we first define the ShoppingCart class with an empty $items array to store the items that are added to the cart. We also define four methods: */


/*addItem() - Takes an item name and price as arguments and adds it to the cart if it is not already in the cart. */
    public function addItem($item, $price) {
        if (!isset($this->items[$item])) {
            $this->items[$item] = $price;
            echo "$item added to cart for $price dollars.\n <br>";
            
        } else {
            echo "$item is already in the cart.\n <br>";
        }
    }
    /*removeItem() - Takes an item name as an argument and removes it from the cart if it exists. */
    
    public function removeItem($item) {
        if (isset($this->items[$item])) {
            $price = $this->items[$item];
            unset($this->items[$item]);
            echo "$item removed from cart for $price dollars.\n <br>";
            
        } else {
            echo "$item is not in the cart.\n<br>";
        }
    }

    /*calculateTotal() - Calculates the total price of all items in the cart. */
    public function calculateTotal() {
        $total = 0;
        foreach ($this->items as $price) {
            $total += $price;
        }
        echo "<hr>";
        echo "Total price: $total dollars\n <br>";
        echo "<hr>";
    }
    
    /*checkout() - Empties the cart and completes the checkout process.
 */
    public function checkout() {
        if (!empty($this->items)) {
            echo "Checkout completed. Thank you for your purchase!\n <br>";
            $this->items = array();
        } else {
            echo "Nothing to checkout.\n<br>";
        }
    }
}

// Create a new shopping cart object
$cart = new ShoppingCart();

// Add items to cart
$cart->addItem("Shirt", 25);
$cart->addItem("Pants", 40);
$cart->addItem("Shoes", 80);

// Try adding item that is already in cart
//$cart->addItem("Shirt", 25);

// Remove item from cart
$cart->removeItem("Shoes");

// Calculate total price
$cart->calculateTotal();

// Checkout
$cart->checkout();


/*Build a class that represents a blog post, with properties for the title, content, author, and date, and methods for displaying the post and updating it. */
class BlogPost {
    private $title;
    private $content;
    private $author;
    private $date;
  
    public function __construct($title, $content, $author, $date) {
      $this->title = $title;
      $this->content = $content;
      $this->author = $author;
      $this->date = $date;
    }
  
    public function display() {
      echo "<h2>{$this->title}</h2>";
      echo "<p>By {$this->author} on {$this->date}</p>";
      echo "<p>{$this->content}</p>";
    }
  
    public function update($title, $content, $author, $date) {
      $this->title = $title;
      $this->content = $content;
      $this->author = $author;
      $this->date = $date;
    }
  }
  $post = new BlogPost("My First Blog Post", "Hello, world!", "John Doe", "2023-04-26");
$post->display();
$post->update("My second blog post","hello everyone","salman","26-4-2022");
$post->display();

//discount calculate by oop 
class Product {
    private $price;

    public function __construct($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function calculateDiscount($discountPercentage) {
        $discountAmount = $this->price * $discountPercentage;
        return $this->price - $discountAmount;
    }
}

$product = new Product(100.0);
$discountPercentage = 0.23;
$discountedPrice = $product->calculateDiscount($discountPercentage);

echo "Original Price: \${$product->getPrice()}\n";
echo "<br>";
echo "Discount Percentage: " . ($discountPercentage * 100) . "%\n";
echo "<br>";
echo "Discounted Price: \${$discountedPrice}\n";

echo "<hr>";

/*Develop a class that represents a calculator, with methods for performing basic arithmetic operations like addition, subtraction, multiplication, and division. */
class Calculator {
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        if ($num2 == 0) {
            throw new InvalidArgumentException("Division by zero");
        }
        return $num1 / $num2;
    }
}

// Example usage
$calculator = new Calculator();

echo "Addition: " . $calculator->add(5, 3) . "\n <br>";
echo "Subtraction: " . $calculator->subtract(5, 3) . "\n<br>";
echo "Multiplication: " . $calculator->multiply(5, 3) . "\n<br>";
echo "Division: " . $calculator->divide(5, 3) . "\n";
echo "<hr>";

/*Create a class that represents a contact form, with properties for the user's name, email, and message, and methods for submitting the form and sending an email. */
class ContactForm {
    private $name;
    private $email;
    private $message;
  
    public function __construct($name, $email, $message) {
      $this->name = $name;
      $this->email = $email;
      $this->message = $message;
    }
  
    public function submitForm() {
      // code to submit the form to a database or other storage system goes here
    }
  
    public function sendEmail($recipient) {
      $subject = "New message from " . $this->name;
      $body = "From: " . $this->name . "\n";
      $body .= "Email: " . $this->email . "\n\n";
      $body .= $this->message;
  
      $headers = "From: " . $this->email . "\r\n";
      $headers .= "Reply-To: " . $this->email . "\r\n";
      $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
  
      return mail($recipient, $subject, $body, $headers);
    }
  }
  // create a new contact form instance
$form = new ContactForm("John Doe", "johndoe@example.com", "Hello, I'm interested in your products!");

// submit the form data to a database or other storage system
$form->submitForm();

// send an email notification to the website owner
$recipient = "websiteowner@example.com";
$result = $form->sendEmail($recipient);

if ($result) {
  echo "Your message has been sent.";
} else {
  echo "There was an error sending your message.";
}

echo "<hr>";
/*Build a class that represents a weather forecast, with properties for the location, date, and temperature, and methods for retrieving the forecast and displaying it. */
class WeatherForecast {
    private $location;
    private $date;
    private $temperature;
  
    public function __construct($location, $date, $temperature) {
      $this->location = $location;
      $this->date = $date;
      $this->temperature = $temperature;
    }
  
    public function getForecast() {
      // code to retrieve the weather forecast from a weather API or database goes here
      // for this example, we'll just return a static forecast
      return "The weather in " . $this->location . " on " . $this->date . " will be " . $this->temperature . " degrees Celsius.";
    }
  
    public function displayForecast() {
      $forecast = $this->getForecast();
      echo $forecast;
    }
  }
// create a new weather forecast instance
$forecast = new WeatherForecast("dhaka", "April 26th", 36);

// display the forecast
$forecast->displayForecast();
echo "<hr>";
/*Develop a class that represents a login form, with methods for validating the user's credentials and redirecting them to the appropriate page. */
 class LoginForm {

    private $username;
    private $password;
    
    public function __construct($username, $password) {
      $this->username = $username;
      $this->password = $password;
    }
    
    public function validate() {
      // Add your logic for validating the user's credentials here
      // For example, you might check if the username and password are valid by querying a database or some other source of truth
      if ($this->username === 'valid_username' && $this->password === 'valid_password') {
        return true;
      } else {
        return false;
      }
    }
    
    public function redirect() {
      // Add your logic for redirecting the user to the appropriate page here
      // For example, you might redirect them to a dashboard page if they are an admin, or to a profile page if they are a regular user
      if ($this->username === 'admin') {
        header('Location: admin_dashboard.php');
      } else {
        header('Location: user_profile.php');
      }
    }
}
  $loginForm = new LoginForm('username', 'password');
  if ($loginForm->validate()) {
    // Redirect the user to the appropriate page
    $loginForm->redirect();
  } else {
    // Display an error message to the user
    echo 'Invalid username or password';
  }



  /*Build a class that represents a quiz, with properties for the questions, possible answers, and correct answers, and methods for displaying the quiz, grading the answers, and providing feedback to the user. */
  class Quiz {
    private $questions;
    private $options;
    private $answers;

    public function __construct($questions, $options, $answers) {
        $this->questions = $questions;
        $this->options = $options;
        $this->answers = $answers;
    }

    public function display() {
        for ($i = 0; $i < count($this->questions); $i++) {
            echo ($i + 1) . ". " . $this->questions[$i] . "<br>";
            foreach ($this->options[$i] as $option) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $option . "<br>";
            }
            echo "<br>";
        }
    }

    public function grade($responses) {
        $score = 0;
        $feedback = array();
        for ($i = 0; $i < count($this->answers); $i++) {
            if ($responses[$i] === $this->answers[$i]) {
                $score++;
                $feedback[] = "Correct!";
            } else {
                $feedback[] = "Incorrect. The correct answer is " . $this->answers[$i] . ".";
            }
        }
        return array($score, $feedback);
    }
}
// Create a quiz
$questions = array("What is the capital of France?", "What is the tallest mountain in the world?");
$options = array(
    array("A. London", "B. Paris", "C. Rome"),
    array("A. Mount Everest", "B. Mount Kilimanjaro", "C. Mount McKinley")
);
$answers = array("B", "A");
$quiz = new Quiz($questions, $options, $answers);

// Display the quiz
$quiz->display();

// Grade the quiz
$responses = array("B", "B");
list($score, $feedback) = $quiz->grade($responses);
echo "You scored " . $score . "/" . count($questions) . " points.<br>";
foreach ($feedback as $index => $message) {
    echo "Question " . ($index + 1) . ": " . $message . "<br>";
}

  

?>