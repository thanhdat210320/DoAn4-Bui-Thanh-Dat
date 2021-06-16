function deleteCart(event){
    event.preventDefault();
   let urlDelete = $(this).data('url');
   let id = $(this).data('id');   
   $.ajax({
       type:"GET",
       url:urlDelete,
       data:{'id':id},
       success:function(data){
           if(data.code==200){
            $('.row').html(data.cart);
       }
   },
   error:function(){
   }});    
}

$(function(){
   $('.cart-delete').on('click',deleteCart);
});