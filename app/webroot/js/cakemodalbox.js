function closeModalbox()
{
	if ($('closeModalbox')) {
		// hide the modal box
		Modalbox.hide();
		// refresh the current page
		location.reload(true);
	} else {
		// resize to content (in case of validation error messages)
		Modalbox.resizeToContent()
	}
	return true;
}
