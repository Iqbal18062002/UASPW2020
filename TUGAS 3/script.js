function insert(num){
	document.form.textarea.value = document.form.textarea.value + num;
}

function hasop(){
	var hasil = document.form.textarea.value;
	document.form.textarea.value = eval(hasil);
}


function kosong(){
	document.form.textarea.value = "";
}


function hapus(){
	var hasil = document.form.textarea.value;
	document.form.textarea.value = hasil.substring(0,hasil.length-1);
}