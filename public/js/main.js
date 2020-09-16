
function myFunction() {
    alert("test");
    changePannel();
}

function changePannel() {
    if ($('.button-selector').text() == "PREV") {
        $('.records').toogleClass('hide');
        $('.forecast').toogleClass('show');

    }
    else {
        $('.records').toogleClass('hide');
        $('.forecast').toogleClass('show');
    }
}




