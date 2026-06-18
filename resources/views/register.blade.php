<style>
    html,body{
        height:100%;
        padding:0px;
        margin:0px;
    }
     input:focus {
  outline: none!important;
}
    .loginwrap{
        display:flex;
        flex-direction:column;
        height:100%;
        background: url(https://khutso.com/img/loginBg.33a8ec1a.png) no-repeat;
        background-size: 100% 45%;
    }
    .header{
        display:flex;
        justify-content:flex-end;
        align-items:center;
        padding-top: 1em;
        padding-right: 1.33em;
    }
    .login_form{
        display:flex;
        flex-direction:column;
        margin:2em;
        background:#fff;
        position:relative;
        box-shadow: 0.026667rem 0.026667rem 0.106667rem rgba(51,51,51,.5);
       border-radius: 1.533333rem;
       height: 37em!important;
    width: 46%;
    margin-left: 18em;
    margin-top: 5em;
    }
    .child-2{
        align-items:center;
    }
    .logo{
        display:flex;
        justify-content:center;
        align-items:center;
        height: 18%;
        width: 89%;
        padding-top: 0.5rem;
    }
    .form-image{
        width: 52%;
    height: 63%;
    }
    .form-fields{
        display:flex;
        flex-direction:row;
        align-items:center;
        justify-content:flex-start;
        overflow: hidden;
    border-bottom: 0.026667rem solid #eee;
    width: 80%;
    height: 20%;
    font-size: 13px!important;
    padding-left: 1.1rem;
    }
    .login-button{
        display:flex;
        justify-content:center;
        align-items:center;
        width: 89%;
    }
    .login{
       width: 18.2rem;
    height: 2.8rem;
    border: 0;
    border-radius: 0.666667rem;
    background: #ff362e;
    color: #fff;
    margin-top: 0.1rem;
    font-size: 1.29rem;
    font-weight: 600;
    }
    input{
        height: 100%;
    width: 100%;
    border: none;
    padding: 15px;
    color: inherit;
    font: inherit;
    font-family: sans-serif;
    opacity: .3;
    }
    .input-form{
        flex:0 0 80%;
    }
    .icon{
        color: #d7d7d7;
       font-size: 22px!important;
    }
    .register{
        display:flex;
        flex-direction:row;
        justify-content:center;
        align-items:center;
        width: 87%;
        padding-left: 1em;
        font-family: sans-serif;
    }
    .alert{
    display:flex;
    justify-content:center;
    align-items:center;
    background:#fff;
    position: fixed;
    top: 45%;
    left: 50%;
    width: 8.533333rem;
    overflow: hidden;
    font-size: .426667rem;
    background-color: #fff;
    border-radius: 0.426667rem;
    transform: translate3d(-50%,-50%,0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: .3s;
    transition: .3s;
    -webkit-transition-property: opacity,-webkit-transform;
    transition-property: opacity,-webkit-transform;
    transition-property: transform,opacity;
    transition-property: transform,opacity,-webkit-transform;
    }
    @media (max-width: 800px) {
        .image{
            height:80%;
        }
        .login_form{
            margin-left: 1.9em;
            width: 85%;
   
        }
        .login-button{
            margin-top:.7em;
        }
        .login{
       width: 18rem;
    height: 2.7rem;
    border: 0;
    border-radius: 2.5rem;
    background: #ff362e;
    color: #fff;
    margin-top: 0.533333rem;
    font-size: 1.22rem;
    font-weight: 700;
    }
        .form-image{
            width: 62%;
    height: 63%;
        }
        
    }
</style>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-k5c5h6MSR28dJTvQh0jzLdd76RigZbBcymoy0xV7qIirRRyd8V7KnTcqHyJgS7eO" crossorigin="anonymous">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-7zibmTk43u1+myGnJ3qV7o8fnc/6PbSChpZLzWY9Xj+t4db4qcNbsPwTWlWbQ2Mh" crossorigin="anonymous"></script>

     </head>
    <body>
      
        @if(session('error'))
   
            <script>
        alert('{{ session('error') }}')
        </script>
       
@endif
        <div class="loginwrap">
            <div class="header child-1">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAABNVBMVEVHcEwNLXL+9fXvAAAIKXHwAAHwAAAIKXEsJmYIKXHs8vXo8fTy8/XvAAAKK3L4+fv2QT8pTIbi6O8AHWgAGmYEI2329/nzNDTuFRUKK3IKK3L87u7xLS0AImw8XpT////tEBHvOTn6WVfyfX0kQX7H0N02ToS4wtP2nJ2cq8T2vr6Lm7jwAADvAAD///8JK3LxLS0BIWv95OT+///1Pj0oTIbwOzw8XpQLLHIAGmXz7+8DJW7sAADxUFH86ur4Q0L88vIjQH3d7vXo9Pb44N/6WFf5///4xcbyWVofNnb9+vo3Uoj4urrxfH3v8/dTaphFXI/uCwvY4+xqfaasuc3Q2OTwR0j1rKztHR3tJSXxbW24x9jwX2Cir8fl6/CSor3uEhPypKN7jK/u6OvH0d+Glrbxi4u9UAJ8AAAAUHRSTlMAh57T5/ntGAaXc3j82fn8rDca6uO0BqUTVlhZ0jd4V5jtrJg3sbGxsbbrh////////////////////////////////////////////////nE4CpYAAAJ5SURBVDjLlZVpc5swEIblM/F4JnY8SSZNj7Rp0tMGhGKCakyBEHzfR3zlTvr/f0JXArvYY0/o+0Eg6fGuQfsuCC1pN5mOxGOx+Lvwh/doo7ZC0fyv81w2m81J8gWOhrbWY4kdseAHVXEnsQZ9ExXFVVAUo0cr2HZCFNeBopjYXuL2xU2guu8jD77QjSA1vx4swHCzh/E6UMW0dSuE59yxIAg3FSyqq6CK1TsCm29d7vAHTMigTQvqCkhrz4CR0qdDDn7UGgbMU48YL4EY95qwXv3T0T4zLlNXNKVEIGrfpD6QVm54uKEm1UkGwJ+O0dA6PGi3ZS7AfHvAw91rE53chQDcaw+cuqQp9Sqkv3nyQLsPaaslRRtfO9023UPo1KzUpoI+GY0fgBR0xYvI0l5Lo5ksTGsV0zxFScvqWoQQ3bYduBhKlknS4Z7YNrvAvmUl0ckVqFgslsvlItM9BzvD4mKNAVcnKJIDsWzemPXkreXcMRdB8WwgxVEsGBgLDgZOzR/Gp/mzrCiC0r+5zhVPHff18PvhcAgj30+j5CWT1SSu5i9cZhNZN2C8tQBIot08qNK7FJjshn7uO8IHaTwx4AjNfH4XigJT2rsV+Nnej+agPU1BUUCxSCXnucaKAoWo2XfDzaDyjHlR1FpdWDMaHShr54WV2RZbIZBnDJXnLKrnwv094WVdzXAPsnDyTBvVhWnryWeFwmOKB9VcK6BMCv7dWJvpzRds+s1VoLzKhbpnLnQsT7TRtQA+xEsuBBty38ztynxY1p07la5pAMyJ4X+t5xv4Cmy9tqXUzg58zed7hUKjeLVJBW97oKNgjfQ/WnPwZv/K5+MvNhIBSIQ7wZwAAAAASUVORK5CYII=" class="image">
            </div>
             <form >
                
            <div class="login_form child-2">
                
                <div class="logo">
                    <img src="https://watermelon-prod-s3.s3.ap-east-1.amazonaws.com/img_web/hbsdf257/upload/hbsdf257-202211212103373443308.png" class="form-image">
                </div>
                 
               
                <div class="form-fields">
                <div class="field-left">
                   <i class="fa fa-user icon" aria-hidden="true"></i>
                </div>
                   
                <div class="input-form">
                    <input type="text" placeholder="Create your username"id="username" name="username">
                </div>
                <div class="field-right">
                    
                </div>
            </div>
            <div class="form-fields">
                <div class="field-left">
                 <i class="fa fa-lock icon" aria-hidden="true"></i>
                </div>
             
                <div class="input-form">
                    <input type="password" id="password" placeholder="Create your password" name="password">
                </div>
                <div class="field-right">
                  <span class="toggle-password"><i class="fa fa-eye-slash icon"></i></span>
                </div>
            </div>
              <div class="form-fields">
                <div class="field-left">
                 <i class="fa fa-lock icon" aria-hidden="true"></i>
                </div>
             
                <div class="input-form">
                    <input type="password" id="confirm_password" placeholder="Confirm your password" name="confirm_password">
                </div>
                <div class="field-right">
                  <span class="toggle-password"><i class="fa fa-eye-slash icon"></i></span>
                </div>
            </div>
            <div class="form-fields">
                <div class="field-left">
                 <i class="fa fa-share-alt" style="color:#d7d7d7;font-size: 19px;" aria-hidden="true"></i>
                </div>
             
                <div class="input-form">
                    <input type="text" id="parent" placeholder="Enter the invitation code" name="parent" required>
                </div>
                <div class="field-right">
                </div>
            </div>
             <div class="form-fields">
                <div class="field-left">
                 <div class="input-group-prepend">
           <i class="fa fa-phone icon" aria-hidden="true"></i>
        </div>
                </div>
             
                <div class="input-form">
                    <input type="text"  placeholder="Enter your phone number" name="phone" required>
                </div>
                <div class="field-right">
                  
                </div>
            </div>
             <div class="login-button">
                 <button type="button" class="login">Register Now</button>
             </div>
             </form>
             <div class="register">
                 <span style="color:#000000; font-size:12px; font-weight:lighter;"><p>Already have an account?&nbsp;&nbsp;<span style="color:#ff362e; font-size:12px">Log in here</span></p></span>
                
             </div>
            
            </div>
           
            
        </div>
        
    </body>
</html>
<script>
    $(document).ready(function() {
    $('#username').blur(function() {
        var username = $(this).val();
        $.ajax({
             headers: {
        'X-CSRF-TOKEN': CSRF_TOKEN
      },
            url: '{{route('check.username')}}',
            type: 'POST',
            dataType: 'json',
            data: {
                username
                
            },
            success: function(response) {
               
                    swal({
                        text: 'Username already taken. Please choose a different username.',
                        icon: 'warning',
                        buttons: false,
                        timer: 5000
                    });
                
            }
        });
    });
});

</script>
<script>
    $(document).ready(function() {
    $('#paren').blur(function() {
        var parent = $(this).val();
        $.ajax({
             headers: {
        'X-CSRF-TOKEN': CSRF_TOKEN
      },
            url: '{{route('check.username')}}',
            type: 'POST',
            dataType: 'json',
            data: {
                parent
                },
            success: function(response) {
               
                    swal({
                        text: 'Invalid Refferal code.',
                        icon: 'error',
                        buttons: false,
                        timer: 5000
                    });
                
            }
        });
    });
});

</script>
<script>
    const CSRF_TOKEN="{{csrf_token()}}";
     $(document).ready(function() {
         $('.login').click(function(){
        var username = $('input[name="username"]').val();
        var password = $('input[name="password"]').val();
        var phone = $('input[name="phone"]').val();
        var parent = $('input[name="parent"]').val()
             $.ajax({
      headers: {
        'X-CSRF-TOKEN': CSRF_TOKEN
      },
      url: '{{route('register')}}',
      type: 'POST',
      dataType: 'json',
      data:{
          username,
          password,
          phone,
          parent
      },
      success: function(response) {
       swal({
                    text: 'Account Created Successfully',
                    icon: 'success',
                    timer: 5000,
                    buttons: false,
                });
      },
      
            });
                 
        });
});
</script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <script>
         @if(session('invalid_code'))
              swal({
                    text: 'Invalid Refferal Code',
                    icon: 'error',
                    timer: 5000,
                    buttons: false,
                });
        @endif
         </script>
 @if(session('taken'))
       <script>
        alert('{{ session('taken') }}')
        </script>
    @endif
<script>
    $(document).ready(function() {
  $('.toggle-password').click(function() {
    // $(this).toggleClass('active');
    var password = $('#password');
    if (password.attr('type') === 'password') {
      password.attr('type', 'text');
      $('.toggle-password i').removeClass('fa-eye-slash').addClass('fa-eye');
    } else {
      password.attr('type', 'password');
      $('.toggle-password i').removeClass('fa-eye').addClass('fa-eye-slash');
    }
  });
});
</script>