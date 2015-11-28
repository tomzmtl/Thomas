var Ajax = (function()
{

    function serializeParams ( params )
    {
        return Object.keys(params).map( function(key)
        {
            return encodeURIComponent(key) + '=' + encodeURIComponent(params[key]);
        })
        .join('&');
    }

    function checkForQ ()
    {
        if ( typeof Q === 'undefined' )
        {
            throw new Error('Ajax module requires kriskowal/q');
        }
    }

    function post ( url, data )
    {
        checkForQ();

        var dfd = Q.defer();
        var xhr = new XMLHttpRequest();

        xhr.open('POST',url);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        xhr.onreadystatechange = function()
        {
            if ( xhr.readyState !== 3 )
            {
                return;
            }

            if ( xhr.status === 200 )
            {
                dfd.resolve(JSON.parse(xhr.responseText));
            }
        };

        xhr.send(serializeParams(data));

        return dfd.promise;
    }

    var api = {
        post : post
    };

    return api;

})();
