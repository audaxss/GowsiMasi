function animate(b, time){
    
    const a = document.querySelector(b)

    setInterval(()=>{
        a.classList.add('animate-text')
        a.style.opacity = '1'
        a.style.pointerEvents = 'visible'
    }, time)

}
            
animate('.first', 0)
animate('.second', 2000)
animate('.third', 4000)