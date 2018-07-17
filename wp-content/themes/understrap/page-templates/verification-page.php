<?php
/**
 * Template Name: Verification Page
 *
 * Template for displaying a verification page
 *
 * @package understrap
 */

/*if(isset($_POST['mnumber'])){
  $auth_id = "MANWM4ZMZMNGFLYJU0YZ";
    $auth_token = "OTQ1Yzc4OWI0MmY1ZTdlNjViNDE4ZTBjZDQ3MjJh";

    $p = new RestAPI($auth_id, $auth_token);

    // Set message parameters
    $params = array(
        'src' => '61413183361', // Sender's phone number with country code
        'dst' => '861712498578', // Receiver's phone number with country code
        'text' => 'Hi, Message from Plivo'.$_POST['mnumber'], // Your SMS text message
        // To send Unicode text
        //'text' => 'こんにちは、元気ですか？' # Your SMS Text Message - Japanese
        //'text' => 'Ce est texte généré aléatoirement' # Your SMS Text Message - French
        'url' => 'http://example.com/report/', // The URL to which with the status of the message is sent
        'type' => 'sms',
        'method' => 'POST' // The method used to call the url
    );
    // Send message
    $response = $p->send_message($params);

    // Print the response
    echo "Response : ";
    print_r ($response['response']);

    // Print the Api ID
    echo "<br> Api ID : {$response['response']['api_id']} <br>";

    // Print the Message UUID
    echo "Message UUID : {$response['response']['message_uuid'][0]} <br>";
}*/
get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="full-width-page-wrapper">

  <div class="<?php echo esc_attr($container); ?>" id="content">

    <div class="container">

      <h2 class="text-center">Choose Your Diamond</h2>
      <div class="col-md-4">
        
      </div>
    <form method="post">
      Name:<br>
      <input type="text" name="firstname"><br>
      Moblie Number:<br>
      <input type="text" name="mnumber">
      <input type="submit" value="Submit">
    </form>
  </div>

  </div>

</div>


<?php get_footer(); ?>
