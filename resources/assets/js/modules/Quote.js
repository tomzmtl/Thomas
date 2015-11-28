var Quote = (function()
{

    var container = null,
        textContainer = null,
        refreshTrigger = null,

        current  = null,
        endpoint = null;

    function construct ()
    {
        queryElements();
        addEventListeners();
        endpoint = container.dataset.endpoint;
    }

    function queryElements ()
    {
        container = document.getElementById('quote');
        textContainer = container.querySelector('.text');
        refreshTrigger = container.querySelector('.trigger');
    }

    function addEventListeners ()
    {
        //refreshTrigger.addEventListener( 'click', get );
    }

    function get ()
    {
        container.classList.add('progress');

        Ajax.post( endpoint,
        {
            current : container.dataset.quoteId,
            _token  : container.dataset.token
        })
        .then( onResolve );
    }

    function onResolve ( response )
    {
        container.classList.remove('progress');

        if ( !container.classList.contains('show') )
        {
            container.classList.add('show');
        }

        container.classList.add('show');
        textContainer.textContent = response.quote;
        container.dataset.quoteId = response.index;
    }

    function init ()
    {
        construct();
        return api;
    }

    var api = {
        init : init,
        get  : get
    };

    return api;

}());
