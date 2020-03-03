@php 
$basic =\App\BasicSetting::first();
@endphp

<div class="footer pgfooter m-t-50">
      <div class="container topfooter footercolor">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h2 class="footer__heading">Contact</h2>
            <ul class="footer__list list-reset">
              <li class="footer__item"> 
                <p class="footer__link">Email:<span>example@gmail.com</span></p>
              </li>
              <li class="footer__item"> 
                <p class="footer__link">Phone:<span>094504584</span></p>
              </li>
            </ul>
             
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h2 class="footer__heading">Terms and Policy</h2>
            <p class="text-left footer__link">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h2 class="footer__heading">Social Link</h2>
            <h3 class="text-left">
              <i class="fab fa-facebook-square"></i>&nbsp;
              <i class="fab fa-linkedin"></i>&nbsp;
              <i class="fab fa-instagram"></i>
            </h3>
            <form class="form-inline">
              <div class="input-group input-group-depend">
                <input type="text text-muted" class="form-control" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-dark" type="button">Scribe</button>
                </div>
              </div>
            </form>
          </div>  
        </div>    
      </div>
  </div>
  <div class="footer__bottom">
      <div class="container text-left">
        <p class="">{{$basic->copyright}}</p>
      </div>
  </div>
