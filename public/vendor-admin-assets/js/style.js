function _id(id){
    return document.getElementById(id);
}
function _cls(cls){
    return document.getElementsByClassName(cls);
}
function active_link(id)
{
    var i = _cls('link-div');
    var it = _id('menu'+id.replace('m',id));
    if($('.'+id+'-icon').hasClass('fa-angle-down'))
    {
        $('.'+id+'-icon').removeClass('fa-angle-down');
        $('.'+id+'-icon').addClass('fa-angle-left');
    }
    else
    {
        $('.'+id+'-icon').addClass('fa-angle-down');
        $('.'+id+'-icon').removeClass('fa-angle-left');
    }
}

function flag_change(){
    var l = $('#lang').val();
    if(l == "ar")
    _id('lang-img').src = 'super-admin-assets/icons/tn_sa-flag.gif';
    if(l == "ur")
    _id('lang-img').src = 'super-admin-assets/icons/tn_pk-flag.gif';
    if(l == "en")
    _id('lang-img').src = 'super-admin-assets/icons/tn_us-flag.gif';
}

function dropdown()
{
    $('#user-menu-links').toggle();
}

var path = window.location.pathname;
if(path == '/vendor/products')
{
    $('#m1').addClass('active-link show');
    $('#m1 i').removeClass('fa-angle-left');
    $('#m1 i').addClass('fa-angle-down');
    $('#menu1').addClass('show');
    $('#menu1 .link-div:nth-child(1)').addClass('active-link2');
}
if(path == '/vendor/dashboard')
{
    $('.single-link1').addClass('active-link');
}

