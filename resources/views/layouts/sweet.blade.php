<script type="text/javascript">
@if (session()->has('message'))
    @if(session()->has('icon'))
        swal({
            icon: "{{ session()->get('icon') }}",
            text: "{{ session()->get('message') }}",
            confirmButtonColor: "#AEDEF4"
        });
    @else 
        swal({
            icon: "success",
            text: "{{ session()->get('message') }}",
            confirmButtonColor: "#AEDEF4"
        });
    @endif
@endif
</script>