<html>
    <meta name="viewport" content="width-device-width, initial-scale=1">

    <body>
        <h1>Hello, <?php echo $clientIP; ?></h1>
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
        
        <df-messenger
          intent="WELCOME"
          chat-title="AnChayHomNay"
          agent-id="c7af73d5-fbdb-41b0-8404-20956c9c8c6e"
          language-code="en"
        ></df-messenger>
    </body>
</html>