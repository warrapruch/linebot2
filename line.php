 <?php
  

function send_LINE($msg){
 $access_token = 'eIxz8LWlLAlOqC1/lLL/e3LHq7vY84as/JY9ZqPCYn8lTrQPFcCQBKouwHoy0NnngTTAhxO5SIrmOQPHcSKpZ7nSauF+oOHz84VVRM3jPPWe9ayJrA5RLiK5raC635bWZl2jjj+I1E4ahqvdYpxVmAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U94c08ddc8b6b198480ebfd699145aee6',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
