<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title> Synth-City about | Liam Crawshaw</title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="../css/pwa.css" rel="stylesheet">
    
</head>

<body>
    <div id="masthead">
        
        <header class="wrapper">

    <div id="company-logo">
        <img id="logo" src="../synth-city.png" alt="synth-city logo">
    </div>

                <nav class="navbar navbar-default navbar-static-top">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                      <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                          <li class="active"><a href="../index.html">Home <span class="sr-only">(current)</span></a></li>
                          <li><a href="../avd.html">Analog vs Digital</a></li>
                          <li><a href="../origin.html">Origins</a></li>
                          <li><a href="../types.html">Types of Synths</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                      </div><!--/.nav-collapse -->
                    </div>
                  </nav>

        </header>

    </div>

    <div id="content-outer">

        <main class="wrapper">
        <div>
        <h1>Thank you!</h1>
                <br>
                <h3>Our records show you submitted the following:<br><br>
                  Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br> <br>
                  Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br> <br>
                  Question: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8'); ?><br> <br>
                </p>  
        </main>
        </div>

    </div>

    <div id="footer-outer">
        <footer class="wrapper">
            
            <p>Synth-City &copy; 2020</p>
        
        </footer>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>