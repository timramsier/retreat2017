
$(window).on("load",function(){
	//set bringing guest section on load
	checkGuest();
	//set guest name section on load
	checkGuestName();
})


//Handle the toggling of the bringing a guest section
$("select[name=main_company]").change(function(){
	checkGuest();
	checkGuestName();
})

//Handle the toggling of the guest name section
$("div.guestRadio input[type=radio]").change(function(){
	checkGuestName();
})

// check if guest is set to true for company then display bringing guest radio input accordingly
function checkGuest(){
	if ($("select[name=main_company] option[value='" + $("select[name=main_company]").val() +"']").attr("guest") === "1") {
		$("div.guestRadio").show();
	} else {
		$("div.guestRadio input[value=yes]").prop("checked",false);
		$("div.guestRadio input[value=no]").prop("checked",true);
		$("div.guestRadio").hide();
	};
}

//check if bringing guest radio input is set to "Yes" and then displaying guest name input
function checkGuestName(){
	if ($("div.guestRadio input[value=yes]:checked").length > 0) {
		$("input[name=main_guestName]").parent().show();
	} else {
		$("input[name=main_guestName]").parent().hide();
		$("input[name=main_guestName]").val("");
	};	
}