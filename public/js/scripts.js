var Ajax = (function()
{

    var api = {};

    api.post = function ( url, data )
    {
        var xhr = new XMLHttpRequest();

        var params = Object.keys(data).map(function(key){return encodeURIComponent(key) + '=' + encodeURIComponent(data[key]);}).join('&');
console.log(params);
        xhr.open('POST', url);

        xhr.onreadystatechange = function() {
            if (xhr.readyState>3 && xhr.status==200) {  }
        };

        //xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        //xhr.setRequestHeader('Content-length', params.length);
        xhr.send(params);

        return xhr;
    }

    return api;

})()
var Quote = (function()
{

    var container = null;

    var current  = null,
        endpoint = null;

    var api  = {};

    construct = function ()
    {
        queryElements();
        endpoint = container.dataset.endpoint;
    }

    function queryElements ()
    {
        container = document.getElementById('quote');
    }

    api.get = function ()
    {
        console.log( Ajax.post(endpoint,
            {
                current : 6,
                _token : container.dataset.token
            }) );
    }

    api.init = function ()
    {
        construct();
        return api;
    }

    return api;

}());

var ThemeSwitcher = (function()
{

    var api  = {},
        html = document.querySelector('html');

    construct = function ()
    {
        var currentColor = localStorage.getItem('themeColor');

        if ( currentColor )
        {
            api.setTheme(currentColor);
        }
    }

    api.setTheme = function ( color )
    {
        localStorage.setItem( 'themeColor', color );
        html.setAttribute( 'data-theme', color );
    }

    construct();

    return api;

}());

var Thomas = (function()
{

    var api      = {},
        thomas   = document.getElementById('thomas')
        eyesDown = false;

    api.hide = function ()
    {
        thomas.classList.add('hiding');
    }

    api.show = function ()
    {
        thomas.classList.remove('hiding');
        thomas.classList.add('show');
    }

    api.moveEyes = function ()
    {
        var scrollPosition = window.pageYOffset;

        if ( eyesDown && scrollPosition === 0 )
        {
            api.moveEyesUp();
        }
        else
        {
            api.moveEyesDown();
        }
    }

    api.moveEyesDown = function ()
    {
        eyesDown = true;
        thomas.classList.add('eyes-down');
        api.show();
    }

    api.moveEyesUp = function ()
    {
        eyesDown = false;
        thomas.classList.remove('eyes-down');
    }

    return api;

}());

document.addEventListener( 'DOMContentLoaded', function()
{

    //document.getElementById('theme')
        //.addEventListener( 'click', function() { ThemeSwitcher.setTheme('blue') } );

    window.setTimeout( Thomas.hide, 5 );

    document.getElementById('hero')
        .addEventListener( 'mouseenter', Thomas.show );

    window.addEventListener( 'scroll', Thomas.moveEyes );


    Quote.init().get();

});
