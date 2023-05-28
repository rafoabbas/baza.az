$(document).ready(function() {
	//header mob-nav
	$('.header__burger-meny').on('click', function(){
		$('.header__mobile-nav').slideToggle(500,function(){
			if($(this).is(":visible ")){
				$('.header__burger-meny').addClass('actic-mob-nav');
				$('.header__top').addClass('hide-header-element');
			}
			else{
				$('.header__burger-meny').removeClass('actic-mob-nav');
				$('.header__top').removeClass('hide-header-element');
			}
		});
	});

	//header hide show
	let header = $('header'),
	 scrollPrev = 0;

	$(window).scroll(function() {
		let scrolled = $(window).scrollTop();
		if ( scrolled > 100 && scrolled > scrollPrev ) {
			header.addClass('out');
		} else {
			header.removeClass('out');
		}
		scrollPrev = scrolled;
	});

	//header lang, money select
	$('.header__select-list span').on('click',function(){
		$(this).closest('.header__select-list').find('ul').slideToggle(200);
	});

	$(document).mouseup( function(e){ // событие клика по веб-документу
		var div = $( ".header__select-list" ); // тут указываем ID элемента
		if ( !div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
			div.find('ul').slideUp(200); // скрываем его
		}
	});


	//car search list components______________________
	$(function(){
		let searchElement = $('.list-car-search__search-line input');
		let listItemSearchElement = $('.list-car-search__decision-list li');

		//open / close
		searchElement.on('click', function(){
			$(this).closest('.list-car-search').find('.list-car-search__decision').slideDown(300);
		});

		$(document).mouseup( function(e){ // событие клика по веб-документу
			if ( !searchElement.is(e.target) // если клик был не по нашему блоку
			    && searchElement.has(e.target).length === 0 ) { // и не по его дочерним элементам
			    closeListCar();
			}
		});


        // Save current value of element
        searchElement.data('oldVal', searchElement.val());


		//searc value
		searchElement.bind("change keyup input paste", function(event){
	      searchInputValue = $(this).val();
	      if ($(this).data('oldVal') != searchInputValue) {
	       // Updated stored value
	       $(this).data('oldVal', searchInputValue);
	       let thisSearch = $(this);

	       currenSearchValue(searchInputValue , thisSearch);
	     }

	    });

	    listItemSearchElement.on('click',function(){
	    	selectValue($(this));
	    })

        function currenSearchValue(inpValue , thisSearch){
        	let loyCaseValue = inpValue.toLowerCase();
        	let navSearchElements = loyCaseValue.length;
        	let currienList = thisSearch.closest('.list-car-search').find('.list-car-search__decision-list li');

            $.each(currienList, function(index, val) {
            	let valyeThisListElement = $(this).text().toLowerCase();

            	if(navSearchElements > 0){
            		for (let i = 0; i < navSearchElements; i++) {
	     				if(valyeThisListElement[i] == loyCaseValue[i]){
		            		$(this).removeClass('hideResoultSearch');
		            	}
		            	else{
		            		$(this).addClass('hideResoultSearch');
		            	}
	     			}
            	}
            	else{
            		$(this).removeClass('hideResoultSearch');
            	}
            });
        }

        function selectValue(currentElementList){
        	let valueTextInfo = currentElementList.text();
        	let inputSearchValue = currentElementList .closest('.list-car-search').find('.list-car-search__search-line input');

        	inputSearchValue.val(valueTextInfo);
        }

		function closeListCar(){
			searchElement.closest('.list-car-search').find('.list-car-search__decision').slideUp(300); // скрываем его
		}
	})

	//___________________________________________________


	// ADVANCE CAR SEARCH SCRIPTS START

		//Exclude car search
		// add
		$('.exclude-box__add-btn').on('click',function(){
			let excludeLineLayout = $(this).closest('.exclude-claster').find('.exclude-clasder__currient .exclude-claster__row').first();
			let exclueConteiner = $(this).closest('.exclude-claster').find('.exclude-claster__new-elements');
			$(excludeLineLayout).clone().addClass('exclude-new-row').appendTo(exclueConteiner);

			//remove
			$('.exclude-remove').on('click',function(){
				$(this).closest('.exclude-claster__row').remove();
			});
		});


		//advanced car fixed search resault
		$(function(){
			var fixedElement = $('.fixed-scrol-element')
			if(fixedElement.length){
				fixedElementPlagin(fixedElement);
			}
			else{
				return false;
			}
		});

		function fixedElementPlagin(fixedElementDiv){
			let widthConteiner = $('.advanced-car-search__setings-search').width();
			let heightConteiner = $('.advanced-car-search__setings-search').height();
			console.log(widthConteiner);
			fixedElementDiv.css({
				'width': widthConteiner + "px"
			})
			$(window).scroll(function(event) {
				var the_top = $(document).scrollTop();
				var the_footer = $('footer').offset().top - heightConteiner;
				console.log(the_footer)
			    if (the_top > the_footer ) {
			        fixedElementDiv.addClass('fixed_box-element-activ');
			    }
			    else {
			        fixedElementDiv.removeClass('fixed_box-element-activ');
			    }
			});
		}


		//advanced car search acordeon
	$('.acordeon-element__title').on('click', function(){
		$(this).closest('.acordeon-element').children('.acordeon-element__claster').slideToggle(500,function(){
			if($(this).is(':visible')){
				$(this).closest('.acordeon-element').addClass('activ-acordeon');
				// if($('.fixed-bottom-site-bar').lenght){
				// 	bottomSiteBar();
				// }
			}
			else{
				$(this).closest('.acordeon-element').removeClass('activ-acordeon');
				// if($('.fixed-bottom-site-bar').lenght){
				// 	bottomSiteBar();
				// }
			}
		});
	});



	// ADVANCE CAR SEARCH SCRIPTS END


	//input only nambers
	jQuery.fn.ForceNumericOnly = function() {
	    return this.each(function()
	    {
	        $(this).bind("change keyup input click", function() {
	            if (this.value.match(/[^0-9]/g)) {
	                this.value = this.value.replace(/[^0-9]/g, '');
	            }
	        });
	    });
	};
	$(".input-main__prise-inp input").ForceNumericOnly();


	//tab search main
	$('.main-search__type-car-element').on('click',function(){
		$(this).closest('.main-search__type-car-conteiner').find('.main-search__type-car-element').removeClass('activtypecar');
		$(this).addClass('activtypecar');
	});

	//cart add like
	$('.card-box__add-icon').on('click',function(){
		let thisElement = $(this);
		if(thisElement.hasClass('actlike')){
			thisElement.removeClass('actlike');
		}
		else{
			thisElement.addClass('actlike');
		}
	})

	//tabs what-car-nead-v2
	$(function changeTab(){
		$('.what-car-nead-v2__nav li').on('click',function(index){
			let indexTab = $(this).index();
			$('.what-car-nead-v2__nav li').removeClass('activ-tab-nead-car');
			$(this).addClass('activ-tab-nead-car');
			$('.what-car-nead-v2__tab-conteiner .what-car-nead-v2__tab-element').removeClass('activ-tab-element');
			$('.what-car-nead-v2__tab-conteiner .what-car-nead-v2__tab-element').eq(indexTab).addClass('activ-tab-element');
		});
	});

	//tabs what-car-nead-v2 mobile
	$('.tab-element-acordeon__header').on('click',function(){
		$(this).closest('.what-car-nead-v2__tab-element-acordeon').find('.tab-element-acordeon__body').slideToggle(500,function(){
			if($(this).is(':visible')){
				$(this).closest('.what-car-nead-v2__tab-element-acordeon').find('.tab-element-acordeon__header').addClass('tab-acordeon-activ');
			}
			else{
				$(this).closest('.what-car-nead-v2__tab-element-acordeon').find('.tab-element-acordeon__header').removeClass('tab-acordeon-activ');
			}
		});
	});

	//catalog page change visyal ads box
	$('.visyal_btn ').on('click', function(){
		if($(this).hasClass('list-ads')){
		  $('.ads-body__conteiner').addClass('ads-body__conteiner__list-visyal');
		  $('.ads-body__wraper-ads').addClass('ads-body__wraper-ads_list')
		}
		if($(this).hasClass('grid-ads')){
		  $('.ads-body__conteiner').removeClass('ads-body__conteiner__list-visyal');
		  $('.ads-body__wraper-ads').removeClass('ads-body__wraper-ads_list')
		}
		if (!$(this).hasClass('activ-visyal-controller')) {
			$('.visyal_btn').removeClass('activ-visyal-controller');
			$(this).addClass('activ-visyal-controller');
		}
	});

	//catalog mobile filtr
	$('.catalog-mobile-filtr').on('click',function(){
		$('.catalog-page__aside').slideToggle(500,function(){
			if($(this).is(':visible')){
				$('.catalog-mobile-filtr').addClass('activ-filtr-catalog');
			}
			else{
				$('.catalog-mobile-filtr').removeClass('activ-filtr-catalog');
			}
		});
	})

	//cart page cars slider
	$('.cart-main-info__big-slider').slick({
	  infinite: true,
	  speed: 1000,
	  adaptiveHeight: true,
	  slidesToScroll: 1,
	  dots: false,
	  slidesToShow: 1,
	  asNavFor: '.cart-main-info__smal-slider , .galery-conteiner__slider',
	  prevArrow: '<div class="ar_slier prev-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  nextArrow: '<div class="ar_slier next-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  responsive: [
	    {
	      breakpoint: 850,
	      settings: {
	        slidesToShow: 1,
	      }
	    },
	  ]
	});

	$('.cart-main-info__smal-slider').slick({
	  infinite: true,
	  speed: 1000,
	  adaptiveHeight: true,
	  slidesToScroll: 1,
	  dots: false,
	  slidesToShow: 3,
	  vertical: true,
      verticalSwiping: true,
      focusOnSelect: true,
      arrows : false,
	  asNavFor: '.cart-main-info__big-slider , .galery-conteiner__slider',
	  responsive: [
	    {
	      breakpoint: 850,
	      settings: {
	        slidesToShow: 1,
	      }
	    },
	  ]
	});

	$('.galery-conteiner__slider').slick({
	  infinite: true,
	  speed: 1000,
	  adaptiveHeight: false,
	  slidesToScroll: 1,
	  dots: false,
	  slidesToShow: 1,
	  asNavFor: '.cart-main-info__big-slider , .cart-main-info__smal-slider',
	  prevArrow: '<div class="ar_slier prev-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  nextArrow: '<div class="ar_slier next-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  responsive: [
	    {
	      breakpoint: 850,
	      settings: {
	        slidesToShow: 1,
	      }
	    },
	  ]
	});

	//cart page cars slider video download
	$('.play-triger').on('click',function(){
		let srcVideo = $(this).closest('.galery-conteiner__element-slide-wrapper').find('iframe').attr('data-srcvideo');
		let thisPlayer = $(this).closest('.galery-conteiner__element-slide-wrapper').find('iframe')
		$(this).closest('.galery-conteiner__element-slide-wrapper').find('iframe').attr('src', srcVideo);

		$(this).closest('.galery-conteiner__element-slide-wrapper').addClass('activVideoGaleru');

		setTimeout(function(ev){
		  thisPlayer[0].src += "?controls=1&autoplay=1";
		}, 1200);
	});

	$('.advantages-popup__close-element , .ar_slier ').on('click', function(){
        $('.galery-conteiner__element-slide-wrapper iframe').attr('src', '')
    	$('.galery-conteiner__element-slide-wrapper').removeClass('activVideoGaleru');
	})




	//cart page V2 cars store slider
	$('.auto-store__slider').slick({
	  infinite: true,
	  speed: 1000,
	  adaptiveHeight: true,
	  slidesToScroll: 1,
	  dots: false,
	  slidesToShow: 1,
	  prevArrow: '<div class="ar_slier prev-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  nextArrow: '<div class="ar_slier next-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  responsive: [
	    {
	      breakpoint: 850,
	      settings: {
	        slidesToShow: 1,
	      }
	    },
	  ]
	});




	//single sto baner slider
	$('.single-sto__baner-slider').slick({
	  infinite: true,
	  speed: 1000,
	  adaptiveHeight: true,
	  slidesToScroll: 1,
	  dots: false,
	  slidesToShow: 1,
	  prevArrow: '<div class="ar_slier prev-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  nextArrow: '<div class="ar_slier next-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  responsive: [
	    {
	      breakpoint: 850,
	      settings: {
	        slidesToShow: 1,
	      }
	    },
	  ]
	});


	//single sto image slider
	$('.sing-sto-slider__big-slider').slick({
	  infinite: true,
	  speed: 1000,
	  adaptiveHeight: true,
	  slidesToScroll: 1,
	  dots: false,
	  slidesToShow: 1,
	  asNavFor: '.sing-sto-slider__spall-slider',
	  prevArrow: '<div class="ar_slier prev-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  nextArrow: '<div class="ar_slier next-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  responsive: [
	    {
	      breakpoint: 850,
	      settings: {
	        slidesToShow: 1,
	      }
	    },
	  ]
	});

	$('.sing-sto-slider__spall-slider').slick({
	  infinite: true,
	  speed: 1000,
	  adaptiveHeight: true,
	  slidesToScroll: 1,
	  dots: false,
	  slidesToShow: 4,
      focusOnSelect: true,
      arrows : false,
	  asNavFor: '.sing-sto-slider__big-slider',

	});


	//single rent car slider
	$('.singl-rent-info-big__big-slider').slick({
	  infinite: true,
	  speed: 1000,
	  adaptiveHeight: true,
	  slidesToScroll: 1,
	  dots: false,
	  slidesToShow: 1,
	  prevArrow: '<div class="ar_slier prev-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  nextArrow: '<div class="ar_slier next-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  responsive: [
	    {
	      breakpoint: 850,
	      settings: {
	        slidesToShow: 1,
	      }
	    },
	  ]
	});


	//single auto services shop slider
	$('.slider-auto-store__slider').slick({
	  infinite: true,
	  speed: 1000,
	  adaptiveHeight: true,
	  slidesToScroll: 1,
	  dots: false,
	  slidesToShow: 1,
	  prevArrow: '<div class="ar_slier prev-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  nextArrow: '<div class="ar_slier next-ar_slide"><img src="img/_src/ar_slider.png" alt=""></div>',
	  responsive: [
	    {
	      breakpoint: 850,
	      settings: {
	        slidesToShow: 1,
	      }
	    },
	  ]
	});

	//partnership fixed nav
	$(function(){
		if($('.partnership__aside').hasClass){
			$('.content').css({
				'overflow':'visible'
			});
		}
	});

	//popupp change viev pass
	$('.input-form-conteiner__change-viev-pass').on('click', function(){
		let inpPass = $(this).closest('.input-form-conteiner__claster_pass').find('.input-form-conteiner__input');
		let inpPassType = $(this).closest('.input-form-conteiner__claster_pass').find('.input-form-conteiner__input').attr('type');

		if(inpPassType == "password"){
			inpPass.attr({type:"text"});
		}
		else{
			inpPass.attr({type:"password"});
		}
	});


	//user add nambers activ__________________________________________________
	$('.select-num__box').on('click',function(){
		$('.select-num__box').removeClass('select-num__box_activ');
		$(this).addClass('select-num__box_activ');
	});


	//donload photo plagin main photo__________________________________________
	$("#main-car-photo-donload").change(function(){
	    imageUrlDonload(this);
	});
	$("#logo-photo-donload").change(function(){
	    imageUrlDonload(this);
	});
	function imageUrlDonload(thisinput){
		let newImageElement = $('<div class="file-image-add"> <div class="file-image-add__remove-image other-box__close"></div> <div class="file-image-add__element"> <img src="" alt=""> </div> </div>');
		let imgUrl = thisinput.files[0];
		let reader = new FileReader();
		reader.readAsDataURL(imgUrl);

		reader.onload = function(){
			srcImg = reader.result;
			$(thisinput).closest('.add-new-image-main').append(newImageElement);
			$(thisinput).closest('.add-new-image-main').find('.file-image-add__element img').attr('src', srcImg);
			$(thisinput).closest('.add-new-image-main').find('.card-box-user__add-ads').css({
				'display':'none'
			});

			$(thisinput).closest('.add-new-image-main').find('.file-image-add__remove-image').on('click',function(){
				$(thisinput).closest('.add-new-image-main').find('.file-image-add').remove();
				$(thisinput).closest('.add-new-image-main').find('.card-box-user__add-ads').css({
					'display':'flex'
				});
			});
		}
	}
    $('.file-image-add__remove-image').on('click',function(){
    	$(this).closest('.add-new-image-main').find('.card-box-user__add-ads').css({
			'display':'flex'
		});
    	$(this).closest('.file-image-add').remove();
	});


    //donload photo plagin smal photo _________________________________________
	$("#addotherimage").change(function(){
	    imageDonloadSmal(this);
	});
	function imageDonloadSmal(thisinputadd){
		let newImageElement = $('<div class="hoto-conteiner-add__other-box other-box"> <div class="other-box__close"> </div> <div class="other-box__image"> <img src="" alt=""> </div> </div>');
		let imgUrl = thisinputadd.files[0];
		let reader = new FileReader();
		reader.readAsDataURL(imgUrl);

		reader.onload = function(){
			srcImg = reader.result;
			$('.photo-conteiner-add__other-photo-conteiner').prepend(newImageElement);
			$( ".other-box" ).each(function( index ) {
				let thisImageAttrStatus = $(this).find('.other-box__image img').attr('src');
				if(thisImageAttrStatus == ""){
					$(this).find('.other-box__image img').attr('src', srcImg)
				}


			});


			$('.other-box__close').on('click',function(){
				$(this).closest('.other-box').remove();
			});
		}
	}
	$('.other-box__close').on('click',function(){
		$(this).closest('.other-box').remove();
	});


	//color change disc
	$('.color-picker').on('change',function(){
		let colorValue = $(this).val();
		$(this).closest('.color-disc-select').find('svg path').css({
			'fill': colorValue
		});
	});



	//video plagin ____________________________________________________________

	//video play/stop
	$('.video-element__play').on('click',function(ev){
		let thisVideoPlayer = $(this).closest('.video-element').find('iframe');
		let thisVideoPlayerSrc = thisVideoPlayer.attr('data-src');
		muteAllVideo();
		$(this).closest('.video-element').find('.video-element__prewievs').css({
			'display':'none'
		});
		$(this).css({
			'display': 'none'
		});
		thisVideoPlayer.css({
			'opacity': '1',
			'position':'relative',
			'z-index':'10'
		});
		thisVideoPlayer.attr('src', thisVideoPlayerSrc);
        setTimeout(function(ev){
		  thisVideoPlayer[0].src += "?controls=1&autoplay=1";
		}, 1200);
	});

	function muteAllVideo(){
		$('.video-element iframe').attr('src', '');
		$('.video-element iframe').css({
			'opacity': '0',
			'position':'absolute',
			'z-index':'-100'
		});
		$('.video-element__prewievs').css({'display':'block'});
		$('.video-element__play').css({'display':'block'})
	}

	//add video input
	$('.add-video-input').on('change',function(){
		let urlVideo = $(this).val();
		muteAllVideo();
		if(urlVideo !== ""){
			$('.photo-conteiner-add__video-player').find('iframe').attr('data-src', 'https://www.youtube.com/embed/'+urlVideo);
			$('.photo-conteiner-add__video-player').addClass('photo-conteiner-add__video-player_active');
			videoPrewievs(urlVideo);
		}
		else{
			$('.photo-conteiner-add__video-player').removeClass('photo-conteiner-add__video-player_active');
			muteAllVideo();
		}
	});

	function videoPrewievs(urlVideoPrev){
		$('.video-element__prewievs').attr('src', 'http://img.youtube.com/vi/'+urlVideoPrev+'/0.jpg');
	}



	//progres bar add car staps __________________________________________________
	// $(function(){
	// 	var allProgresValue = 0;
	// 	let mainDone = 0;
	// 	let photoVideoDone = 0;
	// 	let description = 0;
	// 	let condition = 0;
	// 	let descriptionCondition = 0;
	// 	let safety = 0;
	// 	let comfort = 0;
	// 	let safetyComfort = 0;
	// 	let multimedia = 0;
	// 	let other = 0;

	// 	//main change
	// 	$('[data-add-staps="main-parametrs"]').find('select').each(function(index, el) {
	// 		$(this).on('change',function(){
	// 			mainDone = 1;
	// 		});
	// 	});

	// 	$('[data-add-staps="photo-and-video"]').find('input').each(function(index, el) {
	// 		$(this).on('change',function(){
	// 			photoVideoDone = 1;
	// 		});
	// 	});

	// 	$('[data-add-staps="description"]').find('textarea').each(function(index, el) {
	// 		$(this).on('change',function(){
	// 			description = 1;
	// 		});
	// 	});

	// 	$('[data-add-staps="condition"]').find('input').each(function(index, el) {
	// 		$(this).on('change',function(){
	// 			condition = 1;
	// 		});
	// 	});

	// 	$('[data-add-staps="safety"]').find('input').each(function(index, el) {
	// 		$(this).on('change',function(){
	// 			safety = 1;
	// 		});
	// 	});

	// 	$('[data-add-staps="comfort"]').find('input').each(function(index, el) {
	// 		$(this).on('change',function(){
	// 			comfort = 1;
	// 		});
	// 	});

	// 	$('[data-add-staps="multimedia"]').find('input').each(function(index, el) {
	// 		$(this).on('change',function(){
	// 			multimedia = 1;
	// 		});
	// 	});

	// 	$('[data-add-staps="other"]').find('input').each(function(index, el) {
	// 		$(this).on('change',function(){
	// 			other = 1;
	// 		});
	// 	});


	// 	$('.acordeon-conteiner__box input, .acordeon-conteiner__box select, .acordeon-conteiner__box textarea').on('change',function(){
	// 		if(description > 0 && condition > 0){
	// 			descriptionCondition = 1;
	// 		}
	// 		if(safety > 0 && comfort > 0){
	// 			safetyComfort = 1
	// 		}

	// 		if(mainDone > 0){
	// 			$('[data-done-progres="main-done"]').addClass('staps-line-car-add__staps-box_active')
	// 		}
	// 		else{
	// 			$('[data-done-progres="main-done"]').removeClass('staps-line-car-add__staps-box_active')
	// 		}

	// 		if(photoVideoDone > 0){
	// 			$('[data-done-progres="photo-video"]').addClass('staps-line-car-add__staps-box_active')
	// 		}
	// 		else{
	// 			$('[data-done-progres="photo-video"]').removeClass('staps-line-car-add__staps-box_active')
	// 		}

	// 		if(descriptionCondition > 0){
	// 			$('[data-done-progres="description-condition"]').addClass('staps-line-car-add__staps-box_active')
	// 		}
	// 		else{
	// 			$('[data-done-progres="description-condition"]').removeClass('staps-line-car-add__staps-box_active')
	// 		}

	// 		if(safetyComfort > 0){
	// 			$('[data-done-progres="safety-comfort"]').addClass('staps-line-car-add__staps-box_active')
	// 		}
	// 		else{
	// 			$('[data-done-progres="safety-comfort"]').removeClass('staps-line-car-add__staps-box_active')
	// 		}

	// 		if(multimedia > 0){
	// 			$('[data-done-progres="multimedia"]').addClass('staps-line-car-add__staps-box_active')
	// 		}
	// 		else{
	// 			$('[data-done-progres="multimedia"]').removeClass('staps-line-car-add__staps-box_active')
	// 		}

	// 		if(other > 0){
	// 			$('[data-done-progres="other"]').addClass('staps-line-car-add__staps-box_active')
	// 		}
	// 		else{
	// 			$('[data-done-progres="other"]').removeClass('staps-line-car-add__staps-box_active')
	// 		}


	// 		allProgresValue = mainDone + photoVideoDone + descriptionCondition + safetyComfort + multimedia + other;
 //            progresBar(allProgresValue);
	// 	});

	// 	function progresBar(doneValElement){
	// 		let progresValue = 16.6666667 * doneValElement;
	// 		$('.staps-line-car-add__line-active').css({
	// 			'width': progresValue + '%'
	// 		});
	// 		$('.activ-staps-procent').css({
	// 			'left': 'calc('+progresValue+'% - 20px)'
	// 		});
	// 		$('.activ-staps-procent').text(progresValue.toFixed() + "%")
	// 		if( progresValue > 5){
	// 			$('.activ-staps-procent').css({
	// 				'display': 'block'
	// 			});
	// 		}

	// 		if( progresValue > 95){
	// 			$('.activ-staps-procent').css({
	// 				'display': 'none'
	// 			});
	// 		}
	// 	}

	// });


    //fixed bottom scroll bar ____________________________________________________

	// $(window).scroll(function() {
	//     var theTop = $(document).scrollTop();
	//     bottomSiteBar(theTop);
	// });

	// tracing offset top for bottom site bar
	function bottomSiteBar(topValue){
		let heightScreen = $(window).height();
		let qurientHeightScreen = heightScreen / 2;
		let staticBarTop = $('.static-bottom-site-bar').offset().top;
		let heightBottomBar = $('.static-bottom-site-bar').height();
		let qurientTopBarLocation = staticBarTop - heightBottomBar - qurientHeightScreen;
		let fixedBar = $('.fixed-bottom-site-bar');
		let staticBar = $('.static-bottom-site-bar');

		if(topValue >= qurientTopBarLocation){
			staticBar.addClass('show-static-bar');
	    	fixedBar.addClass('hide-fixed-bottom-bar');
	    }
	    else{
	    	fixedBar.removeClass('hide-fixed-bottom-bar');
	    	staticBar.removeClass('show-static-bar');
	    }
	}




    //add / del more phone user account___________________________________________________
    $('.add-phone-btn').on('click',function(){
    	let newPhoneElement = $(this).closest('.information-about-company__phone-conteiner').find('.defoult-phone-namber').clone();
    	newPhoneElement.removeClass('defoult-phone-namber');
    	newPhoneElement.addClass('new-phone-element');
    	newPhoneElement.find('.input-form-conteiner__title').remove();
    	newPhoneElement.find('input').val("")
        $('.information-about-company__add-more-phone-conteiner').prepend(newPhoneElement);
        newPhoneElement = "";

        $('.del-phone').on('click',function(){
	    	$(this).closest('.new-phone-element').remove();
	    });
    });

    //add / del more location user account___________________________________________________
    $('.add-location').on('click',function(){
    	let newLocationElement = $(this).closest('.add-more-location').find('.add-more-location__defoult-location').clone();
    	newLocationElement.removeClass('add-more-location__defoult-location');
    	newLocationElement.addClass('new-location-element');
        $('.add-more-location__new-location').prepend(newLocationElement);
        newLocationElement = "";

        $('.del-location').on('click',function(){
	    	$(this).closest('.new-location-element').remove();
	    });
    });

    //add / del more day rent cars user account___________________________________________________
    $('.add-days').on('click',function(){
    	let newLocationElement = $(this).closest('.add-more-location').find('.table-prise-rent__line_default').clone();
    	newLocationElement.removeClass('table-prise-rent__line_default');
    	newLocationElement.addClass('new-rent-car-element');
        $('.rent-car-price-list__new-element').prepend(newLocationElement);
        newLocationElement = "";

        $('.del-price-rent-car').on('click',function(){
	    	$(this).closest('.new-rent-car-element').remove();
	    });
    });

    //user account redact sto: select all brands
    $('.brands-redact__all-brands input').on('change',function(){
    	let statusChecked = $(this).prop("checked");
    	let allBrends = $('.brands_redact__list-brands .checkbox').find('input');
    	if(statusChecked == true){
    		allBrends.prop('checked', true);
    	}
    	else{
    		allBrends.prop('checked', false);;
    	}
    });


    $('.direction-auto-store .acordeon-conteiner__box-title label').on('click',function(){
    	event.stopPropagation()
    })


    //_______________________________________________________________
    // ADD ADS NO REGISTR
    $('.type-ads').on('click',function(){
    	$('.type-ads').removeClass('type-ads_activ');
    	$(this).addClass('type-ads_activ');
    })
    //_______________________________________________________________



    //_______________________________________________________________
    //  USER
    //fixed nav-bar
    $(window).scroll(function(event){
    	let navBar = $('.aside__cabinet');
    	if(navBar != ''){
    		let curentScroll = $(document).scrollTop();
	    	let curentHeight = $('.cart-main-info__body-info_account').offset().top;
	    	if(curentScroll >= curentHeight){
	    		navBar.addClass('ads-sitebar_user-account_fixed-nav-bar');
	    	}
	    	else{
	    		navBar.removeClass('ads-sitebar_user-account_fixed-nav-bar');
	    	}



    	}
    })

    //_______________________________________________________________





});

