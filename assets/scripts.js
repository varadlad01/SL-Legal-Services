// preloader
$(window).on("load",function() { 
	$("#status").fadeOut("fast"); 
	$("#preloader").delay(500).fadeOut("slow"); 
})

// smooth scroll
let anchorlinks = document.querySelectorAll('a[href^="#"]')
for (let item of anchorlinks) { 
	item.addEventListener('click', (e)=> {
		let hashval = item.getAttribute('href')
		let target = document.querySelector(hashval)
		target.scrollIntoView({
			behavior: 'smooth',
			block: 'start'
		})
		history.pushState(null, null, hashval)
		e.preventDefault()
	})
}




