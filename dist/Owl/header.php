<!DOCTYPE html>
<html lang="ru">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello World</title>
      <?php include('inline-css.php'); ?>
  </head>

<body <?php body_class(); ?>>
  <nav class="main-menu fixed">
    <div class="w2560">
      <div class="w">
        <div class="logo">
          <a href="/" title="Homepage">
            <svg id="Layer_1" data-name="Layer 1" viewBox="0 0 207.12 207.29"><title>OWl nest</title><defs><style>.cls-1{fill:#00a551;}.cls-2{fill:#fff;}.cls-3{fill:#faaf40;}.cls-4{fill:#231f20;}.cls-5{fill:#09572f;}.cls-6{fill:#006838;}</style></defs><path class="cls-1" d="M.76,1.27V157.94a49,49,0,0,0,49,49H157.43a49,49,0,0,0,49-49V1.27l-43.34,31.9L42.76,33Z"/><polygon class="cls-2" points="53.43 144.01 102.09 205.94 154.59 144.01 103.76 84.44 53.43 144.01"/><circle class="cls-3" cx="56.43" cy="108.61" r="35.33"/><path class="cls-4" d="M56.43,148.94a40.34,40.34,0,1,1,40.33-40.33A40.38,40.38,0,0,1,56.43,148.94Zm0-70.67a30.34,30.34,0,1,0,30.33,30.34A30.37,30.37,0,0,0,56.43,78.27Z"/><path class="cls-3" d="M187.42,108.61a35.33,35.33,0,1,1-35.33-35.34A35.33,35.33,0,0,1,187.42,108.61Z"/><path class="cls-4" d="M152.09,148.94a40.34,40.34,0,1,1,40.33-40.33A40.38,40.38,0,0,1,152.09,148.94Zm0-70.67a30.34,30.34,0,1,0,30.33,30.34A30.37,30.37,0,0,0,152.09,78.27Z"/><path class="cls-5" d="M103.09,149.94l103-148.67L165.06,32C149,15.1,128.25,5.6,103.09,5.6"/><path class="cls-6" d="M103.59,5.6c-25.27,0-46.07,9.61-62.2,26.6L.76,1.27,103.09,149.94l.5-144.34"/><circle class="cls-4" cx="56.43" cy="108.61" r="14"/><circle class="cls-4" cx="152.09" cy="108.61" r="14"/><path class="cls-2" d="M172.1,119.94a11.34,11.34,0,1,1-11.34-11.33A11.34,11.34,0,0,1,172.1,119.94Z"/><path class="cls-2" d="M75.1,120.94a11.34,11.34,0,1,1-11.34-11.33A11.34,11.34,0,0,1,75.1,120.94Z"/><path class="cls-5" d="M45.93,206.94a14,14,0,0,1,14-14c7.72,0,14,3.6,14,14"/><path class="cls-5" d="M133.34,206.94a14,14,0,0,1,28,0"/></svg> OWL Nest
          </a>
        </div>
        <input type="checkbox" id="touch-menu" />
        <label for="touch-menu" class="mobile-menu">
          <div></div>Меню
        </label>
        <div class="menu">
          <ul>
            <li> <a href="">About</a></li>
            <li>
              <input type="checkbox" id="touch-submenu1" />
              <label for="touch-submenu1" class="mobile-submenu"></label>
              <a href="">Blog</a>
              <div class="submenu">
                <ul>
                  <li><a href="">WordPress</a></li>
                  <li><a href="">Travel</a></li>
                  <li><a href="">Photo</a></li>
                </ul>
              </div>
            <li><a href="">Portfolio</a>
            </li>
            <li><a href="">Contact Info</a></li>
            <li class="search-field">
              search
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>

  <div class="w2560">
    <main>
      