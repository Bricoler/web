const http = require('http');
const fs = require('fs');
const url = require('url');
const templateModule = require('./function');

var app = http.createServer((request, response) => {
  var _url = request.url;
  var queryData = url.parse(_url, true).query;
  var pathname = url.parse(_url, true).pathname;

  if (pathname === '/') {
    if (queryData.id === undefined) {
      fs.readdir('./data', (error, filelist) => {
        var title = 'Welcome';
        var description = 'Hello Node.js';
        var list = templateModule.templateList(filelist);
        var template = templateModule.templateHTML(title, list, `<h2>${title}</h2>${description}`);
        response.writeHead(200);
        response.end(template);
      });
    } else {
      fs.readdir('./data', (error, filelist) => {
        fs.readFile(`./data/${queryData.id}`, 'utf8', (err, description) => {
          var title = queryData.id;
          var list = templateModule.templateList(filelist);
          var template = templateModule.templateHTML(title, list, `<h2>${title}</h2>${description}`);
          response.writeHead(200);
          response.end(template);
        });
      });
    }
  } else {
    response.writeHead(404);
    response.end('File Not Found');
  }
});
app.listen(3000, () => {
  console.log('server is running on port 3000')
});
