/*!
* Start Bootstrap - Grayscale v7.0.2 (https://startbootstrap.com/theme/grayscale)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 100,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

// Cart Add
function addToCardFunction() { //get the checked option by the name
    var inputSize = $("input:radio[name=tamanho]:checked").val();
    var inputColor = $("input:radio[name=cor]:checked").val();
    var inputImage = $("input[id=selectedImage]").val();

    var saveProduct = JSON.parse(localStorage.getItem('saveProduct') || '[]'); //Create JSON storage

    saveProduct.push({ // Brings the checked option from form
        size: inputSize,
        color: inputColor,
        image: inputImage
    });

    localStorage.setItem("saveProduct", JSON.stringify(saveProduct)); //save actual state at the local storage

    window.objectCount = Object.keys(saveProduct).length; //count how many objects we have

    var stringify = JSON.parse(JSON.stringify(saveProduct)); //re-convert the JSON into string

    for (var i = 0; i < stringify.length; i++) { //Search for only data needed
        var itemArray = [objectCount];
        for(var j=0; j<objectCount; j++){
            itemArray[j] = '&tamanho='+stringify[i]['size']+'&cor='+stringify[i]['color']+'&selectedImage='+stringify[i]['image']+'';
           // console.log(itemArray);
        }
    }

    var realocateObject = JSON.parse(JSON.stringify(itemArray)); //Parse array
    var plainText = '';
    var finalItemUrl = '';
    var keyArray = Object.keys(realocateObject)
    var valueArray = Object.keys(realocateObject).map(key => realocateObject[key])

    for(let i=0; i<keyArray.length; i++) { //Put all text together
        plainText = plainText + valueArray[i];
    }

    finalItemUrl = ''+plainText+'';
    console.log(finalItemUrl);

    $("#keyID").val(finalItemUrl);
    
}

function checkoutSubmitFunction() {// Survey
    document.getElementById("checkout").submit();
    //$("#checkout").trigger('submit');
   // window.open(finalItemUrl,'__blank');
}