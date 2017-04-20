$(document).ready(function() {
// 2GIS MAP WIDGETS
DG.then(function() {
	var map,
        myPopUp;

        map = DG.map('map', {
            center: [52.04058,113.483748],
            zoom: 17,
            scrollWheelZoom: false
        });

        DG.popup([52.040857,113.483282])
            .setLatLng([52.040857,113.483282])
            .setContent('"Элемент" - сервисный центр')
            .openOn(map);
});

// LINK WITHOUT SCROLL
$('a.scroll').click(function(e){
	e.preventDefault();
	var ID_Scroll = $(this).attr('href');
	var top_Scroll= $(ID_Scroll).offset();
	$('html, body').animate({scrollTop: top_Scroll.top}, "slow");
    $('.navigation.open, .social.open').removeClass('open');
});

// FORM MASK PHONE NUMBER
$('[name = phone]').mask("+7(999) 999-9999");


$("#zakaz").submit(function(event) {
    event.preventDefault();
    var form_data = $(this).serialize(); 
        $.ajax({
        type: "POST", 
        url: "zakaz.php", 
        data: form_data,
        success: function() {
            //код в этом блоке выполняется при успешной отправке сообщения
            alert("Ваш заказ принят");
        }
    });
});    


//b_PS = body (background) position scroll;
$(window).on('scroll',function(){
	var b_PS = $(document).scrollTop() / 2;
	$('.bg, #zakaz_frame').css('background-position-y',b_PS + 'px');
});

$('.menu').click(function(){
    $('.navigation, .social').toggleClass('open');
});

});