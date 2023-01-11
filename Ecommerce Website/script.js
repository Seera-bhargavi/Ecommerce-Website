function NavToggle(){
	// alert('working');
	document.getElementById('nav').classList.toggle('toggle');
}

let image_list = document.querySelectorAll('.picture');
console.log(image_list);
// let main_frame = document.querySelector('.main-image-container');
let main_frame = document.querySelector('.image-container');

image_list.forEach(image =>{
	image.onclick = ()=>{
		if(image.classList.contains('picture')){
			console.log(image);
		src = image.getAttribute('src');
		console.log(src);
		main_frame.src = src;
	}
}
});