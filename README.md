# CSE5335-vsb4640
Link to the website:   https://cse5335vsb4640.herokuapp.com/

##Server Framework

I chose the server framework as nodejs(Express platform).
I used node because of its fast execution speed as it uses the javascript V8 engine.
It uses javascript on the server side and mostly I knew javascript so it was easy for me to learn.
It uses asynchronous callbacks so parallel threads run the task very fast using non blocking operations.
I liked the express framework for node as it automatically gave me the inbuilt node server without having to write the server script and
also because it is better as it uses the model view controller paradigm so the flow can be known easily.

##Client Framework

I chose javascript and jquery as the client side framework. I chose javascript as it is one of the best client side frameworks and Jquery can be
 used very easily to manipulate the DOM as its sole purpose is to manipulate DOM. So for displaying JSON data into table I used JQuery methods.
 Javascript is easily used with maps and charts so I chose Javascript.

##Easy Stuff

Making Ajax calls , displaying getting the response, showing the json data in tables was easy. I was familiar with ajax calls so it made my work easy.
I have previously worked using ajax and displaying data through jquery which made the task easier.Getting charts was easy as lot of stuff was available on the internet.

##Hard stuff

Using maps in the code was a bit challenging as it took most of my time.
Initializing the map was easy but adding multiple markers directly from the ajax data made it tougher as I never worked with such API's.

##other components

I used MAP api and also used D3 js as it makes very beautiful charts.I installed Intellij IDE for writing javascript easily and it simplified a lot of work.
as I found the nodejs and express plugins which eased the process as it provided a GUI button to run the server and not writing the same commands again and again through commandline.

##Commands

My code basically starts by running (node ./bin/www) command to start the express server
which calls app.js
app.js routes the app to index.js which calls the index.ejs view page to display the index page.

To deploy the app to heroku server the following commands are used
* $ heroku login(provide email and password)
* $ heroku create appname
* $ git init(to initialize repository)
* $ git add .
* $ git commit -m "commit statement"
* $ git push heroku master







