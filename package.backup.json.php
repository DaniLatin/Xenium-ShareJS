{
  "name": "share",
  "version": "0.6.3",
  "description": "A database for concurrent document editing",
  "keywords": [
    "operational transformation",
    "ot",
    "concurrent",
    "collaborative",
    "database",
    "server"
  ],
  "homepage": "",
  "author": "Joseph Gentle <josephg@gmail.com>",
  "dependencies": {
    "sockjs": ">= 0.3.1",
    "socket.io": "~0.8",
    "socket.io-client": "~0.8",
    "browserchannel": "~1",
    "ws": "*",
    "connect": "<3.x",
    "request": ">= 2.1.1",
    "coffee-script": "<1.7",
    "hat": "*"
  },
  "devDependencies": {
    "express": "~ 3.x",
    "optimist": ">= 0.2.4",
    "nodeunit": "*",
    "shelljs": "*",
    "uglify-js": "~1",
    "websocket": "*"
  },
  "engine": "node >= 0.6",
  "main": "index.js",
  "bin": {
    "sharejs": "bin/sharejs",
    "sharejs-exampleserver": "bin/exampleserver"
  },
  "licenses": [
    {
      "type": "MIT"
    }
  ],
  "repository": {
    "type": "git",
    "url": "http://github.com/josephg/sharejs.git"
  }, "engines": {
    "node": "0.10.x"
  }
}