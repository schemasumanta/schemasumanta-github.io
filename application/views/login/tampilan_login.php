<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    .btn:hover {
      color: #fff !important;
      text-decoration: none;
    }
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Job Finder</title>

  <link rel="icon" href="<?php echo base_url() ?>assets/img/logo/logo.png">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets_login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="<?php echo base_url() ?>assets_login/css/sb-admin-2.min.css" rel="stylesheet">
  <style type="text/css">
   .input-group-text{
    background-color: #fe860c;
    color:white;
  }
  .bg-gradient{
    background: url('assets/img/background.jpg');
    background-size: inherit;

  }

  .modal-header,.btn_reset,.labelkolom{
    background-color: #fe860c; 
    color: white;
  }
  .btn-login{
    background-color:#0c55a2; 
    /*#fef400;*/
    /*color:#1d1815;*/
    color:white;

    font-weight: bold;
    letter-spacing: 1px;
  }
  
</style>
</head>

<body class="bg-gradient ">  
  <div class="container " data-title="<?php echo $this->session->flashdata('title'); ?>" data-text="<?php echo $this->session->flashdata('text'); ?>" data-icon="<?php echo $this->session->flashdata('icon'); ?>">

    <!-- Outer Row -->
    <div class="row justify-content-center mt-5">
      <div class="col-md-12 ">
        <div class="card o-hidden border-0 shadow-lg my-5 ">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row "> 
             <div class="col-md-6 text-center" style="overflow: hidden;background: #F7F7F7">
              <img src="<?php echo base_url()?>assets/img/background.svg" style="width :70%;margin-top: 50px">
            </div>

            <div class="col-md-6 p-5">
              <form  class="user" action="<?php echo site_url('login/ceklogin') ?>"class="sign-in-form"  method="post">
                <center><img src="<?php echo base_url()?>assets/img/logo/logo.png" style="width: 50%!important;"></center><br>
                <br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user text-light"></i></span>
                  </div>
                  <input type="text" class="form-control form-control-md"   id="username" name="username" placeholder="Username" required autofocus="autofocus" 
                  oninvalid="this.setCustomValidity('Silahkan Masukkan Username')"
                  oninput="this.setCustomValidity('')">
                </div>
                <br>
                <div class="input-group">
                  <div class="input-group-prepend" >
                    <span class="input-group-text"><i class="fa fa-key text-light"></i></span>
                  </div>
                  <input type="password" class="form-control form-control-md"   id="password" name="password" placeholder="Password" style="border-right: 0px solid black!important" required 
                  oninvalid="this.setCustomValidity('Masukkan Password')"
                  oninput="this.setCustomValidity('')">
                  <p class="input-group-text bg-transparent mata_password" style="border-left: 0px solid black!important;border-top-left-radius: 0px;border-bottom-left-radius: 0px;cursor: pointer;" onclick="showpassword()"><i class="fa fa-eye text-dark"></i></p>

                </div>
                <!-- /.input group --> 
                <br>
                <div class="row">
                  <div class="col-md-12 btn-group">
                    <a  href="<?php echo base_url() ?>" class="btn btn-md btn-danger mr-2"><i class="fas fa-sign-out-alt mr-2 "></i>BATAL</a>
                    <button class="btn btn-md  btn-login"><i class="fas fa-unlock-alt mr-2"></i>MASUK</button>

                  </div>

                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets_login/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets_login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets_login/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets_login/js/sb-admin-2.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    const notif = $('.container').data('title');
    if (notif) {
      Swal.fire({
        title:notif,
        html:$('.container').data('text'),
        icon:$('.container').data('icon'),
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.close();


        }
      });
    }
  });

  function showpassword()
  {
    if ($('.mata_password').html().includes('text-dark')!==false) {

      $('#password').attr('type','text');
      $('.fa-eye').removeClass('text-dark');
      $('.fa-eye').addClass('text-success');
    }else{
     $('#password').attr('type','password');
     $('.fa-eye').addClass('text-dark');
     $('.fa-eye').removeClass('text-success');
   }
 }

 $('.google').on('click',function(){
  window.location.href="<?php echo base_url('login/google') ?>"
});

 function hanyaAngka(evt)
 {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

  return true;
}
</script>
</body>

</html>
