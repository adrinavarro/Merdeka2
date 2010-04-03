function toggle() {
	div = "#navigation";
	div2 = "#displaybar";
	if($(div).is(":visible")) {
		$(div2).hide();
		$(div).slideUp("slow");
		$(div2).show();
	} else {
		$(div).slideDown("slow");
	}
}