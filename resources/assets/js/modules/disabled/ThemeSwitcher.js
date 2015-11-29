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
