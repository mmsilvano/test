<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
</head>
<body>
    
    <script>
  
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;
  
      var pusher = new Pusher('a1ee5f5d49723ad92971', {
        cluster: 'ap2',
        forceTLS: true
      });
  
      var channel = pusher.subscribe('channel1');
      channel.bind('testEvent', function(data) {
        alert("testEvent");
      });
    </script>
</body>
</html>