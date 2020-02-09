
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {

    
    $(document).on('click', '.btn-delete', function () {
        var _this = $(this);
        $.ajax({
            type: "POST",
            data: {
                id  :   $(this).attr('idmonhoc'),
            },
            url: "DeleteMonhoc",
            success: function(data){
                if(data=='OK'){
                    _this.parents('tr').remove();
                }else{
                    alert('loi roi')
                }
                
            }
         });
    });
});
