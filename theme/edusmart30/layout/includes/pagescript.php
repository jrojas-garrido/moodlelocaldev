<script>
$(document).ready(function(){

	$('#site-news-forum .forumpost').wrapAll($('<div id="sitenews_wrapper">'));
		$('.singlebutton.forumaddnew #newdiscussionform div input[type="submit"]').addClass('highlight');

		$( ".logo_section #page-navbar" ).remove();
		$( ".nav .divider" ).remove();
		var mydiv = $('.box.mdl-align #coursesearch .coursesearchbox label').html();

		$('.box.mdl-align #coursesearch .coursesearchbox label').html('<i class="fa fa-search"></i>');
		$("#shortsearchbox").attr("placeholder", "Rechercher des cours");
		
		$( ".block .content > .event a" ).first().addClass( "fltlft" );
		
		$('.firstpost .commands a:first-child').addClass('icon-pen');
		$('.firstpost .commands a:last-child').addClass('icon-trash');
		
		$('ul.teachers li:first-child a').addClass('usr-img');
		$('ul.teachers li:last-child a').addClass('usr-tchr-name');
		var divider = $('.breadcrumb li span.divider .arrow.sep').html();
		$('.breadcrumb li span.divider .arrow.sep').html('');
		$('.breadcrumb li span.divider .arrow.sep').html('>');

		$( "html[dir='rtl']" ).attr("dir", "");

		var numofcourse = $('#frontpage-course-list .courses.frontpage-course-list-all > div.coursebox').length;
		if(numofcourse > 3){

    	$('#page div #frontpage-course-list .frontpage-course-list-all').addClass('owl-carousel');
		$('#page div #frontpage-course-list div > div').addClass('item');

		$('#page div #frontpage-course-list .frontpage-course-list-enrolled').addClass('owl-carousel');
		$('#page div #frontpage-course-list div > div').addClass('item');
		
		$('.box.mdl-align #coursesearch .coursesearchbox').wrap($('<div class="wrapper">'));
		$('#page div #frontpage-course-list .frontpage-course-list-all').addClass('owl-carousel');
		$('#page div #frontpage-course-list div > div').addClass('item');
		
		
		$(document.body).addClass('moreThenthree');
			
		} else if (numofcourse == 3) {
		
		$(document.body).addClass('threeorless');
		}
		
		var numofblock = $('#page-footer #block-region-side-pre > div.block').length;
		
		if(numofblock >= 3){
		
		$('#page-footer #block-region-side-pre .block').wrapAll($('<div id="block_wrapper">'));
		$('#page-footer #block-region-side-pre #block_wrapper').addClass('owl-carousel');
		$('#page-footer #block-region-side-pre #block_wrapper  > .block').addClass('item');
		$(document.body).addClass('moreThenthreeblock');
		
		} else if (numofblock <= 3) {
		
		$(document.body).addClass('threeorlessblock');
		
		}
		
		var currentForumItems = $('#page div #site-news-forum #sitenews_wrapper  > div.forumpost').length;
		
		
		if(numofcourse == 2){
			$(document.body).addClass('twocourseItem');
		} else if(numofcourse == 1){
			$(document.body).addClass('OnecourseItem');
		}
		
		if(currentForumItems == 3){
			$(document.body).addClass('threeforumItem');
		} else if(currentForumItems == 2){
			$(document.body).addClass('twoforumItem');
		} else if(currentForumItems == 1){
			$(document.body).addClass('oneforumItem');
		} else if(currentForumItems > 3){
			$('#page div #site-news-forum #sitenews_wrapper').addClass('owl-carousel');
			$('#page div #site-news-forum #sitenews_wrapper  > .forumpost').addClass('item');
		}

		
		$(window).load(function() {
				$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            nav:true,
			            loop:true,
			            autoplayHoverPause: false
			        },
			        600:{
			            items:2,
			            nav:true,
			            loop:true,
			            autoplayHoverPause: false
			        },
			        1000:{
			            items:3,
			            nav:true,
			            loop:true,
			            autoplay:false,
			            autoplayHoverPause: false
			        }
			
			    }
			});
			
		 });


		$('.usermenu .moodle-actionmenu .toggle-display .userbutton').addClass('tooltips');
		$('.firstpost .commands a').html(' ');
		$('#page-header #page-navbar').html(' ');

		
		var asd1 = $('.caption_title_line h2#myslidertext1').html();
		if(asd1 != null){
			var textArr1 = asd1.split(" ")
			var newText1 = "";
			for(var i=0; i<textArr1.length; i++){
				newText1 += textArr1[i] + " ";

				if(i==1){
					newText1 += "<br />";
				}
			}
			document.getElementById('myslidertext1').innerHTML = newText1;
		}
		
		
		var asd2 = $('.caption_title_line h2#myslidertext2').html();
		if(asd2 != null){
			var textArr2 = asd2.split(" ")
			var newText2 = "";
			for(var i=0; i<textArr2.length; i++){
				newText2 += textArr2[i] + " ";

				if(i==1){
					newText2 += "<br />";
				}
			}
			document.getElementById('myslidertext2').innerHTML = newText2;
		}
		
				
		var asd3 = $('.caption_title_line h2#myslidertext3').html();
		if(asd3 != null){
			var textArr3 = asd3.split(" ")
			var newText3 = "";
			for(var i=0; i<textArr3.length; i++){
				newText3 += textArr3[i] + " ";

				if(i==1){
					newText3 += "<br />";
				}
			}
			document.getElementById('myslidertext3').innerHTML = newText3;
		}

 if ( $('.content.item ul.teachers').length > 1 ) {
 var $lis = $('.content.item ul.teachers li');
 if ($lis.length > 1) {
    $lis.slice(1).addClass("tchr-img");
    $('.content.item ul.teachers li:first-child').removeClass('tchr-img');
    }else if($lis.length == 1){
	    
    }
}

   $('#frontpage-course-list h2').each(function() {
      var txt = $(this).html();
      var index = txt.indexOf(' ');
      if (index == -1) {
         index = txt.length;
      }
      $(this).html('<span>' + txt.substring(0, index) + '</span>' + txt.substring(index, txt.length));
   });
   
   $('#frontpage-category-names h2').each(function() {
      var txt = $(this).html();
      var index = txt.indexOf(' ');
      if (index == -1) {
         index = txt.length;
      }
      $(this).html('<span>' + txt.substring(0, index) + '</span>' + txt.substring(index, txt.length));
   });
   
   $('#site-news-forum h2').each(function() {
      var txt = $(this).html();
      var index = txt.indexOf(' ');
      if (index == -1) {
         index = txt.length;
      }
      $(this).html('<span>' + txt.substring(0, index) + '</span>' + txt.substring(index, txt.length));
   });
   
   $('.inner-banner .container-fluid #page-header .page-context-header .page-header-headingsx h2').each(function() {
      var txt = $(this).html();
      var index = txt.indexOf(' ');
      if (index == -1) {
         index = txt.length;
      }
      $(this).html('<span>' + txt.substring(0, index) + '</span>' + txt.substring(index, txt.length));
   });
  
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
	$('.flexslider .flex-direction-nav').wrap($('<div class="container-fluid">'));
	

	});
	

	
</script>