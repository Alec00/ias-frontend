jQuery(document).ready(function ($) {

    //SCROLL UP
    $('.scroll_up').on('click', function () {
        $('body, html').animate({
            scrollTop: 0
        }, 700);
    });


    $('.selectpicker').select2({
        minimumResultsForSearch: -1,
        placeholder: $(this).attr('data-placeholder')
    });

    $('.bootstrap-select .dropdown-menu.open').on('click', function(e) {
        var tH = $(this).closest('.bootstrap-select').find('select');
        if ($(tH).hasClass('radio-dropdown')) {
            e.stopPropagation();
        }
    });

    //HEADER COLLAPSE
    window.onscroll = function () {
        if ($(window).width() > 767) {
            if ($(window).scrollTop() > 50)
                $('body').addClass('header_collapsed');
            else $('body').removeClass('header_collapsed');
        }
    };
    if ($(window).scrollTop() > 50 && $(window).width() > 767)
        $('body').addClass('header_collapsed');

    //Mobile menu
    $('.open_main_menu').on('click', function () {
        $('body').toggleClass('opened_menu');
        $('.mobile_nav').slideToggle();
    });
    $('.has_child > a').on('click', function () {
        $(this).closest('.has_child').addClass('active');
        $('.mobile_nav').addClass('open_sub');
    });
    $('.mobile_submenu > li:first-child > a').on('click', function (e) {
        e.preventDefault();
        $('.has_child').removeClass('active');
        $('.mobile_nav').removeClass('open_sub');
    });

    $('.open_result_table').on('click', function () {
        if ($(this).closest('.result_table_mobile_item').hasClass('opened')) {
            $(this).closest('.result_table_mobile_item').removeClass('opened');
            $(this).closest('.result_table_mobile_item').find('.result_table_mobile_panel').slideUp();
        } else {
            $('.result_table_mobile_item').removeClass('opened');
            $('.result_table_mobile_panel').slideUp();
            $(this).closest('.result_table_mobile_item').addClass('opened');
            $(this).closest('.result_table_mobile_item').find('.result_table_mobile_panel').slideDown();
        }
    });

    //Message box close
    $('.message_close').on('click', function () {
        $('body').removeClass('has_message');
        $('.message_box').hide();
    });

    //Checkboxes
    $(document).on('click', '.checkbox input[type=checkbox]', function () {
        var th = $(this);
        if (!th.prop('checked')) {
            th.closest('.checkbox').removeClass('checked');
        } else {
            th.closest('.checkbox').addClass('checked');
        }
    });

    //Radio
    $(document).on('click', '.radio input[type=radio]', function () {
        var radioName = $(this).attr('name');
        $('input[name="' + radioName + '"]').closest('.radio').removeClass('checked');
        $(this).closest('.radio').addClass('checked');
    });

    var localeUk = {
        format: 'DD.MM.YYYY',
        daysOfWeek: [
            "Пн",
            "Вт",
            "Ср",
            "Чт",
            "Пт",
            "Сб",
            "Нд"
        ],
        monthNames: [
            "Січень",
            "Лютий",
            "Березень",
            "Квітень",
            "Травень",
            "Червень",
            "Липень",
            "Серпень",
            "Вересень",
            "Жовтень",
            "Листопад",
            "Грудень"
        ]
    };
    var dPicker = $('.daterange_wrap > input[name="daterange"]');
    if ($(window).width() > 767) {
        dPicker.daterangepicker({
            singleDatePicker: true,
            autoApply: true,
            opens: 'center',
            // parentEl: '.daterange_wrap',
            locale: localeUk
        });
    } else {
        dPicker.daterangepicker({
            singleDatePicker: true,
            autoApply: true,
            opens: 'left',
            // parentEl: '.daterange_wrap',
            locale: localeUk
        });
    }

    $('.right_datepicker input[name="daterange"]').daterangepicker({
        //singleDatePicker: true,
        //autoApply: true,
        opens: 'left',
        //parentEl: '.daterange_wrap',
        locale: localeUk
    });

    $('.left_datepicker input[name="daterange"]').daterangepicker({
        //singleDatePicker: true,
        //autoApply: true,
        opens: 'right',
        //parentEl: '.daterange_wrap',
        locale: localeUk
    });

    $('[data-toggle="tooltip"]').tooltip();

    //ADD FORM
    $('.collapse_btn .add_block').on('click', function () {
        var parentT = $(this).closest('.result_table_mobile_item ').find('.edit_subject_block').first();
        var afterI = $(this).closest('.result_table_mobile_item ').find('.result_table_mobile_panel');
        var cloneF = parentT.clone();
        var cloneFF = cloneF.prepend('<div class="del_btn_block"><button class="del_btn"></button></div>');
        cloneFF.appendTo(afterI);
    });

    //REMOVE FORM
    $(document).on('click', '.del_btn_block .del_btn', function () {
        $(this).closest('.edit_subject_block').remove();
    });

    //ADD FORM INPUT
    $('.form-width-btn .add_block').on('click', function () {
        var cloneInput = $(this).closest('.form-width-btn').clone();
        cloneInput.find('.add_block').remove();
        cloneInput.find('label').remove();
        cloneInput.prepend('<button class="del_btn"></button>');
        $(this).closest('.form-width-btn').after(cloneInput);
    });

    //REMOVE FORM INPUT
    $(document).on('click', '.form-width-btn .del_btn', function () {
        $(this).closest('.form-width-btn').remove();
    });

    //SHOW TEXT
    $('.show_text').on('click', function () {
        $(this).closest('.text_wrap').toggleClass('full_text');
    });

    /*$('.selectpicker').select2({
        minimumResultsForSearch: -1,
        placeholder: $(this).attr('data-placeholder')
    });*/
    $(document).on('pjax:success', function () {
        $('.selectpicker').selectpicker({
            style: 'btn_bordered',
            tickIcon: 'icon-check'
        });
    });

    $('[data-add-tr]').on('click', function (e) {
        e.preventDefault();
        var th = $(this);
        var thTr = th.closest('tr');
        if (th.attr('data-click-state') == 1) {
            th.attr('data-click-state', 0);
            th.removeClass("active");
            thTr.next('tr').remove();
        } else {
            th.attr('data-click-state', 1);
            th.addClass("active");
            $('<tr><td colspan="' + thTr.find('td').length + '" class="alert_row">' + th.data('add-tr') + '</td></tr>').insertAfter(thTr);
        }
    });

    add_dooted();

    function add_dooted() {
        if ($('.result_table tbody').length > 0) {
            $('.result_table tbody td:not(.result_table_action)').wrapInner("<span></span>");
            var h = 100;
            $('.result_table tbody tr').each(function (index, element) {
                h = $('td:first-child > span', element).height();
                $('td:not(.result_table_action):not(.not_dotted) > span', element).each(function (index2, element2) {
                    if ($(element2).height() > h) {
                        $(element2).wrapInner("<div style='max-height:" + h + "px'></div>").append("<button class='show_text'></button>").wrapInner("<div class='text_wrap'></div>");
                    }
                });
            });
            $('.result_table').on('click', '.show_text', function () {
                $(this).closest('.text_wrap').toggleClass('full_text');
            });
        }
    }

    $('.open_accordeon_items').on('afterValidate', function (e) {
        $('.result_table_mobile_item').addClass('opened');
        $('.result_table_mobile_panel').show();
    });


    $('.daterange_wrap input').on('show.daterangepicker', function(ev, picker) {
        $('body').addClass('calendar_shown')
    });

    $('.daterange_wrap input').on('hide.daterangepicker', function(ev, picker) {
        $('body').removeClass('calendar_shown')
    });


    $('.range_slider').each(function(){
        var th = $(this);
        th.ionRangeSlider({
            onChange: function (data) {
                var thVal = th.attr('data-val');
                th.closest('.range_box').find('.range_val').html(data.from);
                if (data.from > 0) {
                    th.closest('.range_box').addClass('active');
                    th.closest('.range_box').next('.range_max_note').find('.max_val_note').html(thVal);
                    if (data.from > thVal) {
                        th.closest('.range_box').addClass('max_val');
                    } else {
                        th.closest('.range_box').removeClass('max_val');
                    }
                } else {
                    th.closest('.range_box').removeClass('active');
                }
            }
        });
    });

    var stickV = 98;

    if ($(window).width() > 1199) {
        $(".progress_bar_wrap").stick_in_parent({
            offset_top: stickV,
            parent: 'body'
        });
    }

    $('.message_close').on('click', function () {
        if ($(window).width() > 1199) {
            if($('.progress_bar_wrap').length > 0) {
                stickV = 54;
                console.log(stickV);
                $(".progress_bar_wrap").trigger("sticky_kit:detach");
                $(".progress_bar_wrap").stick_in_parent({
                    offset_top: stickV,
                    parent: 'body'
                });
            }
        }
    });

    $('.tree_list .tree_icon').click( function() {
        $(this).closest('li').toggleClass('expanded');
        $('.tree_list_wrap').getNiceScroll().resize();
    });

    //SCROLL
    var nicelist = $('.tree_list_wrap').niceScroll({
        cursorborder: "0",
        cursorborderradius: "2",
        cursoropacitymin: 1,
        railpadding: { top: 0, right: 5, left: 0, bottom: 0 },
        cursorcolor: '#c3cfd7',
        cursorwidth: 3
    });

    //SCROLL
    var noteScroll =  $('.note_list').niceScroll({
        cursorborder: "0",
        cursorborderradius: "2",
        cursoropacitymin: 1,
        railpadding: { top: 3, right: 0, left: 0, bottom: 3 },
        cursorcolor: '#859fb9',
        cursorwidth: 3
    });

    $('.note_box').on('shown.bs.dropdown', function () {
        $('.note_list').getNiceScroll().resize();
    });

    $(window).resize(function () {
        if ($(window).width() > 1182) {
            $('.mobile_nav').attr('style', '');
            $('body').removeClass('opened_menu');
        }
        table.columns.adjust().draw();
    });

    var table = $('.data_table').DataTable( {
        //autoWidth: false,
        paging: false,
        searching: false,
        ordering:  false,
        info:  false,
        scrollX: 400,
        scrollY: 400,
        scrollCollapse: true,
        fixedColumns: {
            leftColumns: 1
        }
    } );
    table.columns.adjust().draw();

    $('.dataTables_scrollHead').on('scroll', function () {
        if($(this).scrollLeft() > 0) {
            $(this).closest('.DTFC_ScrollWrapper').find('.DTFC_LeftWrapper').addClass('scrolled');
        } else {
            $(this).closest('.DTFC_ScrollWrapper').find('.DTFC_LeftWrapper').removeClass('scrolled');
        }
    });


    $('.employees_tabs a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        table.columns.adjust().draw();
    });


    var progress_circle = $(".my-progress-bar").circularProgress({
        height: "120px",
        width: "120px",
        line_width: 5,
        color: "#e38d00",
        starting_position: 0,
        percent: 0,
        percentage: true
    });
    progress_circle.circularProgress('animate', 100, 2000);

	//SHOW HIDE USE BLOCK
	$('#page_use').on('click', function () {
		$(this).hide();
        $('.page_use_block').show();
    });

	$('.page_use_block_close').on('click', function () {
        $('.page_use_block').hide();
		$('#page_use').show();
    });

});

//SCROLL UP SHOW
window.onscroll = function () {
    if ($(window).scrollTop() > 500)
        $('.scroll_up').fadeIn();
    else $('.scroll_up').fadeOut();
};