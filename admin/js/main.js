/*
* @Author: indran
* @Date:   2018-10-17 14:04:46
* @Last Modified by:   indran
* @Last Modified time: 2018-10-17 16:03:50
*/


(function ($) {
	'use strict';

	$(function() {
		$('[data-toggle="offcanvas"]').on("click", function() {
			$('.sidebar-offcanvas').toggleClass('active')
		});
	});
	
	$(function () {
		var body = $('body');
		var contentWrapper = $('.content-wrapper');
		var scroller = $('.container-scroller');
		var footer = $('.footer');
		var sidebar = $('.sidebar');

		var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
		$('.nav li a', sidebar).each(function () {
			var $this = $(this);
			if (current === "") { 
				if ($this.attr('href').indexOf("index.html") !== -1) {
					$(this).parents('.nav-item').last().addClass('active');
					if ($(this).parents('.sub-menu').length) {
						$(this).addClass('active');
					}
				}
			} else { 
				if ($this.attr('href').indexOf(current) !== -1) {
					$(this).parents('.nav-item').last().addClass('active');
					if ($(this).parents('.sub-menu').length) {
						$(this).addClass('active');
					}
					if (current !== "index.html") {
						$(this).parents('.nav-item').last().find(".nav-link").attr("aria-expanded", "true");
						if ($(this).parents('.sub-menu').length) {
							$(this).closest('.collapse').addClass('show');
						}
					}
				}
			}
		})


		sidebar.on('show.bs.collapse', '.collapse', function () {
			sidebar.find('.collapse.show').collapse('hide');
		});

		applyStyles();

		function applyStyles() { 
			if (!body.hasClass("rtl")) {
				if ($('.settings-panel .tab-content .tab-pane.scroll-wrapper').length) {
					const settingsPanelScroll = new PerfectScrollbar('.settings-panel .tab-content .tab-pane.scroll-wrapper');
				}
				if ($('.chats').length) {
					const chatsScroll = new PerfectScrollbar('.chats');
				}
				if ($('.scroll-container').length) {
					const ScrollContainer = new PerfectScrollbar('.scroll-container');
				}
				if (body.hasClass("sidebar-fixed")) {
					var fixedSidebarScroll = new PerfectScrollbar('#sidebar .nav');
				}
			}
		}

		$('[data-toggle="minimize"]').on("click", function () {
			if ((body.hasClass('sidebar-toggle-display')) || (body.hasClass('sidebar-absolute'))) {
				body.toggleClass('sidebar-hidden');
			} else {
				body.toggleClass('sidebar-icon-only');
			}
		}); 
		$(".form-check label,.form-radio label").append('<i class="input-helper"></i>');
	});
})(jQuery);