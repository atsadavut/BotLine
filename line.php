 <?php
  

function send_LINE($msg){
 $access_token = 'yeEwHBEXRsDDJtsY2ePxPL+lrVnF55C0Z8Jo80dVCX8lCjwnr6GGrAAG/F+jx5NbaUAkC00bm6PDoK+dj9yWYdMlulN2h+cHmz7JJJRQSQl2z7HpZMBj6tfST8xIkfl2AQzshO8qLi4r+Uc4BT86YAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ud71e07a36fb64394e79e11ab73277e32',
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
