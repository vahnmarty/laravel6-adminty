$(function(){
	$(".v-row").each(function(){
		var high = 0;

		$('.v-equal').each(function(i, item){
			if($(this).height() > high){
				high = $(this).height();
			}
			console.log(high);
		});

		$('.v-row .v-equal').css('height', high);

	});
});

$(function(){
	$('select').each(function(i, item){
		var select = $(this);
		if (typeof select.data('selected') !== 'undefined') {
			if(select.data('selected') != ''){
				select.val(select.data('selected'));
			}
		}
	});
});


$(window).on('load', function(){
	networkChecker();
	refreshTimer();
});

function networkChecker(){
	var url = window.location.origin + '/api/network';
	var checker = $('#network-checker');
	var message = $('#network-content');
	var time = new Date;
	$.ajax({
		url:url,
		success:function(data){
			checker.hide();
			var ping = new Date - time;
			if(ping >= 10000)
			{
				checker.show();
				message.html('Low Internet Connection. Ping: ' + ping + 'ms');
			}else{
				message.html('You have lost your internet connection');
			}
			//console.log(ping);
		},
		error:function(data){
			message.html('You have lost your internet connection');
			checker.show();
		}
	});

	
	$('#network-checker').on('click', function(){
		$(this).hide();
	});
}



function refreshTimer(){
    $(document).ready(function(){
        var timeleft = 10;
        var downloadTimer = 
        setInterval(function(){
            timeleft--;
            document.getElementById("countdowntimer").textContent = timeleft;
            if(timeleft <= 0){
                clearInterval(downloadTimer);
                refreshTimer();
                networkChecker();
            }
        },1000);
    });
}

$(document).ready(function(){
	$('.input-placeholder').each(function(i, item){
		var item = $(this);
		var value = item.val();
		var placeholder = item.prop('placeholder') || $(this).data('placeholder');
		var parent = $(this).closest('div');
		if(value !== ''){
			var label = parent.find('.text-placeholder');
			if(!label.length){
				var label = parent.append('<label class="text-placeholder">'+placeholder+'</label>');
				label = parent.find('.text-placeholder');
			}
			label.html(placeholder);
			label.show();
		}else{
			parent.find('.text-placeholder').hide();
		}
	});
});

$('.input-placeholder').on('input change', function(){
	var placeholder = $(this).prop('placeholder') || $(this).data('placeholder');
	console.log(placeholder);
	var value = $(this).val();
	var parent = $(this).closest('div');
	if(value !== ''){
		var label = parent.find('.text-placeholder');
		if(!label.length){
			var label = parent.append('<label class="text-placeholder">'+placeholder+'</label>');
			label = parent.find('.text-placeholder');
		}
		label.html(placeholder);
		label.show();
	}else{
		parent.find('.text-placeholder').hide();
	}
	
});