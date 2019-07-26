

<script type="text/javascript" src="{{asset('js/notify.js')}}"></script>

<script>
  function notify(type, message) {

    $.notify(message, { 
      globalPosition: 'bottom right',
      style: 'bootstrap',
      autoHideDisplay : 5000,
      className: type
    });
    
  }
  

</script> 