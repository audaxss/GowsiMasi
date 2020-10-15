//Initialization
const openBtn = document.querySelector('.open-btn')
const nav = document.querySelector('.nav-responsive')
const body = document.querySelector('body')
const navlogo = document.querySelector('.logo-container h1')

var navLines = document.querySelectorAll('.open-btn span')
var page = location.pathname.substr(location.pathname.lastIndexOf("/") + 1);

//Changing menu bar color
function menuBar(color) {
    navLines[0].style.background = color;
    navLines[1].style.background = color;
}
//Function Media Queries
function changeView(view){
    var trigger = 0;

    if(view.matches){
        //Mobile View
        openBtn.addEventListener('click', ()=>{
            if(trigger == 0){
                trigger = 1
                nav.classList.remove('nav-responsive');
                nav.classList.add('nav-show')
                navlogo.style.color = '#444'
                document.body.style.overflow = 'hidden'
                menuBar('#444')
            } else if(trigger == 1){
                trigger = 0
                if(page != 'index' && page != ''){
                    nav.classList.remove('nav-show');
                    nav.classList.add('nav-responsive')
                    navlogo.style.color = '#444'
                    document.body.style.overflow = 'auto'
                    menuBar('#444')  
                } else {
                    nav.classList.remove('nav-show');
                    nav.classList.add('nav-responsive')
                    navlogo.style.color = '#fff'
                    document.body.style.overflow = 'auto'
                    menuBar('#fff')      
                }
                
            }    
        })
    } else {
        //Desktop View
        if(page != 'index' && page != ''){
            nav.classList.remove('nav-show');
            nav.classList.add('nav-responsive')
            navlogo.style.color = '#444'
            document.body.style.overflow = 'auto'
            menuBar('#444')  
        } else {
            nav.classList.remove('nav-show');
            nav.classList.add('nav-responsive')
            navlogo.style.color = '#fff'
            document.body.style.overflow = 'auto'
            menuBar('#fff')  
        }
    }
}

var view = window.matchMedia("(max-width: 900px)")
changeView(view)
view.addListener(changeView)
document.addEventListener('contextmenu', event => event.preventDefault());