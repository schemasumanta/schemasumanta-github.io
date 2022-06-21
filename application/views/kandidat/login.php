
<main>

 <div class="support-company-area support-padding fix mt-5 p-3 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 text-center">
                <div class="right-caption">
                    <div class="section-tittle section-tittle2">
                        <h4>Login Kandidat</h4>
                        <p class="text-center">Silahkan Masukkan Username & Password</p>
                    </div>
                        <form method="post" action="<?php echo base_url('kandidat/ceklogin') ?>">

                    <div class="row align-items-center">
                        <div class="col-md-12 mb-3">
                            <div class="input-group">
                                <div class="icon input-group-text"><i class="fas fa-user" aria-hidden="true"></i></div>
                                <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="input-group">
                                <div class="icon input-group-text"><i class="fas fa-key" aria-hidden="true"></i></div>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="genric-btn success  w-100">Masuk</button>
                           <p>Belum Punya Akun ? Silahkan <a href="#" class="text-primary">Daftar</a></p> 
                       </div>
                   </div>
                       </form>
                   
               </div>

           </div>

       </div>
   </div>
</div>


</main>
