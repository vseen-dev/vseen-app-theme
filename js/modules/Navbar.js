class Navbar {
  constructor() {
    this.sideBar = document.getElementById('slide-menu');
    this.openSlideBtn = document.getElementById('open-slide');
    this.closeSlideBtn = document.getElementById('close-slide');

    this.events();
  }

  events() {
    this.openSlideBtn.addEventListener('click', this.openSlideMenu.bind(this));
    this.closeSlideBtn.addEventListener('click', this.closeSlideMenu.bind(this));
  }

  openSlideMenu() {
    this.sideBar.style.width = '70%';
    this.sideBar.style.borderTopLeftRadius = '25px';
    this.sideBar.style.borderBottomLeftRadius = '25px';
  }

  closeSlideMenu() {
    this.sideBar.style.width = '0';
    console.log('hello from closeSlideMenu!')
    console.log('SideBar: ', this.sideBar);
  }
}

export default Navbar;