

<script type="text/javascript" src="https://rawgit.com/notifyjs/notifyjs/master/dist/notify.js"></script>

<script>
  @if(Session::has('success'))
     $.notify("{{ Session::get('success') }}", { 
        globalPosition: 'bottom right',
        style: 'bootstrap',
        autoHideDisplay : 5000,
        className: 'success'
    });
  @endif

  @if(Session::has('info'))
     $.notify("{{ Session::get('info') }}", { 
        globalPosition: 'bottom right',
        style: 'bootstrap',
        autoHideDisplay : 5000,
        className: 'info'
    });
  @endif

  @if(Session::has('error'))
     $.notify("{{ Session::get('error') }}", { 
        globalPosition: 'bottom right',
        style: 'bootstrap',
        autoHideDisplay : 5000,
        className: 'error'
    });
  @endif

  @if(Session::has('warning'))
     $.notify("{{ Session::get('warning') }}", { 
        globalPosition: 'bottom right',
        style: 'bootstrap',
        autoHideDisplay : 5000,
        className: 'warning'
    });
  @endif

</script> 