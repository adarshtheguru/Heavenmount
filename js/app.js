$(document).ready(function(){
		var d = new Date();
		$('.copyrightYear').html(d.getFullYear());

		var winHT = $(window).height();
		var winWD = $(window).width();
		var navHt = $("header").outerHeight();
		var bannerHt = winHT - navHt;
		var bannerHt = winHT;
		var loc = window.location.pathname.split("/").pop();
		isFloorplan = 0;
		isBrochure = 0;

		$('.banner_ht').css('height', bannerHt);
		// $('.section-first').css('margin-top', navHt)

		$(".goto-home").on("click", function(){
			$("html,body").animate({
				scrollTop : 0
			}, 1000);
		});

		$(".scroll-next").click(function() {
			var cls = $(this).closest("section").next().offset().top - 50;
			$("html, body").animate({scrollTop: cls}, 1000);
		});

		if(loc=="privacy-policy.php"){
			// $(".nav-links, .menu-icon-mobile").css("display","none");
			// $(".logo-header").attr("href","/");
			// $(".logo-header").removeClass("goto-home");
			// $('header').css("background-color","#202038");
		}

		if (winWD > 768) {
			$(".enq_click, .frmclose").click(function() {
				if ($(".form-container").is(':visible')) {
					$(".form-container").slideUp();
				} else {
					$(".form-container").slideToggle();
				}
				$(".form-container, .frmclose").toggleClass("show");
			});

		}

		$(".menu-icon-mobile").on("click", function(){
			$(".nav-links").slideToggle();
			$(".menu-icon-mobile").toggleClass("active");
		});
		
		if(winWD <= 768){
			$(".nav-links a").on("click", function(){
				$(".menu-icon-mobile").trigger("click");
			})

			$(".mob_enq_click, .frmclose").on("click" , function(){
				isBrochure = 0;
				isFloorplan = 0;
				$(".form-container").toggleClass("show");
			});
		}


		var childrenSelector = $(".nav-links a");
		var aChildren = $(".nav-links a"); // find the a children of the list items
		if(winWD <= 700)
			var gap = 55;// $(".header-wrapper").outerHeight(); //Navigation height
		else
			var gap = 100;
		var aArray = []; // create the empty aArray
		for (var i=0; i < childrenSelector.length; i++) {    
			var aChild = aChildren[i];
			if (!$(aChild).hasClass('extLink')) {
				if ($(aChild).attr('rel')) {
					var ahref = $(aChild).attr('rel');
					aArray.push(ahref);
				}
			}
		}
		console.log("Adarsh");

		// custom js code 

		$(".menu-icons").on("click", function(){
			$(".menu-icons i").toggleClass("fa-times fa-bars");
			// $(".menu-icons i").removeClass("fa-bars");
			// $(".menu-icons i").addClass("fa-times");
		});
		$(".nav-mob-list").on("click", function(){
			$(".nav-mob-list").toggleClass("nav-menu active nav-menu")
		})

		$('.am-slider').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			// centerMode:true,
			autoplay: true,
			autoplaySpeed:1000,
			infinite: true,
			// speed:200,
			// variableWidth: true,
			// centerPadding: '120px',
			arrows: true,
			prevArrow: '#life-style-prev',
			nextArrow: '#life-style-next',
			responsive: [
				// {
				// 	breakpoint: 1300,
				// 	settings: {
				// 		slidesToShow: 3,
				// 		slidesToScroll: 1,
				// 		// centerMode:true,
				// 		// autoplay: false,
				// 		infinite: true,
				// 		// speed:200,
				// 		variableWidth: true,
				// 		centerPadding: '120px',
				// 		arrows: true,
				// 		prevArrow: '#life-style-prev',
				// 		nextArrow: '#life-style-next',
				// 	}
				// },
				// {
				// 	breakpoint: 1024,
				// 	settings: {
				// 		variableWidth: false,
				// 		centerPadding: '0px',
				// 		arrows: true,
				// 		prevArrow: '#am-l-arrow',
				// 		nextArrow: '#am-r-arrow',
				// 	}
				// },
				{
					breakpoint: 1300,
					settings: {
						slidesToShow: 2,
						variableWidth: false,
						centerPadding: '0px',
						arrows: true,
						prevArrow: '#am-l-arrow',
						nextArrow: '#am-r-arrow',
					}
				},
				{
					breakpoint: 640,
					settings: {
						slidesToShow: 1,
						variableWidth: false,
						arrows: true,
						prevArrow: '#am-l-arrow',
						nextArrow: '#am-r-arrow',
					}
				}
			]
		});
		// if (winWD < 1300) {
			$("#life-style-next").hover(function () {
				// debugger;
				$("#life-style-next").css("cursor", "url(./assets/cursor-arrow.svg),auto")
			});
			$("#life-style-prev").hover(function () {
				// debugger;
				$("#life-style-prev").css("cursor", "url(./assets/cursor-arrow.svg),auto")
			});
	// }

	//tab code
	$('.social-links li:first-child').addClass('active');
	$('.tab-box-cont').hide();
	$('.tab-box-cont:first').show();

	$('.social-links li').click(function () {

		$('.social-links li').removeClass('active');
		$(this).addClass('active');
		$('.tab-box-cont').hide();

		var activeTab = $(this).find('a').attr('href');
		$(activeTab).fadeIn();
		return false;
	});

	var get_custom_margin = winWD - $(".container").width();
	$(".dynamic-margin").css("margin-left", get_custom_margin / 1.4);

	var get_custom_margin = winWD - $(".container").width();
	$(".dynamic-margin1").css("margin-left", get_custom_margin / 4);
	$(".dyn-mar").css("margin-left", (get_custom_margin / 2) - 10);

		// if ($(".menu-icons i").hasClass("active")) {
		// 	$(".menu-icons i").addClass("fa-times");
		// }
		//On Scroll - Add class active to active tab
		$(window).scroll(function(){
			var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
			var windowHeight = $(window).height(); // get the height of the window
			var docHeight = $(document).height();
			for(i=0;i<aArray.length;i++){
				var theID = aArray[i];
				var divPos = $("#"+theID).offset().top; // get the offset of the div from the top of page
				var divHeight = $("#"+theID).outerHeight(); // get the height of the div in question
				if (windowPos >= (divPos - gap) && windowPos < ((divPos - gap) + divHeight)) {
					if (!$("a[rel='" + theID + "']").hasClass("active"))
					{
           	// ga('set', 'page', '/'+theID);
           	// ga('send', 'pageview');
           	$("a[rel='" + theID + "']").addClass("active"); 
          }
	      } 
	      else 
	      {
	       	$("a[rel='" + theID + "']").removeClass("active");
	      }
	   	}	

			//If document has scrolled to the end. Add active class to the last navigation menu
			if(windowPos + windowHeight == docHeight) {
				if (!$(".nav-links a:not(.extLink):last-child").hasClass("active")) {
					var navActiveCurrent = $(".active").attr("rel");
					$("a[rel='" + navActiveCurrent + "']").removeClass("active");
					$(".nav-links a:not(.extLink):last-child").addClass("active");
				}
			}
		});
		
		//On Click
		$('.nav-links a').on("click", function(){
			if(!$(this).hasClass('extLink')) {
				var href = $(this).attr("rel");
				if(winWD <= 700)
					var gap = 45; // $(".header-wrapper").outerHeight(); //Navigation height
				else
					var gap = 96;
				
				$('html,body').animate({
					scrollTop: $("#"+href).offset().top - gap
				}, 1000);
			}
		});

	});

	$(window).scroll(function(){
		$(".lazy").each(function(){
			if($(this).attr("data-src")){
				(this.tagName == "IMG" || this.tagName == "IFRAME") ? $(this).attr("src", $(this).data("src")) : $(this).css("background-image", "url("+$(this).data("src")+")");
				$(this).removeAttr("data-src");
			}
		});
		var windscroll = $(window).scrollTop();
		if (windscroll >= 50) {
			$("header").addClass("active");
		}
		else{
			$("header").removeClass("active");
		}
	});