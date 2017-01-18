<!-- FOOTER -->
    <footer>
      <div class="container">
        <!-- <p class="pull-right"><a href="#">Back to top</a></p> -->
        <div class="col-md-8">
          <p >© Copyright 2016 - CoSyTech. All Rights Reserved. </p>
        </div>
        <div class="col-md-4">
        <ul class="social pull-right">
            <li data-toggle="tooltip" title="" data-original-title="Facebook">
                <a href="https://www.facebook.com/Cosytech-160990664330507/" target="_blank"><i class="fa fa-facebook"></i></a>
            </li> 
            <li data-toggle="tooltip" title="" data-original-title="Twitter">
                <a href="https://twitter.com/contact07504700" target="_blank"><i class="fa fa-twitter"></i></a>
            </li> 
            <li data-toggle="tooltip" title="" data-original-title="Youtube">
                <a href="https://www.linkedin.com/in/cosytech-india-a80494123" target="_blank"><i class="fa fa-linkedin"></i></a>
            </li>                     
        </ul>
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="assets/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="assets/js/bootsnav.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
            var serviceId = window.location.hash;
            $(serviceId).focus();
            if($('#cosyName').val()=='' || $('#cosyEmail').val()==''){
                $('#contact_submit').addClass("disabled").attr('disabled','disabled');
            } 
            $('form').on('change','#cosyName,#cosyEmail',function(e){
                if($('#cosyName').val()=='' || $('#cosyEmail').val()==''){
                    $('#contact_submit').addClass("disabled").attr('disabled','disabled');
                } 
                else{
                    $('#contact_submit').removeClass("disabled").removeAttr('disabled');
                }
            });
            $('#contact_form').on('submit', function (e)
            {
              $('#contact_submit').val("Submitting....");
              // $('.numbererr').hide();
              // $('.emailerr').hide();
                e.preventDefault();
                $.ajax(
              {
                  type: 'post',
                  url: 'contact-us.php',
                  data: $('#contact_form').serialize(),
                  success: function(data)
                  {
                    $('#contact_submit').val("Submit");
                    $('#show_msg').html("<b>Message sent successfully.</b>");
                  //    var data_array = $.parseJSON(data);
                  //  if(data_array.emailerrormessage)
                  //  {
                  //   $('.emailerr').show();
                  //   $('.emailerr').text(data_array.emailerrormessage);
                  //  }
                  //  else if(data_array.numbererrormessage)
                  //  {
                  //   $('.numbererr').show();
                  //   $('.numbererr').text(data_array.numbererrormessage);
                  //  }
                  //  else if(data_array.message)
                  // {
                  //   $('.my_update_panel').text(data_array.message);
                  //   $(".my_update_panel").slideDown("slow");
                  //   $('#quick_contact_popup_form')[0].reset();
                  //                   setTimeout(function()
                  //       {
                  //         $('#inquiry_button').trigger('click');
                  //         $('.my_update_panel').hide();
                  //       }, 4000);
                  // }
                },
                 error: function(xhr){
                    alert("An error occured: " + xhr.status + " " + xhr.statusText);
                }
                });
              });
        })
    </script>