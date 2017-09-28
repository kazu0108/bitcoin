function edit_users(){
	document.users.action = "editusers.php";
	document.users.submit();
}

function delete_users(){
	document.users.action = "deleteusers.php";
	document.users.submit();
}

function view_users(){
	document.users.action = "viewusers.php";
	document.users.submit();
}