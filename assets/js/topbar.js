function mnToggleMenu(){
    /**
    *This toggles sidemenu for devices with less than 768px width
    */
    let sideMenu = document.getElementsByClassName('mn-nav-items-container-sm')[0];

    if(sideMenu.dataset['open'] === "true"){
        sideMenu.dataset['open'] = "false";
        document.getElementById('openBtn').style.display = 'block';
        document.getElementById('closeBtn').style.display = 'none';
    }
    else{
        sideMenu.dataset['open'] = "true";
        document.getElementById('openBtn').style.display = 'none';
        document.getElementById('closeBtn').style.display = 'block';
    }

    return false;
}
