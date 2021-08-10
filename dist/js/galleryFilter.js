$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }

                if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
            }
                $(this).addClass("active");
            });
});

$(document).ready(function(){

    $(".filter-btn-rounded").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }

                if ($(".filter-button-rounded").removeClass("active")) {
            $(this).removeClass("active");
            }
                $(this).addClass("active");
            });
});

$(document).ready(function(){

    $(".filter-button-secundary").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }

                if ($(".filter-button-secundary").removeClass("active")) {
            $(this).removeClass("active");
            }
                $(this).addClass("active");
            });
});

//var numberAll = 10;
var numberAbstratos = 6;
var numberAnimais = 17;
var numberArquitetura = 5;
var numberBebidas = 6;
var numberCarros = 3;
var numberCidades = 9;
var numberComida = 17;

//cores
var numberCorAmarelo = 10;
var numberCorAzul = 10;
var numberCorColorido = 18;
var numberCorLaranja = 6;
var numberCorPB = 5;
var numberCorRosa = 11;
var numberCorVerde = 15;
var numberCorVermelho = 3;

var numberEspirituais = 11;
var numberFlores = 10;
var numberFrases = 1;
var numberLugares = 12;
var numberMar = 11;
var numberMusica = 1;
var numberNatureza = 25;
var numberNeon = 4;
var numberPessoas = 11;
var numberPlantas = 14;
var numberVintage = 4;

var placeImageAbstratos = function(x) {
    var img_abstratos="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_abstratos += '<a href="assets/img/pics/Abstratos/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Abstratos/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_abstratos").innerHTML = img_abstratos;
    };
placeImageAbstratos(numberAbstratos); 

