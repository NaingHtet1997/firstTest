 $('.btn_add_row').click(function () {
            $('#new_row').clone().appendTo('#item_table').removeAttr('id').addClass('item').show();
        });
        /*$(document).on('click', '.btn_delete_item', function () {
            var btn = $(this);
            var item_id = btn.data('item-id');

            // Just remove the row if no item ID is set (new row)
            if (typeof item_id === 'undefined') {
                $(this).parents('.item').remove();
            }

            $.post("https://billing.axiom.com.mm/index.php/invoices/ajax/delete_item/16", {
                    'item_id': item_id,
                },
                function (data) {
                                        var response = JSON.parse(data);

                    if (response.success === 1) {
                        btn.parents('.item').remove();
                    } else {
                        btn.removeClass('btn-link').addClass('btn-danger').prop('disabled', true);
                    }
                });
        });*/
        $('.btn_add_product').click(function () {
           $('#modal-choose-items').modal('show');
        });
       
        
         $('body').on('focus', '.datepicker', function () {
            $(this).datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd',
                language: 'en',
                weekStart: '1',
                todayBtn: "linked"
            });
        });

         



         //////////////////////////////

         $('#btn_save_invoice').click(function () {
           
        var id = $('#id').val();

       var item = $('#item').val();
       var qty = $('#qty').val();
       var price = $('#price').val();
       var item_discount = $('#item_discount').val();
       var description = $('#description').val();
       $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
           type: "POST",
           url: "/invoice/update/"+ id,
           data: {item:item, qty:qty, price:price,item_discount:item_discount, description:description }
          
       });
   });

  
 
         