
$( document ).ready(function() {



  $.ajax({

    url: 'getallpagamenti.php',
    method: 'get',
    success: function(data) {
      console.log(data);

      var stampo = $('#output')
      for (var cicli of data) {
        stampo.append('<li>' + cicli + '</li>')
      }

    },
    error: function(err){
      console.log(err);
    }
  });



});
