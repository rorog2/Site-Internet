//FONCTION D'AFFICHAGE
function display(){
	//Variable bouton radio
	var titre_h1 = document.getElementById("titre_h1");
	var titre_h2 = document.getElementById("titre_h2");
	var titre_h3 = document.getElementById("titre_h3");
	var titre_h4 = document.getElementById("titre_h4");
	var paragraphe = document.getElementById("paragraphe");
	var attention = document.getElementById("attention");
	var image = document.getElementById("image");
	var code = document.getElementById("code");
	var math = document.getElementById("math");

	//Variables formulaires
	var form_h1 = document.getElementById("form_h1");
	var form_h2 = document.getElementById("form_h2");
	var form_h3 = document.getElementById("form_h3");
	var form_h4 = document.getElementById("form_h4");
	var form_paragraphe = document.getElementById("form_paragraphe");
	var form_attention = document.getElementById("form_attention");
	var form_image = document.getElementById("form_image");
	var form_code = document.getElementById("form_code");
	var form_math = document.getElementById("form_math");

	if(titre_h1.checked === true){
		form_h1.style.display = 'inline';
	}
	else{
		form_h1.style.display = 'none';
	}

	if(titre_h2.checked === true){
		form_h2.style.display = 'inline';
	}
	else{
		form_h2.style.display = 'none';
	}

	if(titre_h3.checked === true){
		form_h3.style.display = 'inline';
	}
	else{
		form_h3.style.display = 'none';
	}

	if(titre_h4.checked === true){
		form_h4.style.display = 'inline';
	}
	else{
		form_h4.style.display = 'none';
	}

	if(paragraphe.checked === true){
		form_paragraphe.style.display = 'inline';
	}
	else{
		form_paragraphe.style.display = 'none';
	}

	if(attention.checked === true){
		form_attention.style.display = 'inline';
	}
	else{
		form_attention.style.display = 'none';
	}

	if(image.checked === true){
		form_image.style.display = 'inline';
	}
	else{
		form_image.style.display = 'none';
	}

	if(code.checked === true){
		form_code.style.display = 'inline';
	}
	else{
		form_code.style.display = 'none';
	}

	if(math.checked === true){
		form_math.style.display = 'inline';
	}
	else{
		form_math.style.display = 'none';
	}
}

//FONCTION DE VERIFICATION F1
function verification_h1(){
	var form_h1 = document.getElementById("form_h1");
	var h1 = document.getElementById("h1");
	if(h1.value === ""){
		alert('Le formulaire est vide !');
		form_h1.reset();
	}
}




//FONCTION DE MATH
function fraction(){
	var fraction = "<math>\frac{2}{3}</math>"
	var zone = document.getElementById("zone_math");
	zone.innerText = fraction;
}