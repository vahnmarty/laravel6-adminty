<script type="text/javascript" src="{{ url('files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ url('files/assets/pages/j-pro/js/jquery.ui.min.js') }}"></script>

<script src="{{ url('files/assets/pages/widget/amchart/amcharts.js') }}"></script>
<script src="{{ url('files/assets/pages/widget/amchart/serial.js') }}"></script>
<script src="{{ url('files/assets/pages/widget/amchart/light.js') }}"></script>
<script src="{{ url('files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ url('files/assets/js/SmoothScroll.js') }}"></script>
<script src="{{ url('files/assets/js/pcoded.min.js') }}"></script>

<script type="text/javascript" src="{{ url('files/assets/js/modal.js') }}"></script>
<script type="text/javascript" src="{{ url('files/assets/js/modalEffects.js') }}"></script>
<script type="text/javascript" src="{{ url('files/assets/js/classie.js') }}"></script>

<script type="text/javascript" src="{{ url('files/bower_components/pnotify/js/pnotify.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/pnotify/js/pnotify.desktop.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/pnotify/js/pnotify.buttons.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/pnotify/js/pnotify.confirm.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/pnotify/js/pnotify.callbacks.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/pnotify/js/pnotify.animate.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/pnotify/js/pnotify.history.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/pnotify/js/pnotify.mobile.js') }}"></script>
<script type="text/javascript" src="{{ url('files/bower_components/pnotify/js/pnotify.nonblock.js') }}"></script>
<script type="text/javascript" src="{{ url('files/assets/pages/pnotify/notify.js') }}"></script>


<script type="text/javascript" src="{{ url('files/assets/js/script.min.js') }}"></script>

<script src="{{url('js/dobpicker.js')}}"></script>


<script type="text/javascript">
    var success = "{{ Session::get('success') }}";
    if (success) {
        swal ({
            text: success,
            icon: 'success',
            button: 'OK',
        });
    }

    var deleted = "{{ Session::get('deleted') }}";
    if (deleted) {
        swal ({
            text: deleted,
            icon: 'error',
            button: 'OK',
        });
    }

    var error = "{{ Session::get('error') }}";
    if (error) {
        swal ({
            text: error,
            icon: 'error',
            button: 'OK',
        });
    }

    var danger = "{{ Session::get('flash_danger') }}";
    if (danger) {
        swal ({
            text: danger,
            icon: 'error',
            button: 'OK',
        });
    }

    var warning = "{{ Session::get('warning') }}";
    if (warning) {
        swal ({
            text: warning,
            icon: 'info',
            button: 'OK',
        });
    }

    var errors = $('.alert-errors').length;
    var html_errors = $('#html_errors').val();
    if(errors){
        swal ({
            text: html_errors,
            icon: 'error',
            button: 'OK',
        });
    }

    $(document).on('click', '.delete_btn',function(e){
        e.preventDefault();
        swal({
            text: 'Are you sure you want to delete this?',
            showCancelButton: true,
            icon: "warning",
            buttons: true,
            closeModal: false,
        }).then(result => {
            var form = $('.form-destroy');
            if (result == true) {
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: form.serialize(),
                    success:function() {
                        console('deleted');
                    }
                });
                $('.form-preloader').addClass('active');
                location.reload();
            }
        });
    });
</script>

<script type="text/javascript" src="{{ url('js/custom.js') }}?{{ mt_rand() }}"></script>