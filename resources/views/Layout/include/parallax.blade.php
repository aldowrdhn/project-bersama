<style>
    .section{
      background-color: #8AA5FC;
      position: relative;
    }
    .section-text{
      width: 100%;
      height: 100%;
      opacity: 100%;
      font-size: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      color: white;
      font-weight: bolder;
    }
    .section-text p{
    position: relative;
    z-index: 2;
    }
  .parallax{
    background-image:url("http://fidiitkreatif.co.id/template/img/bg-img/8.jpg");
    /* Set a specific height */
    min-height: 500px; 
    opacity: 40%;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
  </style>
  <section>
    <div class="section">      
      <div class="section-text">
      <p>@yield('section-head')</p>
      </div>
        <div class="parallax"></div>
  </div>
  </section>