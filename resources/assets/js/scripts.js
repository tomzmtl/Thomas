document.addEventListener( 'DOMContentLoaded', function()
{

    document.getElementById('theme')
        .addEventListener( 'click', function() { ThemeSwitcher.setTheme('blue') } );

    window.setTimeout( Thomas.hide, 5 );

    document.getElementById('hero')
        .addEventListener( 'mouseenter', Thomas.show );

    window.addEventListener( 'scroll', Thomas.moveEyes );

});
