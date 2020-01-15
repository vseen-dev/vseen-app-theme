class Navbar {
  constructor() {
    this.sideBar = document.getElementById('slide-menu');
    this.openSlideBtn = document.getElementById('open-slide');
    this.closeSlideBtn = document.getElementById('close-slide');

    this.events();

    console.log('Client width: ', document.documentElement.clientWidth);
  }

  events() {
    this.openSlideBtn.addEventListener('click', this.openSlideMenu.bind(this));
    this.closeSlideBtn.addEventListener('click', this.closeSlideMenu.bind(this));
  }

  openSlideMenu() {
    const screenWidth = document.documentElement.clientWidth;

    if (screenWidth <= 360) {
      this.sideBar.style.width = '70%';
      this.sideBar.style.borderTopLeftRadius = '25px';
      this.sideBar.style.borderBottomLeftRadius = '25px';
    } else if (screenWidth >= 361 && screenWidth <= 414) {
      this.sideBar.style.width = '60%';
      this.sideBar.style.borderTopLeftRadius = '25px';
      this.sideBar.style.borderBottomLeftRadius = '25px';
    } else if (screenWidth >= 415 && screenWidth <= 823) {
      this.sideBar.style.width = '45%';
      this.sideBar.style.borderTopLeftRadius = '25px';
      this.sideBar.style.borderBottomLeftRadius = '25px';
    } else if (screenWidth >= 824 && screenWidth <=1024) {
      this.sideBar.style.width = '40%';
      this.sideBar.style.borderTopLeftRadius = '25px';
      this.sideBar.style.borderBottomLeftRadius = '25px';
    } else if (screenWidth >= 1025 && screenWidth <= 1366) {
      this.sideBar.style.width = '35%';
      this.sideBar.style.borderTopLeftRadius = '25px';
      this.sideBar.style.borderBottomLeftRadius = '25px';
    } else {
      this.sideBar.style.width = '20%';
      this.sideBar.style.borderTopLeftRadius = '25px';
      this.sideBar.style.borderBottomLeftRadius = '25px';
    }

  }

  closeSlideMenu() {
    this.sideBar.style.width = '0';
  }
}

export default Navbar;