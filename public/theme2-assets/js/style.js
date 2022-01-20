function _id(id){
    return document.getElementById(id);
}
function _cls(cls){
    return document.getElementsByClassName(cls);
}
function plus(id)
{
    var c = id.replace('p','');
    var v = _id("counter"+c);
    var val = v.innerHTML;
    if(val > 0){
        v.innerHTML = parseInt(val) + 1;
        $('#items').val(parseInt(val) + 1);
    }
}
function minus(id)
{
    var c = id.replace('n','');
    var v = _id("counter"+c);
    var val = v.innerHTML;
    if(val > 1){
    v.innerHTML = parseInt(val) - 1;
    $('#items').val(parseInt(val) - 1);
    }
}
function shopping_cart()
{
    $('#shopping-cart').show();
}
function shopping_cart_close()
{
    $('#shopping-cart').hide();
}

switch (window.location.pathname) {
    case '/':
       $('.link1').addClass('active-link');
       break;
       case '/menu':
       $('.link2').addClass('active-link');
       break;
       case '/about-us':
       $('.link3').addClass('active-link');
       break;
       case '/customer-contact':
       $('.link4').addClass('active-link');
       break;
       case '/blog':
       $('.link5').addClass('active-link');
       break;
       case '/contact-us':
       $('.link6').addClass('active-link');
       break;
     }