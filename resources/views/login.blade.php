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
       height: 100%;
    width: 46%;
    margin-left: 18em;
    margin-top: 9em;
    }
    .child-2{
        align-items:center;
    }
    .logo{
        display:flex;
        justify-content:center;
        align-items:center;
        height: 40%;
        width:32%;
        padding-top: 0.5rem;
    }
    .form-image{
        width: 50%;
    height: 60%;
    }
    .form-fields{
        display:flex;
        flex-direction:row;
        align-items:center;
        justify-content:space-around;
        overflow: hidden;
    border-bottom: 0.026667rem solid #eee;
    width: 90%;
    height: 20%;
    }
    .login-button{
        display:flex;
        justify-content:center;
        align-items:center;
        width: 89%;
    }
    .login{
       width: 10.2rem;
    height: 3.066667rem;
    border: 0;
    border-radius: 0.666667rem;
    background: #ff362e;
    color: #fff;
    margin-top: 0.533333rem;
    font-size: 1.48rem;
    font-weight: 700;
    }
    input{
        height: 100%;
    width: 100%;
    border: none;
    padding: 0;
    color: inherit;
    font: inherit;
    font-size: 12px;
    }
    .input-form{
        flex:0 0 80%;
    }
    .icon{
        color: #d7d7d7;
       font-size: 24px!important;
    }
    .register{
        display:flex;
        flex-direction:row;
        justify-content:space-between;
        align-items:center;
        width: 87%;
        padding-left: .5em;
        font-size: .8rem;
        font-weight:lighter;
        padding-top: .8rem;
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
            margin-left: 1em;
            width: 92%;
            height:65%;
            margin-top: 7.5em;
            margin-bottom: 10em;
   
        }
        .login-button{
            margin-top:1.7em;
        }
        .login{
       width: 18rem;
    height: 2.7rem;
    border: 0;
    border-radius: 1.666667rem!important;
    background: #ff362e;
    color: #fff;
    margin-top: 0.533333rem;
    font-size: 1.30rem;
    font-weight: 700;
    }
        .form-image{
            width: 100%;
    height: 53%;
        }
        .form-fields{
            padding-left: 1.9rem;
            height: 15%;
            justify-content: space-between;
            width:80%;
        }
        
    }
</style>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     </head>
    <body>
         @if(session('not_logged_in'))
       <script>
        alert('{{ session('not_logged_in') }}')
        </script>
    @endif
        @if(session('order_limit'))
   
            <script>
        alert('{{ session('order_limit') }}')
        </script>
       
@endif
        <div class="loginwrap">

             <form action="{{route('submit.login')}}" METHOD="POST">
                 @csrf
            <div class="login_form child-2">
                
                <div class="logo">
                    <img src="{{ asset('images/logo_loan.png') }}" class="form-image">
                </div>
                 
               
                <div class="form-fields">
                <div class="field-left">
                   <i class="fa fa-user icon" aria-hidden="true"></i>
                </div>
                   
                <div class="input-form">
                    <input type="text" placeholder="Please enter username" class="form-control"  name="email" id="email">
                </div>
                <div class="field-right">
                    
                </div>
            </div>
            <div class="form-fields">
                <div class="field-left">
                 <i class="fa fa-lock icon" aria-hidden="true"></i>
                </div>
             
                <div class="input-form">
                    <input type="password" id="password" class="form-control" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Please enter login password" name="password">
                </div>
                <div class="field-right">
                  <span class="toggle-password"><i class="fa fa-eye-slash icon"></i></span>
                </div>
            </div>
             <div class="login-button">
                 <button type="submit" class="login btn btn-outline-info">Log In</button>
             </div>
             </form>
             
            
            </div>
           
            
        </div>
        
    </body>
</html>
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