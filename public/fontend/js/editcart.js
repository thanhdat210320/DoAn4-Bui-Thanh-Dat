function cartUpdate(event){
    event.preventDefault();
   let urlUpdate=$('.update_cart_url').data('url');
   let id =$ (this).data('id');
   let quantity = $(this).parents('tr').find('input.quantity').val();
   $.ajax({
       type:"GET",
       url:urlUpdate,
       data:{id:id,quantity:quantity},
       success:function(data){
           if(data.code===200){
           $('.cart_wrapper').html(data.cart);
           location.reload();
       }
   },
   error:function(){

   }});    
}

$(function(){
   $(document).on('click','.cart-updte',cartUpdate);
});