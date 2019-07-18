

    <script type="text/javascript">

  
    $("#dob").flatpickr({
        dateFormat: "d-m-y"
    });

    
    function modalLogin(){


        $('#modal-login').modal('show');
        
        

    }


    $("#login-form").on('submit',function(event){
        event.preventDefault();
        var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
          type: "POST",
          url: '<?php echo Cake\Routing\Router::url(['controller' => 'Users', 'action' => 'login' ]); ?>',
          headers: {
           'X-CSRF-Token': csrfToken
         },
          dataType: "json",
          data: {
             username: username,
             password: password
          }, 
          success: function(data){
            console.log(data);
            if(data.uid > 0){
              location.href = "/";
            }else{
              swal.fire({
                title: "Error",
                text: "Usuario o contraseña incorrectos",
                type: "error"
              });
            }
          },
          error: function(err){
            console.log(err);
          }
        });



    });


    $("#register-form").on('submit',function(event){
        event.preventDefault();
        var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#passwd").val();
        var password2 = $("#passwd2").val();
        var phone = $("#phone").val();
        var role = $("#role").val();
        $.ajax({
          type: "POST",
          url: '<?php echo Cake\Routing\Router::url(['controller' => 'Users', 'action' => 'register' ]); ?>',
          headers: {
           'X-CSRF-Token': csrfToken
         },
          dataType: "json",
          data: {
             name: name,
             email: email,
             passwd: passwd,
             passwd2: passwd2,
             phone: phone,
             role: role
          }, 
          success: function(data){
            console.log(data);
            
          },
          error: function(err){
            console.log(err);
          }
        });



    });

    </script>
