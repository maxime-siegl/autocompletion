$( function() {

  $( "#philosophes" ).autocomplete({
    source: function(request) {
      console.log(request.term);
      $.ajax({
        url: "charge_db.php",
        type: "POST",
        data: {
          term: request.term
        }
      })
    }
  });
} );
