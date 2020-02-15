$(document).ready(function(){

      // Phone masking
      $('#phone').mask('(999) 999-9999', {placeholder:'x'});
      $('#parent_phone').mask('(999) 999-9999', {placeholder:'x'});

      /***************************************/
      /* Datepicker */
      /***************************************/
      // Start date
      function dateFrom(date_from, date_to) {
        $( date_from ).datepicker({
          dateFormat: 'mm/dd/yy',
          prevText: '<i class="fa fa-caret-left"></i>',
          nextText: '<i class="fa fa-caret-right"></i>',
          onClose: function( selectedDate ) {
            $( date_to ).datepicker( 'option', 'minDate', selectedDate );
          }
        });
      }

      // Finish date
      function dateTo(date_from, date_to) {
        $( date_to ).datepicker({
          dateFormat: 'mm/dd/yy',
          prevText: '<i class="fa fa-caret-left"></i>',
          nextText: '<i class="fa fa-caret-right"></i>',
          onClose: function( selectedDate ) {
            $( date_from ).datepicker( 'option', 'maxDate', selectedDate );
          }
        });
      }

      // Destroy date
      function destroyDate (date) {
        $( date ).datepicker('destroy');
      }

      // Initialize date range
      dateFrom('#date_from', '#date_to');
      dateTo('#date_from', '#date_to');
      /***************************************/
      /* end datepicker */
      /***************************************/

      // Validation
      $( "#j-pro" ).justFormsPro({
        rules: {
          first_name: {
            required: true
          },
          last_name: {
            required: true
          },
          email: {
            email: true
          },
          day: {
            required: true
          },
          month: {
            required: true
          },
          year: {
            required: true
          },
          birth_place: {
            required: true
          },
          civil_status: {
            required: true
          },
          gender: {
            required: true
          },
          religion: {
            required: true
          },
          parent_mobile_number: {
            required: true
          },
          number_of_siblings: {
            required: true
          },
          father_name: {
            required: true
          },
          mother_name: {
            required: true
          },
          parent_address: {
            required: true
          }
        },
        messages: {
          first_name: {
            required: "Field is required"
          },
          last_name: {
            required: "Field is required"
          },
          email: {
            email: "Incorrect email format"
          },
          day: {
            required: "Field is required"
          },
          day: {
            required: "Field is required"
          },
          month: {
            required: "Field is required"
          },
          year: {
            required: "Field is required"
          },
          birth_place: {
            required: "Field is required"
          },
          civil_status: {
            required: "Field is required"
          },
          gender: {
            required: "Field is required"
          },
          religion: {
            required: "Field is required"
          },
          parent_mobile_number: {
            required: "Field is required"
          },
          number_of_siblings: {
            required: "Field is required"
          },
          father_name: {
            required: "Field is required"
          },
          mother_name: {
            required: "Field is required"
          },
          parent_address: {
            required: "Field is required"
          }
        },
        formType: {
          multistep: true
        }
      });
    });