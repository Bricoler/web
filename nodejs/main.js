const http = require('http');
const fs = require('fs');
const url = require('url');
const templateModule = require('./function');
const qs = require('querystring');

var app = http.createServer((req, res) => {
  var _url = req.url;
  var queryData = url.parse(_url, true).query;
  var pathname = url.parse(_url, true).pathname;

  if (pathname === '/') {
    if (queryData.id === undefined) {
      fs.readdir('./data', (error, filelist) => {
        var title = 'Welcome';
        var description = 'Hello Node.js';
        var list = templateModule.templateList(filelist);
        var template = templateModule.templateHTML(title, list,
          `<h2>${title}</h2>${description}`,
          `<a href="/create">create</a>`);
        res.writeHead(200);
        res.end(template);
      });
    } else {
      fs.readdir('./data', (error, filelist) => {
        fs.readFile(`./data/${queryData.id}`, 'utf8', (err, description) => {
          var title = queryData.id;
          var list = templateModule.templateList(filelist);
          var template = templateModule.templateHTML(title, list,
            `<h2>${title}</h2>${description}`,
            `<a href="/create">create</a>
             <a href="/update?id=${title}">update</a>
             <form action="delete_process" method="post" onsubmit="">
              <input type="hidden" name="id" value="${title}">
              <input type="submit" value="delete">
             </form>
             `);
          res.writeHead(200);
          res.end(template);
        });
      });
    }
  } else if (pathname === '/create') {
    fs.readdir('./data', (error, filelist) => {
      var title = 'WEB - create';
      var list = templateModule.templateList(filelist);
      var template = templateModule.templateHTML(title, list, `
          <form action="/create_process" method="post">
            <p><input type="text" name="title" placeholder="title" style="width:202px;"></p>
            <p>
              <textarea name="description" placeholder="description" style="width:200px; height:200px;"></textarea>
            </p>
            <p>
              <input type="submit" value="submit">
            </p>
          </form>
        `, '');
      res.writeHead(200);
      res.end(template);
    });
  } else if (pathname === '/create_process') {
    var body = '';
    req.on('data', (data) => {
      body += data;
    })
    req.on('end', () => {
      var post = qs.parse(body);
      var title = post.title;
      var description = post.description;
      fs.writeFile(`data/${title}`, description, 'utf8', (err) => {
        if (err) throw err;
        res.writeHead(302, {Location: `/?id=${title}`});
        res.end();
      });
    });
  } else if (pathname === '/update') {
    fs.readdir('./data', (error, filelist) => {
      fs.readFile(`./data/${queryData.id}`, 'utf8', (err, description) => {
        var title = queryData.id;
        var list = templateModule.templateList(filelist);
        var template = templateModule.templateHTML(title, list, `
          <form action="/update_process" method="post">
            <input type="hidden" name="id" value="${title}">
            <p><input type="text" name="title" placeholder="title" value=${title} style="width:202px;"></p>
            <p>
              <textarea name="description" placeholder="description" style="width:200px; height:200px;">${description}</textarea>
            </p>
            <p>
              <input type="submit" value="submit">
            </p>
          </form>
          `,
          `<a href="/create">create</a> <a href="/update?id=${title}">update</a>`);
        res.writeHead(200);
        res.end(template);
      });
    });
  } else if (pathname === '/update_process') {
    var body = '';
    req.on('data', (data) => {
      body += data;
    })
    req.on('end', () => {
      var post = qs.parse(body);
      var id = post.id;
      var title = post.title;
      var description = post.description;

      fs.rename(`data/${id}`, `data/${title}`, (err) => {
        fs.writeFile(`data/${title}`, description, 'utf8', (err) => {
          if (err) throw err;
          res.writeHead(302, {Location: `/?id=${title}`});
          res.end();
        });
      });
    });
  } else if (pathname === '/delete_process') {
    var body = ''
    req.on('data', (data) => {
      body += data;
    });
    req.on('end', () => {
      var post = qs.parse(body);
      var id = post.id;
      fs.unlink(`data/${id}`, (err) => {
        res.writeHead(302, {Location: `/`});
        res.end();
      });
    });
  } else {
    res.writeHead(404);
    res.end('File Not Found');
  }
});
app.listen(3000, () => {
  console.log('server is running on port 3000')
});
