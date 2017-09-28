
function edit_bitcoin(){
	document.bitcoin.action = "edit.php";
	document.bitcoin.submit();
}

function delete_bitcoin(){
	document.bitcoin.action = "delete.php";
	document.bitcoin.submit();
}

function view_bitcoin(){
	document.bitcoin.action = "./view/view.php";
	document.bitcoin.submit();
}