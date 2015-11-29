var Thomas = (function()
{

    var api      = {},
        thomas   = null,
        eyesDown = false;

    function construct ()
    {
        thomas = document.getElementById('thomas');
        hide();
        return api;
    }

    function hide ()
    {
        thomas.classList.add('hiding');
    }

    function show ()
    {
        thomas.classList.remove('hiding');
        thomas.classList.add('show');
    }

    function moveEyes ()
    {
        var scrollPosition = window.pageYOffset;

        if ( eyesDown && scrollPosition === 0 )
        {
            moveEyesUp();
        }
        else
        {
            moveEyesDown();
        }
    }

    function moveEyesDown ()
    {
        eyesDown = true;
        thomas.classList.add('eyes-down');
        show();
    }

    function moveEyesUp ()
    {
        eyesDown = false;
        thomas.classList.remove('eyes-down');
    }

    var api =
    {
        init : construct,
        show : show
    };

    return api;

}());
