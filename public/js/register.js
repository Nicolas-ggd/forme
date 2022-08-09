$(document).ready(function (){

   $("#register").click(function (e){

       let params = $(this).serialize();

       e.preventDefault();

       $.post("?ajax=createUser", params)

           .done(function (response){
               $(document).Toasts('create', {
                   class: 'bg-success',
                   title: 'Success',
                   subtitle: 'Subtitle',
                   body: 'Account successful created'
               })
           })

            .fail(function (){
                $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: 'Error',
                    subtitle: 'Subtitle',
                    body: 'Something went wrong'
                })
            })
   });
});