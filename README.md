# Web_Server
This is my XAMPP server, currently running on 7.3.12, with the following applications: 
1. Apache 
2. MySQL (mariaDB) 
3. PHPMyAdmin 
4. FileZilla **--currently not utilized**

I am currently still in the development phase of my project. Currently, my actual web pages works fine. The issues are stemming from a 
redirect issue, securing cookies, and running SSL not only over HTTPS, but also port 3306. Wireshark captures revealed to me that my data 
can is captured in plain text.

**NOTE: This project will be going through a relatively big overhaul once I get used to my new PI and using Debian. I will be porting from Window to Linux (FINALLY!)**

# PROJECT SERVER: Rough Timeline for craypaul.com
## Initial Creation: 
- Arduino Server 
- Adding SPIFFS to Arduino 
- Creating HTML w/CSS pages 
- Creating light page & utilizing ESP8266 pins 
- Attempting to implement PHP into Arduino(failing) 
- Trials and Tribulations of using PHP in files 
- Implelementing MySQL from phpMyAdmin for login and register 
- Creating XAMPP Apache server to hold login and register PHP

## Porting server to XAMPP:
- Dropped Arduino files along w lights 
- Learning Apache to configure httpd.conf 
- Creating virtualHost for server(craypaul.com) 
- Also configuring Windows hosts file for DNS 
- Learning about allowing external access to server 
- Configuring Port Forwarding & #Decision to not register domain name 
- Trials and Tribulations of correctly setting up Apache conf files 
- Using htpasswd file to store passwords
- Reworking PHP register file to add hashing/storing to passwords 
- Adding authentication to Apache httpd.conf files 
- Trouble accessing phpMyAdmin, reinstall XAMPP

## Current Progress: 
- Dropped HTTP form authentication & htpasswd 
- Created PHPMyAdmin database, dropped htpasswd filee
- Replaced weak HTTP auth w/ PHP authentication 
- Modified login and register files(convert back to HTML) 
- Added login,register confirm PHP files for validation 
- Learning more about hardening and securing Apache server 
- Currently using BurpSuite to analyze programs to determine potential attacks on the server

## Looking into the Future (List of Ideas): 
- Highest Priority= porting project over to PI
- Integrate Filezilla(FTP) into server
- ~~Secure httpd.conf/httpd-xampp.conf files~~
- Adding access control for laptop, other end devices 
- ~~Replacing for loop in register.php file~~
- ~~Potentially replacing .htpasswd with MySQL database if I can use the integrated phpmyadmin MySQL~~
- ~~Using XAMPP Security page to password protect XAMPP & phpMyAdmin root user (SECURITY PAGE IS DEPRICATED)~~
- Remove unused folders and entries in config files 
- Remove default scripts from CGI-bin dir 
- Create PMA password not covered by security 
- Remove default user/passwords included with XAMPP for FTP server, WebDAV server, and web accessible folders 
- Using wireshark to further look at HTTP headers and transfer of data
- Potential bot usage??


## Recently Added: 
- Configured PHP authentication 
- Configured authentication.php file for login/logout system #Configured logout system 
- Added .ico into address tab for all files 
- Configured Access Control for phpMyAdmin 
- Configured Access Control for login system 
- Reconfigured filesystem to create subdirectories for different levels of permission
- Add HTTPS support 
- Utilize SSL/TLS for HTTPS 
- Place more security on HTML/PHP pages 
- Create more user validation on register page(ex: no HTML tags)
- Making HTML pages more responses to other devices(aka mobile, tablet)
- Utilizing BurpSuite Web Vulnerability Scanner to detect flaws and errors in the web server
