<!doctype html>
<html lang="en">
  <head>
    @include('frontend.pages.head')
 
  </head>
  <body>
    @include('frontend.pages.header')

     @yield('content')
     
    @include('frontend.pages.footer') 

    <div class="message-wrapper">
        <div class="messenger">
          <div title="Чат с менеджером" class="messenger-btn"><img src="https://volgo-prime.ru/img/icons/chat.svg" alt="Чат с менеджером" /></div>
          <div id="messenger-links" class="messenger-links">
            {{--  <a title="Позвонить" href="tel:+120345678910"><img src="https://volgo-prime.ru/img/icons/phone-icon.svg" alt="Позвонить" /></a>  --}}
            <a target="blank" title="Whatsapp" href="https://api.whatsapp.com/send?phone=+8801877756677&text=Hi"><img src="https://volgo-prime.ru/img/icons/whatsapp-icon.svg" alt="Whatsapp" /></a>
            {{--  <a title="Viber" href="viber://chat?number=79270000000"><img src="https://volgo-prime.ru/img/icons/viber-icon.svg" alt="Viber" /></a>  --}}
            {{--  <a title="Telegram" href="https://t.me/romanvorozhbitov"><img src="https://volgo-prime.ru/img/icons/telegram-icon.svg" alt="Telegram" /></a>  --}}
            <a target="blank" title="Messinger" href="https://www.facebook.com/messages/t/100092170517780"><img src="{{asset('frontend/images/icon/messenger.svg')}}" alt="Вконтакте" /></a>
          </div>
        </div>
      </div>
 

    @include('frontend.modal.edit_modal')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     @include('frontend.pages.script')
 
<script>
      document.getElementById('submit-button').addEventListener('click',
        function handleForm(event) {
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           
            const form = document.getElementById('contactForm');
            const formdata = Object.fromEntries(new FormData(form));
            var email = formdata.email;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if(formdata.name=='' && !emailRegex.test(email) && formdata.message ==''){
                $('.visitor_email').removeClass('d-none');
                $('.visitor_email').text('Please enter a valid email address.');
                $('.visitor_name').removeClass('d-none');
                $('.visitor_message').removeClass('d-none');
                $('.visitor_phone').removeClass('d-none');
            }
            else if(formdata.name=='' ){
                $('.visitor_name').removeClass('d-none');
            }else if(!emailRegex.test(email)){
                $('.visitor_email').removeClass('d-none');
                $('.visitor_email').text('Please enter a valid email address.')
            }else if(formdata.phone ==''){
                $('.visitor_phone').removeClass('d-none');
            }else if(formdata.message ==''){
                $('.visitor_message').removeClass('d-none');
            }else{
                $.ajax({
                type: "POST",
                url: "{{ route('message.store') }}",
                data: formdata,
                success: function (response) {
                    $('#contactForm')[0].reset();
                    $('.visitor_email').addClass('d-none');
                    $('.visitor_name').addClass('d-none');
                    $('.visitor_message').addClass('d-none');
                    $('.visitor_phone').addClass('d-none');
                    $('.welcome_message').removeClass('d-none');
                    $('.welcome_message').html(response.message);
                    toastr.success(response.success);
                }
            });
        }   
    });
 
    function closeModal(){  
        $('#editModal').modal('hide');
    }

     function getEditModal(id,type,size=null){ 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: "GET",
            url: "{{ route('get.modal.form') }}",
            data: {id:id,type:type,size:size},
            success: function (response) {
                $('#edit_form').html(response.html); 
                $('#editModal').modal('show');
            }
        });
    }  
 
{{--  sweet alert  --}}
  
        toastr.options = {
            "closeButton": true,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
           
</script>

<script>
    var menuBtn = $('.messenger-btn'),
      menu    = $('.messenger-links');
  menuBtn.on('click', function() {
      if ( menu.hasClass('show') ) {
          menu.removeClass('show');
      } else {
          menu.addClass('show');
      }
  });
  $(document).mouseup(function (e){ 
    var div = $('.messenger'); 
    if (!div.is(e.target) 
        && div.has(e.target).length === 0) {
      $('.messenger-links').removeClass('show');
    }
  });
</script>
  </body>
</html>