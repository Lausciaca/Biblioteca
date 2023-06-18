if(window.history.replaceState){
    console.log('nuevo');
    window.history.replaceState(
        null,null,window.location.href
    )
}