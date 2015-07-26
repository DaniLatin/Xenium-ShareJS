var connect = require('./node_modules/connect'),
    sharejs = require('./node_modules/share').server;


var server = connect(
    connect.logger(),
    connect.static(__dirname + '/public')
);

//var options = {db:{type:'none'}}; // See docs for options. {type: 'redis'} to enable persistance.
//var options = {db:{type:'redis'}}; // See docs for options. {type: 'redis'} to enable persistance.
// NEW OPTIONS
var options = {
    db: { type: 'none' },
    browserChannel: { cors:"*" }
};


// Production options
/*
var url = require("url").parse(process.env.REDISTOGO_URL);
options['db']['hostname'] = url.hostname;
options['db']['port'] = url.port;
options['db']['auth'] = url.auth.split(":")[1];
*/
// Attach the sharejs REST and Socket.io interfaces to the server
sharejs.attach(server, options);

/*
server.listen(8000, function () {
    console.log('Server running at http://127.0.0.1:8000/');
});
*/

var port = process.env.PORT || 5000;
server.listen(port);
console.log('Server running at port '+port);