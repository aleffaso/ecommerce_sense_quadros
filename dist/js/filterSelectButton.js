/*button hidden*/

document.querySelector('.abstratos').style.display = 'none';
document.querySelector('.animais').style.display = 'none';
document.querySelector('.arquitetura').style.display = 'none';
document.querySelector('.bebidas').style.display = 'none';
document.querySelector('.carros').style.display = 'none';
document.querySelector('.ceu').style.display = 'none';
document.querySelector('.cidades').style.display = 'none';
document.querySelector('.comidas').style.display = 'none';
document.querySelector('.espirituais').style.display = 'none';
document.querySelector('.flores').style.display = 'none';
document.querySelector('.frases').style.display = 'none';
document.querySelector('.lugares').style.display = 'none';
document.querySelector('.mar').style.display = 'none';
document.querySelector('.musica').style.display = 'none';
document.querySelector('.natureza').style.display = 'none';
document.querySelector('.neon').style.display = 'none';
document.querySelector('.pessoas').style.display = 'none';
document.querySelector('.plantas').style.display = 'none';
document.querySelector('.vintage').style.display = 'none';

document.querySelector('.colorido').style.display = 'none';
document.querySelector('.preto_branco').style.display = 'none';
document.querySelector('.amarelo').style.display = 'none';
document.querySelector('.azul').style.display = 'none';
document.querySelector('.laranja').style.display = 'none';
document.querySelector('.rosa').style.display = 'none';
document.querySelector('.verde').style.display = 'none';
document.querySelector('.vermelho').style.display = 'none';

document.querySelector('.categoria').addEventListener('click', showBtn);
document.querySelector('.all_cores').addEventListener('click', showBtn_cores);

document.querySelector('.todos').addEventListener('click', showBtn_1);
document.querySelector('.all_cores').addEventListener('click', showBtn_1);
document.querySelector('.news').addEventListener('click', showBtn_1);

document.querySelector('.todos').addEventListener('click', showBtn_cores_fechar);
document.querySelector('.categoria').addEventListener('click', showBtn_cores_fechar);
document.querySelector('.news').addEventListener('click', showBtn_cores_fechar);

function showBtn(e) {
 document.querySelector('.abstratos').style.display = 'inline';
 document.querySelector('.animais').style.display = 'inline';
 document.querySelector('.arquitetura').style.display = 'inline';
 document.querySelector('.bebidas').style.display = 'inline';
 document.querySelector('.carros').style.display = 'inline';
 document.querySelector('.ceu').style.display = 'inline';
 document.querySelector('.cidades').style.display = 'inline';
 document.querySelector('.comidas').style.display = 'inline';
 document.querySelector('.espirituais').style.display = 'inline';
 document.querySelector('.flores').style.display = 'inline';
 document.querySelector('.frases').style.display = 'inline';
 document.querySelector('.lugares').style.display = 'inline';
 document.querySelector('.mar').style.display = 'inline';
 document.querySelector('.musica').style.display = 'inline';
 document.querySelector('.natureza').style.display = 'inline';
 document.querySelector('.neon').style.display = 'inline';
 document.querySelector('.pessoas').style.display = 'inline';
 document.querySelector('.plantas').style.display = 'inline';
 document.querySelector('.vintage').style.display = 'inline';
 e.preventDefault();
}

function showBtn_cores(e){
  document.querySelector('.colorido').style.display = 'inline';
  document.querySelector('.preto_branco').style.display = 'inline';
  document.querySelector('.amarelo').style.display = 'inline';
  document.querySelector('.azul').style.display = 'inline';
  document.querySelector('.laranja').style.display = 'inline';
  document.querySelector('.rosa').style.display = 'inline';
  document.querySelector('.verde').style.display = 'inline';
  document.querySelector('.vermelho').style.display = 'inline';
  e.preventDefault();

}

function showBtn_1(e) {
 document.querySelector('.abstratos').style.display = 'none';
 document.querySelector('.animais').style.display = 'none';
 document.querySelector('.arquitetura').style.display = 'none';
 document.querySelector('.bebidas').style.display = 'none';
 document.querySelector('.carros').style.display = 'none';
 document.querySelector('.ceu').style.display = 'none';
 document.querySelector('.cidades').style.display = 'none';
 document.querySelector('.comidas').style.display = 'none';
 document.querySelector('.espirituais').style.display = 'none';
 document.querySelector('.flores').style.display = 'none';
 document.querySelector('.frases').style.display = 'none';
 document.querySelector('.lugares').style.display = 'none';
 document.querySelector('.mar').style.display = 'none';
 document.querySelector('.musica').style.display = 'none';
 document.querySelector('.natureza').style.display = 'none';
 document.querySelector('.neon').style.display = 'none';
 document.querySelector('.pessoas').style.display = 'none';
 document.querySelector('.plantas').style.display = 'none';
 document.querySelector('.vintage').style.display = 'none';
 e.preventDefault();
}

function showBtn_cores_fechar(e) {
document.querySelector('.colorido').style.display = 'none';
document.querySelector('.preto_branco').style.display = 'none';
document.querySelector('.amarelo').style.display = 'none';
document.querySelector('.azul').style.display = 'none';
document.querySelector('.laranja').style.display = 'none';
document.querySelector('.rosa').style.display = 'none';
document.querySelector('.verde').style.display = 'none';
document.querySelector('.vermelho').style.display = 'none';
e.preventDefault();
}