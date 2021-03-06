  'use strict';
  $(document).ready(function() {

      // $('#date,#datejoin').bootstrapMaterialDatePicker({
      //        time: false,
      //        clearButton: true
      //    });
      //  $("#example-date-inputS").bootstrapMaterialDatePicker({
      //                time: false,
      //                clearButton: true
      //            });

      $("#basic-forms").steps({
          headerTag: "h3",
          bodyTag: "fieldset",
          transitionEffect: "slideLeft",
          autoFocus: true,
          onInit: function (event, current) {
             $('.actions').hide();
          },
          onStepChanged: function (event, current, next) {
                if (current > 1) {
                    $('.actions > ul > li:nth-child(2)').hide();
                    $('.actions > ul > li:nth-child(1)').show();
                } 

                else {
                    $('.actions > ul > li:nth-child(2)').show();
                }
                $('#basic-forms-p-' + current).find('.has-autofocus').focus().select();

          },
          labels: {
              finish: 'Finish <i class="fa fa-chevron-right"></i>',
              next: 'Next <i class="fa fa-chevron-right"></i>',
              previous: '<i class="fa fa-chevron-left"></i> Previous'
          },
          onFinished: function(event, currentIndex){
            alert('Finish na!');
          }
      });

      $("#verticle-wizard").steps({
          headerTag: "h3",
          bodyTag: "fieldset",
          transitionEffect: "slide",
          stepsOrientation: "vertical",
          autoFocus: true
      });

      $("#design-wizard").steps({
          headerTag: "h3",
          bodyTag: "fieldset",
          transitionEffect: "slideLeft",
          autoFocus: true
      });

      var application_form = $('#application-form');
      application_form.steps({
          headerTag: "h3",
          bodyTag: "fieldset",
          transitionEffect: "slideLeft",
          onStepChanging: function(event, currentIndex, newIndex) {

              // Allways allow previous action even if the current form is not valid!
              if (currentIndex > newIndex) {
                  return true;
              }
              // Forbid next action on "Warning" step if the user is to young
              if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                  return false;
              }
              // Needed in some cases if the user went back (clean up)
              if (currentIndex < newIndex) {
                  // To remove error styles
                  application_form.find(".body:eq(" + newIndex + ") label.error").remove();
                  application_form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
              }
              application_form.validate().settings.ignore = ":disabled,:hidden";
              return application_form.valid();
          },
          onStepChanged: function(event, currentIndex, priorIndex) {

              // Used to skip the "Warning" step if the user is old enough.
              if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                  application_form.steps("next");
              }
              // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
              if (currentIndex === 2 && priorIndex === 3) {
                  application_form.steps("previous");
              }
          },
          onFinishing: function(event, currentIndex) {

              application_form.validate().settings.ignore = ":disabled";
              return application_form.valid();
          },
          onFinished: function(event, currentIndex) {
              $('.form-preloader').addClass('active');
              application_form.submit();
          }
      }).validate({
          errorPlacement: function errorPlacement(error, element) {

              element.before(error);
          },
          rules: {
              confirm: {
                  equalTo: "#password-2"
              }
          }
      });


      var form = $("#example-advanced-form").show();

      form.steps({
          headerTag: "h3",
          bodyTag: "fieldset",
          transitionEffect: "slideLeft",
          onStepChanging: function(event, currentIndex, newIndex) {

              // Allways allow previous action even if the current form is not valid!
              if (currentIndex > newIndex) {
                  return true;
              }
              // Forbid next action on "Warning" step if the user is to young
              if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                  return false;
              }
              // Needed in some cases if the user went back (clean up)
              if (currentIndex < newIndex) {
                  // To remove error styles
                  form.find(".body:eq(" + newIndex + ") label.error").remove();
                  form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
              }
              form.validate().settings.ignore = ":disabled,:hidden";
              return form.valid();
          },
          onStepChanged: function(event, currentIndex, priorIndex) {

              // Used to skip the "Warning" step if the user is old enough.
              if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                  form.steps("next");
              }
              // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
              if (currentIndex === 2 && priorIndex === 3) {
                  form.steps("previous");
              }
          },
          onFinishing: function(event, currentIndex) {

              form.validate().settings.ignore = ":disabled";
              return form.valid();
          },
          onFinished: function(event, currentIndex) {
              alert("Submitted!");
              $('.content input[type="text"]').val('');
              $('.content input[type="email"]').val('');
              $('.content input[type="password"]').val('');
          }
      }).validate({
          errorPlacement: function errorPlacement(error, element) {

              element.before(error);
          },
          rules: {
              confirm: {
                  equalTo: "#password-2"
              }
          }
      });
  });
