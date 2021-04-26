$(document).ready(function(){


   s.ajaxSetup({
      headers:{
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }

   });

    $('.razorpay_pay_btn').click(function(e){
   e.preventDefault();


       var data={
           '_token': $('input[name=token]').val(),
           'first_name': $('input[name=first_name]').val(),
           'last_name': $('input[name=last_name]').val(),
           'phone_no': $('input[name=phone_no]').val(),
           'alter_no': $('input[name=alter_no]').val(),
           'address1': $('input[name=address1]').val(),
           'address2': $('input[name=address2]').val(),
           'city': $('input[name=city]').val(),
           'state': $('input[name=state]').val(),
           'pincode': $('input[name=pincode]').val(),


       } 


       $.ajax({
           type:"POST",
           url:'/confirm-razorpay-payment',
           data:data,
           success: function(response){
               if(response.status_code=="no_data_in_cart")
               {
                window.location.href="/cart";
               }
               else
               {
                // var options = {
                //     "key": "rzp_test_5AEIUNEJxBPv5", // Enter the Key ID generated from the Dashboard
                //     "amount": (response.total_price *100),
                //     "name": "Fab Cart",
                //     "description": "thank you for purchasing",
                //     "image": "https://localhost:8000/images/logo.png",
                //     "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                //     "handler": function (razorpay_response){
                //         alert(razorpay_response.razorpay_payment_id);
                //     },
                //     "prefill": {
                //         "name": response.first_name+response.last_name,
                //         "email": response.email,
                //         "contact": response.phone_no,
                //     },
                  
                //     "theme": {
                //         "color": "#3399cc"
                //     }
                // };
                // var rzp1 = new Razorpay(options);
              
                //     rzp1.open();
                //     e.preventDefault();

                console.log(response.total.price);

                }
               

           }
       });

    });

})