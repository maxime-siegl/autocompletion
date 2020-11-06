var url = window.location.href;
console.log(url);

if (url === 'http://localhost/autocompletion/index.php' || url === 'http://localhost/autocompletion/'){
    $('#philosophes_header').hide();
}else{
    $('#philosophes_header').show();
}