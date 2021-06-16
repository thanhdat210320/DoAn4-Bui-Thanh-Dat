function cartUpdate(event){
    event.preventDefault();
   let urlUpdate=$(this).data('url');
    let id = $(this).data('id');
    let quantity = $(this).parents('tr').find('input.quatity').val();
    $.ajax({
        Type:'GET',
        url:urlUpdate,
        data:{'id':id,'quantity':quantity},
        success: function(data){
            if(data.code==200){
                alert('oke');
            }
        }   
    });
}

$(function(){
   $(document).on('click','.cart-update',cartUpdate);
});