var placeImageAnimais = function(x) {
    var img_animais="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_animais += '<a href="assets/img/pics/Animais/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Animais/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_animais").innerHTML = img_animais;
    };
    placeImageAnimais(numberAnimais);
    
    var placeImageArquitetura = function(x) {
    var img_arquitetura="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_arquitetura += '<a href="assets/img/pics/Arquitetura/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Arquitetura/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_arquitetura").innerHTML = img_arquitetura;
    };
    placeImageArquitetura(numberArquitetura);
    
    
    var placeImageBebidas = function(x) {
    var img_bebidas="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_bebidas += '<a href="assets/img/pics/Bebidas/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Bebidas/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_bebidas").innerHTML = img_bebidas;
    };
    placeImageBebidas(numberBebidas);
    
    var placeImageCarros = function(x) {
    var img_carros="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_carros += '<a href="assets/img/pics/Carros/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Carros/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_carros").innerHTML = img_carros;
    };
    placeImageCarros(numberCarros);
    /*
    var placeImageCeu = function(x) {
    var img_ceu="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_ceu += '<a href="assets/img/pics/Ceu/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Ceu/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_ceu").innerHTML = img_ceu;
    };
    placeImageCeu(numberCeu); 
    
    var placeImageCidades = function(x) {
    var img_cidades="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_cidades += '<a href="assets/img/pics/Cidades/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Cidades/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_cidades").innerHTML = img_cidades;
    };
    placeImageCidades(numberCidades);
    
    var placeImageComidas = function(x) {
    var img_comidas="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_comidas += '<a href="assets/img/pics/Comida/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Comida/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_comidas").innerHTML = img_comidas;
    };
    placeImageComidas(numberComida);
    
    var placeImageEspirituais = function(x) {
    var img_espirituais="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_espirituais += '<a href="assets/img/pics/Espirituais/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Espirituais/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_espirituais").innerHTML = img_espirituais;
    };
    placeImageEspirituais(numberEspirituais);
    
    var placeImageFlores = function(x) {
    var img_flores="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_flores += '<a href="assets/img/pics/Flores/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Flores/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_flores").innerHTML = img_flores;
    };
    placeImageFlores(numberFlores);
    
    var placeImageFrases = function(x) {
    var img_frases="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_frases += '<a href="assets/img/pics/Frases/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Frases/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_frases").innerHTML = img_frases;
    };
    placeImageFrases(numberFrases);
    
    var placeImageLugares = function(x) {
    var img_lugares="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_lugares += '<a href="assets/img/pics/Lugares/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Lugares/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_lugares").innerHTML = img_lugares;
    };
    placeImageLugares(numberLugares);
    
    var placeImageMar = function(x) {
    var img_mar="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_mar += '<a href="assets/img/pics/Mar/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Mar/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_mar").innerHTML = img_mar;
    };
    placeImageMar(numberMar);
    
    var placeImageMusica = function(x) {
    var img_musica="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_musica += '<a href="assets/img/pics/Musica/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Musica/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_musica").innerHTML = img_musica;
    };
    placeImageMusica(numberMusica);
    
    var placeImageNatureza = function(x) {
    var img_natureza="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_natureza += '<a href="assets/img/pics/Natureza/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Natureza/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_natureza").innerHTML = img_natureza;
    };
    placeImageNatureza(numberNatureza);
    
    var placeImageNeon = function(x) {
    var img_neon="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_neon += '<a href="assets/img/pics/Neon/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Neon/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_neon").innerHTML = img_neon;
    };
    placeImageNeon(numberNeon);
    
    var placeImagePessoas = function(x) {
    var img_pessoas="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_pessoas += '<a href="assets/img/pics/Pessoas/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Pessoas/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_pessoas").innerHTML = img_pessoas;
    };
    placeImagePessoas(numberPessoas);
    
    var placeImagePlantas = function(x) {
    var img_plantas="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_plantas += '<a href="assets/img/pics/Plantas/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Plantas/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_plantas").innerHTML = img_plantas;
    };
    placeImagePlantas(numberPlantas);
    
    var placeImageVintage = function(x) {
    var img_vintage="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_vintage += '<a href="assets/img/pics/Vintage/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Vintage/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_vintage").innerHTML = img_vintage;
    };
    placeImageVintage(numberVintage);
    
    var placeImageColorido = function(x) {
    var img_colorido="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_colorido += '<a href="assets/img/pics/Cores/Colorido/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Cores/Colorido/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_colorido").innerHTML = img_colorido;
    };
    placeImageColorido(numberCorColorido);
    
    var placeImagePretoBranco = function(x) {
    var img_preto_branco="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_preto_branco += '<a href="assets/img/pics/Cores/Preto_e_branco/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Cores/Preto_e_branco/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_preto_branco").innerHTML = img_preto_branco;
    };
    placeImagePretoBranco(numberCorPB);
    
    var placeImageAmarelo = function(x) {
    var img_amarelo="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_amarelo += '<a href="assets/img/pics/Cores/Amarelo/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Cores/Amarelo/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_amarelo").innerHTML = img_amarelo;
    };
    placeImageAmarelo(numberCorAmarelo);
    
    var placeImageAzul = function(x) {
    var img_azul="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_azul += '<a href="assets/img/pics/Cores/Azul/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Cores/Azul/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_azul").innerHTML = img_azul;
    };
    placeImageAzul(numberCorAzul);
    
    var placeImageLaranja = function(x) {
    var img_laranja="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_laranja += '<a href="assets/img/pics/Cores/Laranja/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Cores/Laranja/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_laranja").innerHTML = img_laranja;
    };
    placeImageLaranja(numberCorLaranja);
    
    var placeImageRosa = function(x) {
    var img_rosa="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_rosa += '<a href="assets/img/pics/Cores/Rosa/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Cores/Rosa/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_rosa").innerHTML = img_rosa;
    };
    placeImageRosa(numberCorRosa);
    
    var placeImageVerde = function(x) {
    var img_verde="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_verde += '<a href="assets/img/pics/Cores/Verde/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Cores/Verde/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_verde").innerHTML = img_verde;
    };
    placeImageVerde(numberCorVerde);
    
    var placeImageVermelho = function(x) {
    var img_vermelho="";
    for (var counter = 1; counter <= x; counter++ ) {
         img_vermelho += '<a href="assets/img/pics/Cores/Vermelho/0'+counter+'.jpg" data-lightbox="roadtrip"><img class="img-responsive gallery__img" src="assets/img/pics/Cores/Vermelho/0'+counter+'.jpg" alt=""/>';
    }
        document.getElementById("placing_vermelho").innerHTML = img_vermelho;
    };
    placeImageVermelho(numberCorVermelho); */