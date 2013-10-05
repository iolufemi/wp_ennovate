/**

 @author Olanipekun Olufemi

 @copyright 2013

 @license GNU V3

 @version 1.0

 @link http://dedeveloper.wordpress.com

 */
 
$('.home #blog #ajaxFeeder').addClass('loading').load(e_home_url+'/blog #ajaxFeeder',function(){
        $(this).removeClass('loading');
    });
    
$('.home #portfolio #ajaxFeeder').addClass('loading').load(e_home_url+'/portfolio #ajaxFeeder',function(){
        $(this).removeClass('loading');
    });

$('.pagnavi a').bind('click',function(e){
    e.preventDefault();
    var e_link = $(this).attr('href');
    var e_element = $(this);
    ennovateAjaxLoad(e_link,e_element);
});

function ennovateAjaxLoad(link,element){
    $('#ajaxFeeder').load(link+' #ajaxFeeder');
}



$(document).scroll(function()

{

	var $urllink = window.location.href

	var $urlarray = $urllink.split('#');

	$urlarray.shift();

	var $elid = $urlarray.join('#');

	$('nav ul li').each(function()

	{

		var $anchor = $(this).children('a').attr('href');

		var $anchorarray = $anchor.split('#');

		$anchorarray.shift();

		var $anchorid = $anchorarray.join('#');

		if ($anchorid == $elid)

		{

			$(this).addClass('activepage');

		}

		else

		{

			$(this).removeClass('activepage');

		}

	});

	var $position = $(document).scrollTop();
    
    var $homestart = $('#homepage').offset().top - 96;

    var $homeend = $('#homepage').offset().top - 96 + $('#homepage').height();
    
    var $aboutstart = $('section#about').offset().top - 96;
    
    var $aboutend = $('section#about').offset().top - 96 + $('section#about').height();
    
    var $servicesstart = $('section#services').offset().top - 96;
    
    var $servicesend = $('section#services').offset().top - 96 + $('section#services').height();
    
    var $portfoliostart = $('section#portfolio').offset().top - 96;
    
    var $portfolioend = $('section#portfolio').offset().top - 96 + $('section#portfolio').height();
    
    var $blogstart = $('section#blog').offset().top - 96;
    
    var $blogend = $('section#blog').offset().top - 96 + $('section#blog').height();
    
    var $contactstart = $('section#contact').offset().top - 96;
    
    var $contactend = $('section#contact').offset().top - 96 + $('section#contact').height();

	if ($homestart <= $position && $position <= $homeend)

	{

		$('nav ul li').children('#homepage a[href="##homepage"]').parent('li').addClass('activepage');

	}

	else

	{

		$('nav ul li').children('#homepage a[href="##homepage"]').parent('li').removeClass('activepage');

	}

	if ($aboutstart <= $position && $position <= $aboutend)

	{

		$('nav ul li').children('#homepage a[href="##about"]').parent('li').addClass('activepage');

	}

	else

	{

		$('nav ul li').children('#homepage a[href="##about"]').parent('li').removeClass('activepage');

	}

	if ($servicesstart <= $position && $position <= $servicesend)

	{

		$('nav ul li').children('#homepage a[href="##services"]').parent('li').addClass('activepage');

	}

	else

	{

		$('nav ul li').children('#homepage a[href="##services"]').parent('li').removeClass('activepage');

	}

	if ($portfoliostart <= $position && $position <= $portfolioend)

	{

		$('nav ul li').children('#homepage a[href="##portfolio"]').parent('li').addClass('activepage');

	}

	else

	{

		$('nav ul li').children('#homepage a[href="##portfolio"]').parent('li').removeClass('activepage');

	}

	if ($blogstart <= $position && $position <= $blogend)

	{

		$('nav ul li').children('#homepage a[href="##blog"]').parent('li').addClass('activepage');

	}

	else

	{

		$('nav ul li').children('#homepage a[href="##blog"]').parent('li').removeClass('activepage');

	}

	if ($contactstart <= $position && $position <= $contactend)

	{

		$('nav ul li').children('#homepage a[href="##contact"]').parent('li').addClass('activepage');

	}

	else

	{

		$('nav ul li').children('#homepage a[href="##contact"]').parent('li').removeClass('activepage');

	}

});