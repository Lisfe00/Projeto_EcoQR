class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
      this.mobileMenu = document.querySelector(mobileMenu);
      this.navList = document.querySelector(navList);
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeClass = "active";
  
      this.handleClick = this.handleClick.bind(this);
    }
  
    animateLinks() {
      this.navLinks.forEach((link, index) => {
        link.style.animation
          ? (link.style.animation = "")
          : (link.style.animation = `navLinkFade 0.5s ease forwards ${
              index / 7 + 0.3
            }s`);
      });
    }
  
    handleClick() {
      this.navList.classList.toggle(this.activeClass);
      this.mobileMenu.classList.toggle(this.activeClass);
      this.animateLinks();
    }
  
    addClickEvent() {
      this.mobileMenu.addEventListener("click", this.handleClick);
    }
  
    init() {
      if (this.mobileMenu) {
        this.addClickEvent();
      }
      return this;
    }
  }
  
  const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
  );
  
  mobileNavbar.init();


function mascara_cpf_cnpj() {
  var cpf_cnpj = document.querySelector("#cpf_cnpj");
  var ncpf = cpf_cnpj.value.length;

  if (ncpf <= 11) {
    cpf_cnpj.value = cpf_cnpj.value.replace(
      /^(\d{3})(\d{3})(\d{3})(\d{2})/,
      "$1.$2.$3-$4"
    );
  } else if (ncpf > 11) {
    cpf_cnpj.value = cpf_cnpj.value.replace(
      /^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/,
      "$1.$2.$3/$4-$5"
    );
  }
}


function mascara_fone() {
  var fone = document.querySelector("#fone");
  var nfone = fone.value.length;

  if(nfone == 1){
    fone.value = `(${fone.value}`
  }else if(nfone == 3){
    fone.value += ") "
  }else if(nfone == 6){
    fone.value += " "
  }else if(nfone == 11){
    fone.value += "-"
  }
  
}

function mascara_cep() {
  var cep = document.querySelector("#cep");
  var ncep = cep.value.length;

  if(ncep == 5){
    cep.value += "-"
  }
  
}


function esconder() {
  var outros = document.querySelector("#outros");
  var estado = document.querySelector("#estado");

  if (estado.value === "Outros") {
    outros.style.display = "flex";
  }else{
    outros.style.display = 'none';
  }
}

function mostrar_senha() {
  var tipo = document.querySelector("#senha")
  var imagem = document.querySelector('#img_cadeado_fechado')

  if(tipo.type === "password"){
    tipo.type = "text";
    imagem.style.display = "flex";
  }else{
    tipo.type = "password";
    imagem.style.display = "none";
  }
}