<body>
  <div class="wrapper">
    <div class="sidebar">
      <div class="roomraccoon">
        <img src="assets/images/raccoon.png" alt="logo">
        <h3><?php echo(Authentication::getUserName()) ?></h3>
        <p><?php echo(Authentication::getJobTitle()) ?></p>
      </div>
      <ul>
        <li>
          <a href="<?=ROOT?>/">
            <span class="icon"><i class="fas fa-clipboard"></i></span>
            <span class="item">Index</span>
          </a>
        </li>
        <li>
          <a href="<?=ROOT?>/shopping">
            <span class="icon"><i class="fas fa-clipboard"></i></span>
            <span class="item">Shopping</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="section">
      <div class="top_navbar">
        <div class="toggleCollapse">
          <a href="#">
            <i class="fas fa-bars"></i>
          </a>
        </div>
      </div>