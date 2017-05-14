<?php
session_start();

if (isset ($_POST['json-resume']) ){
    $resume=$_POST['json-resume'];
    echo $resume;
}
<!DOCTYPE HTML>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <title>jQuery AutoBars Example</title>

  <link rel="stylesheet" href="boilerplate.css">

  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="jquery-autobars.js" type="text/javascript"></script>
  <script src="resume.hbs" type="text/x-handlebars-template"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).autoBars(function() {
        $.getJSON("resume.json", function(json) {

          var data = { "resume" : json};

          var $html = $.handlebarTemplates['boilerplate'](data);
          $('body').append($html);
        })
        .fail(function(jqxhr, textStatus, error) {
           var err = textStatus + ", " + error;
           console.log( "Request Failed: " + err );
         });
      });
    })
  </script>
</head>
<body>
</body>
