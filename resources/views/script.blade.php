<!-- jQuery 3 --> 
<script src="{{asset("js/jquery.min.js")}}"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script> 

<!-- template --> 
<script src="{{asset("js/niche.js")}}"></script> 

<!-- Chartjs JavaScript --> 
<script src="{{asset("plugins/chartjs/chart.min.js")}}"></script>
<script src="{{asset("plugins/chartjs/chart-int.js")}}"></script>

<!-- Chartist JavaScript --> 
<script src="{{asset("plugins/chartist-js/chartist.min.js")}}"></script> 
<script src="{{asset("plugins/chartist-js/chartist-plugin-tooltip.js")}}"></script> 
<script src="{{asset("plugins/functions/chartist-init.js")}}"></script>

<!-- form wizard --> 
<script src="{{asset("plugins/formwizard/jquery-steps.js")}}"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script> 
<script>
    var frmRes = $('#frmRes');
    var frmResValidator = frmRes.validate();
	
    var frmInfo = $('#frmInfo');
    var frmInfoValidator = frmInfo.validate();

    var frmLogin = $('#frmLogin');
    var frmLoginValidator = frmLogin.validate();

    var frmMobile = $('#frmMobile');
    var frmMobileValidator = frmMobile.validate();

    $('#demo1').steps({
      onChange: function (currentIndex, newIndex, stepDirection) {
        console.log('onChange', currentIndex, newIndex, stepDirection);
        // tab1
        if (currentIndex === 0) {
          if (stepDirection === 'forward') {
            var valid = frmRes.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmResValidator.resetForm();
          }
        }
        // tab2
        if (currentIndex === 1) {
          if (stepDirection === 'forward') {
            var valid = frmMobile.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmMobileValidator.resetForm();
          }
        }

        return true;

      },
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script> 
<script>
    $('#demo').steps({
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>




<script type="text/javascript">
  $(function () {
      $('#datetimepicker2').datetimepicker();
  });
</script>

