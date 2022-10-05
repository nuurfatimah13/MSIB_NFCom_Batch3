<!-- .nav-menu -->
<nav id="navbar" class="nav-menu navbar">
  <ul class="menu">
    <li><a href="index.php?page=home" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
    <li><a href="index.php?page=about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
    <li><a href="index.php?page=study" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>My Study</span></a></li>
    <li><a href="index.php?page=tasks" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Tasks</span></a></li>
    <li><a href="index.php?page=portofolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portofolio</span></a></li>
    <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
  </ul>
</nav>

<script type="text/javascript">
	const tabs=document.querySelectorAll('.menu a');

  for(let tab of tabs){
    tab.onclick=function(){
    let activetab=document.querySelectorAll('a.active');
    activetab[0].classList.remove('active')
      tab.classList.add('active'); 
    }
  }
</script>