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
