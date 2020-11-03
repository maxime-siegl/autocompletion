$('#search').click(function(){

    $('#recherche').hide();

    $.ajax({
        url : 'traitement/full_acteur.php',
        type : 'GET',

        success : function(){
            let table = $('<table id="table"></table>');
            let thead = $('<thead id="thead"></thead>');
            let tbody = $('<tbody id="tbody"></tbody>');


            $(main).append(table);
            table.append(thead);
            table.append(tbody);

            for(let i = 0; i < result.length; i++){
                let tr = $('<tr></tr>');
                let td_nom = $('<td>'+ result[i]['nom'] +'</td>');
                let td_desc = $('<td>'+ result[i]['description'] +'</td>')

                tbody.append(tr);
                tbody.append(td_nom);
                tbody.append(td_desc);
            }

            console.log("il doit y avoir le tableau ??");
        },
        error : function(){
            $(main).html("Ca ne marche pas");
            console.log(data);
        }
    });

});