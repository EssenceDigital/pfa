/* ------------------------------------------------------------------------------
*
*
* ---------------------------------------------------------------------------- */

$(function() {

    // Toggle success class
    $('.photo-checkbox').on('change', function () {
                var checked = [],
                unchecked = [];
        if($('#remove-selected').hasClass('disabled')){
            $('#remove-selected').removeClass('disabled');
        }
        if ($(this).parent('span').hasClass('checked')) {
        	$(this).parents('tr').addClass('success');
            $.uniform.update();
        } else {


            $(this).parents('tr').siblings().each(function() {
              if($(this).hasClass('success')){
                checked.push(true);
              } else{
                unchecked.push(true);
              }
            });
            console.log(checked);
            if(checked.length == 0){
                $('#remove-selected').addClass('disabled');
            }

            $(this).parents('tr').removeClass('success');
            $.uniform.update();
        }
    });




    
});
