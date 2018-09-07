jQuery(document).ready(function ($) {
	
	
	
	$('.add_sub_title>a').on('click',function() {
		$(this).parents('.add_sub_body').toggleClass('opened');
	});
	
	$('.selectp').selectpicker();
	
	$('.live_search').select2({
        minimumResultsForSearch: 1,
        placeholder: $(this).attr('data-placeholder'),
		allowClear: true
    });
	
	$('.bootstrap-select .dropdown-menu.inner').niceScroll({
        cursorborder: "3",
        cursoropacitymin: 1,
		cursorcolor:'#a1b5c8',
		cursorwidth: 13,
		cursorborderradius: 3,
		background: '#fff',
		horizrailenabled: false,
	});
	$('.selectpicker').on('show.bs.select', function (e) {
        $('.bootstrap-select .dropdown-menu.inner').niceScroll({
           cursorborder: "3",
			cursoropacitymin: 1,
			cursorcolor:'#a1b5c8',
			cursorwidth: 13,
			cursorborderradius: 3,
			background: '#fff',
			horizrailenabled: false,
        });
    });
	
	$(window).on('hidden.bs.select', function () {
		setTimeout( function() { 
		$('.bootstrap-select .dropdown-menu.inner').getNiceScroll().resize()
		} , 1)
	});
	
	$(window).on('changed.bs.select', function () {
		setTimeout( function() { 
		$('.bootstrap-select .dropdown-menu.inner').getNiceScroll().resize()
		} , 1)
	});
	
	$(window).on('refreshed.bs.select', function () {
		setTimeout( function() { 
		$('.bootstrap-select .dropdown-menu.inner').getNiceScroll().resize()
		} , 1)
	});
	
	//DOUBLE MODAL
    $('.add_obj_new').on('click', function (e) {
        e.preventDefault();
        setTimeout(function () {
            $('#add_obj_new').modal('show');
        }, 500);
        $('#add_obj').modal('hide');
    });
	
	//EDIT
	$('.edit_btn').on('click',function() {
		$(this).parents('.add_sub_body').addClass('edit');
	});
	$('.close_edit').on('click',function() {
		$(this).parents('.add_sub_body').removeClass('edit');
	});
	
	//RADIO BTN
	$('input[type="radio"]').click(function(){
        if($(this).attr("value")=="no_vef"){
            $(".verif_close").hide();
        }
        if($(this).attr("value")=="vef"){
            $(".verif_close").show();

        }        
    });
	
});