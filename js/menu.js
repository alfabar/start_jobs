/* Desafio: programação do menu responsivo 

-Crie um manipulador de evento de click para o ícone do menu
-Quando ocorrer o primeiro clique no ícone, o script deve aplicar a classe "menu-aberto" à lista do nav (.menu), e quando ocorrer um outro clique no ícone, o script deve remover a classe "menu-aberto".
-Desafio do desafio: faça também o texto do ícone/botão alternar entre "Menu" e "Fechar".



*/

const botaoMenu = document.querySelector('.icone')
const menu = document.querySelector('.menu')


botaoMenu.addEventListener('click', function(event){
  event.preventDefault() 
  menu.classList.toggle('menu-aberto')


  if(menu.classList.contains('menu-aberto')){
    botaoMenu.innerHTML = 'FECHAR &times'
    }else{
    botaoMenu.innerHTML = 'MENU &equiv;' 
    }
  
} )
