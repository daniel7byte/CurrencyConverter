<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flatly.min.css">
    <script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="col-md-6">
        <h1>Currency Converter</h1>
        <hr>
        <div class="form-group">
          <input class="form-control" type="number" id="a" value="1">
        </div>
        <div class="form-group">
          <select class="form-control" id="from">
            <?php include('countries.php'); ?>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" id="to">
            <?php include('countries.php'); ?>
          </select>
        </div>
        <button id="convert" class="btn btn-primary btn-lg btn-block">Convert</button>
        <hr>
        <div class="form-group">
          <h3 id="result"></h3>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $('#convert').click(function(){
        $.ajax({
          type: 'GET',
          url: 'request.php',
          data: {
            origen : $('#from').val(),
            destino : $('#to').val(),
            cantidad : $('#a').val()
          },
		  beforeSend: function() { $('#result').html('Loading...'); },
          success: function(result){
            $('#result').html(result);
          }
        });
      });
    </script>
  </body>
</html>
