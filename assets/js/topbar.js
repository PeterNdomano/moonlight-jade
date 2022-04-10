function mnToggleMenu(){
    /**
    *This toggles sidemenu for devices with less than 768px width
    */
    let sideMenu = document.getElementsByClassName('mn-nav-items-container-sm')[0];

    if(sideMenu.dataset['open'] === "true"){
        sideMenu.dataset['open'] = "false";
    }
    else{
        sideMenu.dataset['open'] = "true";
    }

    return false;
}
