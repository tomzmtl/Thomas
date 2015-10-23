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
