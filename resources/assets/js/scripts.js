document.addEventListener( 'DOMContentLoaded', function()
{

    //document.getElementById('theme')
        //.addEventListener( 'click', function() { ThemeSwitcher.setTheme('blue') } );

    Thomas.init();

    window.setTimeout( Thomas.show, 5 );

    window.addEventListener( 'scroll', Thomas.moveEyes );


    Quote.init().get();

});
