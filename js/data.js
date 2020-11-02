function insert_data(fichier) {
  $.getJSON(fichier, function(data) {
      jQuery.each(data['query']['pages'], function(index, value){

      $.ajax({
        url:'insert_into_db.php',
        type: 'POST',
        data: {
          title: value["title"],
          extract: value["extract"]
        },
        success: function(){
          console.log("Test réussi");
        },

        error: function(){
          console.log("Ajax n'a pas fonctionné.");
        }

      });

      })

  })
}

insert_data('json/api-result1.json');
insert_data('json/api-result2.json');
insert_data('json/api-result3.json');
insert_data('json/api-result4.json');
insert_data('json/api-result5.json');
