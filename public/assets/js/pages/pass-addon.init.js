$("#password-addon").on("click", (function () {
	$(this).siblings("input").length > 0 && ("password" == $(this).siblings("input").attr("type") ? $(this).siblings("input").attr("type", "input") : $(this).siblings("input").attr("type", "password"))
}));