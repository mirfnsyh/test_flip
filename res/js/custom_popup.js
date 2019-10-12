$(document).ready(function () {
	$(document).click(function (e) {
		if (e.target === $('#my_modal')[0] && $('body').hasClass('modal-open')) {
			removeModal();
		}
	})
});

function removeModal(win_id) {
	if (win_id == undefined) {
		$('#own_content_left').css('height', '100%');
		$(".modal").remove();
		$(".modal-backdrop").remove();
		$("body").removeClass("modal-open");
		$("body").css({
			"overflow": "",
			"padding-right": ""
		});
	} else {
		$("#my_modal_" + win_id).remove();
		$('#own_content_left').css('height', '100%');
		var modal = $(".modal");
		var modal_length = modal.length;
		if (modal_length <= 0) {
			$(".modal").remove();
			$(".modal-backdrop").remove();
			$("body").removeClass("modal-open");
			$("body").css({
				"overflow": "",
				"padding-right": ""
			});
		}
	}
}
var window_id = 0;

function showPopup(url, title, height, width, view_button_close) {
	window_id++;
	var min_height = "80vh";
	var min_width = "95vw";
	if (!url.includes('http://') && !url.includes('https://')) url = _BASE_PATH + url;
	if (height == undefined) height = min_height;
	if (width == undefined) width = min_width;
	if (view_button_close == undefined) view_button_close = true;

	var html =
		'<div id="my_modal_' + window_id + '" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
		'<div class="modal-dialog" role="document" style="width:' + width + ';">' +
		'<div class="modal-content">' +
		'<div class="modal-header">';

	if (view_button_close) {
		// data-dismiss="modal"
		html += '<button type="button" class="close" aria-label="Close" onclick="removeModal(\'' + window_id + '\');">' +
			'<span aria-hidden="true">&times;</span>' +
			'</button>';
	}

	html += '<h4 class="modal-title" id="myModalLabel">' + title + '</h4>' +
		'</div>' +
		'<div class="modal-body" style="height:' + height + ';">' +
		'<iframe src="' + url + '" frameborder="0" height="100%" width="100%" scrolling="auto"></iframe>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>';

	$(document).keyup(function (e) {
		if (e.keyCode == 27) { // escape key maps to keycode `27`
			removeModal();
		}
	});

	$("body").append(html);
	$("body").css({
		"overflow": "hidden",
		"padding-right": "17px"
	});
	$(".modal").modal({
		backdrop: 'static',
		keyboard: true
	});
	$(".modal-dialog").draggable({
		handle: ".modal-header"
	});
}

function showPopupPDF(url, url_pdf_download, title, height, width, view_button_close) {
	window_id++;
	var min_height = "80vh";
	var min_width = "95vw";
	if (!url.includes('http://') && !url.includes('https://')) url = _BASE_PATH + url;
	if (height == undefined) height = min_height;
	if (width == undefined) width = min_width;
	if (view_button_close == undefined) view_button_close = true;

	var html =
		'<div id="my_modal_' + window_id + '" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
		'<div class="modal-dialog" role="document" style="width:' + width + ';">' +
		'<div class="modal-content">' +
		'<div class="modal-header">';

	if (view_button_close) {
		// data-dismiss="modal"
		html += '<button type="button" class="close" aria-label="Close" onclick="removeModal(\'' + window_id + '\');">' +
			'<span aria-hidden="true">&times;</span>' +
			'</button>';
	}

	html += '<h4 class="modal-title" id="myModalLabel">' + title + '</h4>' +
		'</div>' +
		'<div class="modal-body" style="height:' + height + ';">' +
		'<iframe src="' + url + '" frameborder="0" height="100%" width="100%" scrolling="auto"></iframe>' +
		'</div>' +
		'<div class="modal-footer">' +
		'<a href="' + url_pdf_download + '" class="btn btn-default btn-sm">Download PDF</a>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>';

	$(document).keyup(function (e) {
		if (e.keyCode == 27) { // escape key maps to keycode `27`
			removeModal();
		}
	});

	$("body").append(html);
	$("body").css({
		"overflow": "hidden",
		"padding-right": "17px"
	});
	$(".modal").modal({
		backdrop: 'static',
		keyboard: true
	});
	$(".modal-dialog").draggable({
		handle: ".modal-header"
	});
}



function showPopupHeaderButton(url, title, height, width, view_button_close) {
	var min_height = "80vh";
	var min_width = "95vw";
	if (!url.includes('http://') && !url.includes('https://')) url = _BASE_PATH + url;
	if (height == undefined) height = min_height;
	if (width == undefined) width = min_width;
	if (view_button_close == undefined) view_button_close = true;

	var html =
		'<div id="my_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
		'<div class="modal-dialog" role="document" style="width:' + width + ';">' +
		'<div class="modal-content">' +
		'<div class="modal-header">';

	if (view_button_close) {
		html += '<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="removeModal();">' +
			'<span aria-hidden="true">&times;</span>' +
			'</button>';
	}

	html += '<button style="margin-right:10px;" type="button" class="close" id="backButton">' +
		'<span class="fa fa-arrow-left" aria-hidden="true"></span>' +
		'</button>';

	html += '<h4 class="modal-title" id="myModalLabel">' + title + '</h4>' +
		'</div>' +
		'<div class="modal-body" style="height:' + height + ';">' +
		'<iframe id="iframeLog" src="' + url + '" frameborder="0" height="100%" width="100%" scrolling="auto"></iframe>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>';

	$(document).keyup(function (e) {
		if (e.keyCode == 27) { // escape key maps to keycode `27`
			removeModal();
		}
	});

	$("body").append(html);
	$("body").css({
		"overflow": "hidden",
		"padding-right": "17px"
	});
	$(".modal").modal({
		backdrop: 'static',
		keyboard: true
	});
	$(".modal-dialog").draggable({
		handle: ".modal-header"
	});

	$("#backButton").click(function () {
		$("#iframeLog").attr("src", url);
	});
}

function closePopupWindow() {
	jQuery(".close").trigger("click");
}

function popupSelect(table_id, obj_data, close_popup) {
	eval(obj_data.CallbackFunction + "(table_id, obj_data);");
	var closePopup = true;
	if (close_popup != null && close_popup != undefined) {
		closePopup = close_popup;
	}
	if (closePopup) {
		jQuery(".close").trigger("click");
	}
}

// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = [37, 38, 39, 40];

function preventDefault(e) {
	e = e || window.event;
	if (e.preventDefault)
		e.preventDefault();
	e.returnValue = false;
}

function keydown(e) {
	for (var i = keys.length; i--;) {
		if (e.keyCode === keys[i]) {
			preventDefault(e);
			return;
		}
	}
}

function wheel(e) {
	preventDefault(e);
}

function disable_scroll() {
	if (window.addEventListener) {
		window.addEventListener('DOMMouseScroll', wheel, false);
	}
	window.onmousewheel = document.onmousewheel = wheel;
	document.onkeydown = keydown;
}

function enable_scroll() {
	if (window.removeEventListener) {
		window.removeEventListener('DOMMouseScroll', wheel, true);
	}
	window.onmousewheel = document.onmousewheel = document.onkeydown = null;
}
