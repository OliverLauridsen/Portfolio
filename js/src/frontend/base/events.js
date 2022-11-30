// Will run when DOM is loaded
$(document).ready(function () {
	// Add your methods here
	projectFunctions.generalFunctions.init();
	projectFunctions.frontPage.init();
	projectFunctions.myWork.init();

	//next line are just an example of how to use the so_ajax function with the example_method from ajax/methods folder
	//delete this as is not neccessary for your project
	var data = {
		action: "example_method",
		testData: "data",
	};
	do_ajax(AjaxMethodsUrl, data, function (response, data) {
		console.log(
			"======== response from the ajax request to example_data method ========="
		);
		console.log(response);
	});
});

// Will run when the page is fully loaded - including graphics.
$(window).load(function () {
	// Add your methods here
});
