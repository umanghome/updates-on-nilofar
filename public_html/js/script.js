$(document).ready(function() {

	var updateForm = $("#updateForm");
	var updateBtn = $("#postUpdate");

	updateBtn.click(function() {
		updateForm.removeClass("hidden");
	});

	var updateInput = $("#updateContent");
	var updateCharCount = $("#updateCharCount");

	updateInput.keyup(function() {
		if ((500 - updateInput.val().length) < 100)
		{
			updateCharCount.addClass("red");
			updateCharCount.removeClass("white");
		}
		else
		{
			updateCharCount.removeClass("red");
			updateCharCount.addClass("white");
		}


		updateCharCount.html(500 - updateInput.val().length);
	});

});