let videoList = document.querySelectorAll('.video-list-container.list');

videoList.forEach(vid =>){
	vid.onclick = () =>{
		let src = vid.querySelector('.list-video').src;
		let  title = vid.querySelector('.list-title';).innerHTML;
		document.querySelector('.main-video-container.main-video').src = src;
		document.querySelector('.main-video-container.main-video').play();
		document.querySelector('.main-video-container.main-vid-title').innerHTML = title;
		
	};
	