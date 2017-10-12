$(window).on("load",function(){

selectGroup("#activitiesGroup.select-group select");

updateChoicePanel("choice", "activityChoice", 1)
updateChoicePanel("choice", "activityChoice", 2)
updateChoicePanel("choice", "activityChoice", 3)

$(".select-group select").val("null")
})


// selectGroup addin
function selectGroup(selectTarget){
	var selectInputs = $(selectTarget),
			selectOptions = $(selectInputs[0]).find('option');

	// add select-index attribute and disable all but first one
	for (var i = selectInputs.length - 1; i >= 0; i--) {
		$(selectInputs[i]).attr("select-index",i)
		if (i !== 0) {$(selectInputs[i]).attr("disabled","true")}
	};

	// update the options on the next select input
	function updateOptions(selectIndex,exceptThis){
		var updateIndex = Number(selectIndex) + 1,
		innerSelect = $(selectInputs)[selectIndex].innerHTML;
		selectToUpdate = $(selectTarget + "[select-index=" + updateIndex + "]");

		selectToUpdate.html(innerSelect);
		selectToUpdate.find("option[value=" + exceptThis + "]").remove();
		selectToUpdate.val("null");
		$(selectTarget).not(".required").find("option[value='null']").text("- Optional -");
	}

	//advances the select group input 
	function nextSelect(selectIndex,thisObject){

		if (thisObject.val() === "null") {var adj = 0} else {var adj = 1}
		
		selectInputs.each(function(){
			if ($(this).attr("select-index") > Number(selectIndex) + adj) {
				$(this).html("");
				$(this).attr("disabled",true);
			} else {
				$(this).attr("disabled",false);
			};
		});

		updateOptions(selectIndex,thisObject.val());

	}

	$(selectTarget).on("change",function(){
		nextSelect($(this).attr("select-index"),$(this));
	});
}

// ajax code to load custom forms based on select group
function updateChoicePanel(baseRootId, baseUpdateId, indexNum){

	$("#" + baseRootId + indexNum).on("change",function(){
		if (!isNaN(Number($(this).val()))) {
			var panelValue = Number($(this).val()) + 1;
		} 
		else {
					var panelValue = $(this).val();
		};

		var	url = "./app/forms/panels/activityChoice.panel." + panelValue + ".php";
		$.ajax(url).done(function(response){
			$("#" + baseUpdateId + indexNum).html(response);
			//updates choiceNum if it exists
			$("#" + baseUpdateId + indexNum + " .choiceNum").val(indexNum);

			//preload images
			preloadImage($("#" + baseUpdateId + indexNum + " .updateBackground").attr("href"));
		})
	})
}

function preloadImage(url)
{		
	if(url){
		var img=new Image();
    img.src=url;
	}
}


