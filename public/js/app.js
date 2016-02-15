"use strict"

function watchers(){
$("button").on('click', function(){
	var id = $(this).attr('counter-id');
		incrementCounter(id);
});
}

function incrementCounter(id){
	$.getJSON(baseURL + '?ajax=increment&id=' + id, function(data){
		console.log(data);
		$("#herecomethenumber").html(data.count);
	} );
}

watchers();