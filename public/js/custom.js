(function( $ ){
   $.fn.preload_on = function() {
      var el  = $(this);
      el.css('position', 'relative !important');
      el.append('<div class="preloader3 loader-block wrapper-loader">'+
                        '<div class="circ1 loader-info"></div>'+
                        '<div class="circ2 loader-info"></div>'+
                        '<div class="circ3 loader-info"></div>'+
                        '<div class="circ4 loader-info"></div>'+
                    '</div>');
      return this;
   }; 
})( jQuery );

(function( $ ){
   $.fn.preload_off = function() {
      var el  = $(this);
      el.find('.loader-block').remove();
      return this;
   }; 
})( jQuery );


$('.duplicate-validator').on('input', function(){
    var input = $(this);
    var val = input.val();
    if(val != ''){
        var list = $(input.data('duplicator'));
        var status = $(input.data('target_status'));
        var ifExist = list.find('option[value="'+val+'"]').length;
        if(ifExist){
            status.removeClass('text-success').addClass('text-danger').html('<i class="fa fa-times-circle"></i>&nbsp; <span>Not Available</span>');
            input.removeClass('is-valid').addClass('is-invalid');
        }else{
            status.removeClass('text-danger').addClass('text-success').html('<i class="fa fa-check-circle"></i>&nbsp; <span>Available</span>');
            input.removeClass('is-invalid').addClass('is-valid');
        }
    }
    else{
        status.empty();
    }
});



$(window).on('load',function(){
   $('select[data-value]').each(function(i, item){
      var selected = $(this).data('value');
      $(this).val(selected);
   });
});

$(document).on('ready',function(){
  var loader = $('.window-tab-loader');
  var url = "https://beta.ourmanna.com/api/v1/get/?format=json&order=random";
  var bible = $('#bible-api');
  $.getJSON(url, function(data){
      var verse = data['verse']['details']['text'];
      var book = data['verse']['details']['reference'];
      bible.html(verse + ' -'+book);
  });
});

function windowTabContent(string){
  var tab = $('#window-tab-loader');
  tab.show();
  $('#window-tab-content').html(string);
  
}

function closeWindowTab(){
  $('#window-tab-loader').hide();
}