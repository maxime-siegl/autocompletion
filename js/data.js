$.getJSON('json/api-result1.json', function(data) {
    console.log(data['query']['pages']);
    jQuery.each(data['query']['pages'], function(index, value){
      console.log(value['title'] + value['extract']);
    })
})
