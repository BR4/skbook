window.onload = start;

function start(){

        params={};
        params.action="addBook";
        $('#popupbox').load('index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })
}

$(document).ready(function(){ 
	$('#addBook').click(function(){
        params={};
        params.action="addBook";
        $('#popupbox').load('index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })
    })	
})
 
NS={};