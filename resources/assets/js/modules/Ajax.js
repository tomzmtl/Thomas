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