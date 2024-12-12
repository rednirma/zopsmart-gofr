IMPORTANT
as of 12th Dec 2024 there is security vulnerability in this project so i will make it private in a day.


Hello 
My name is Amrinder Singh Sandhu, i am a student of jiit and i tried implenting gofr into my room booking website that was built for my 3rd sem DSW(Database Systems and Webtheory) lab.
I was not able to implement the same in this version of the repo but i have included the website project (in the folder "dsw") and all the progess that i have made at the backend side using gofr. 
However I was able to create and access the db "the_monarch" and the table "details" using xampp and the gofr framework...all the progress done in the gofr side of things has been saved in the folder named "gofr".

the following commands were ran on the admin cmd prompt 

>docker run --name zops-gofr-mysql -e MYSQL_ROOT_PASSWORD=root123 -e MYSQL_DATABASE=the_monarch -p 3306:3306 -d mysql:8.0.30


>docker exec -it zops-gofr-mysql mysql -uroot -proot123 the_monarch -e "CREATE TABLE details ( name VARCHAR(255) NOT NULL PRIMARY KEY,Number int, CheckInDate date, CheckOutDate date, NoOfRooms int);"

to view the progress i have made, simply run the file gofr/hotel/another.go 
and go to the following urls 
1: http://localhost:8080/
2: http://localhost:8080/details

if you want to view the working of the website 
copy the dsw folder to htdocs of xampp and run it locally 


tldr; 
all the progess is in gofr/hotel/another.go 
the framework has not been linked with the main website which is present in the dsw folder 
