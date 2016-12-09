# CS1520Project

After my part one submission I had a basic outline for the website, for the second part I tried to add more functionality,
make it look better and add the use of PHP and MYSQL to the site.

I started by changing the html files to php files and then moving the file tree to work inside of xampp

Then I improved the look of the website by adding some javascript and an "appear" class to make different sections of the
homepage appear as the user scrolled down.  To do this I mostly used JQuery.  I found the bottom of the screen and the 
bottom of each object and then set the css opacity to visible once the object was completely inside of the screen.

In addition to improving the css of the contact page, I added a form for the user to contact me.  Using scripts I allow
the user to click to show the form which hides the rest of the page.  Then the user can either cancel the form to return 
to the original page or submit the form.  When the form is submitted, the users message will be emailed to me by php.  
This does not work yet because it is not being hosted but when I do get this website hosted I think this function should
work.

I used php and mysql server on xampp to store the data from my past coursework and add it to the homepage.  I also used 
php to store the list of previous concepts I've learned in an array and then added that to a div on the page.  Since I used xampp to create the sql database i'm not sure if it will work based on what i've uploaded to github without xampp.

On my resume page I added the functionality of having my resume as a pdf embedded in the webpage as well as a link for the 
user to download
