# Picnic R Us
Web Development Course Project
* [To Do](#to-dizzle)
* [Structure](#html-structure)
* [CSS](#css)

Yuh!

## To-Dizzle
Task|Progress
-|-
 HTML Structure | ❌
Index Page | ❌
 CSS | ❌
DB Functionality | ❌


## HTML Structure
1. Customer Registration: In order for a customer to place an order the customer should create an
    account. The customer registration is being done in four steps.
    
2. The customer registration form should have the following details.
    Customer info. ( all the information are required.)
    All the IDs are 10 digits. Also validate the e-mail addresses
    * Name
    * Address
    * Date of Birth
    * ID number ()
    * E-mail address
    * Telephone and Fax Number
    
3. Once the first step is being validated, the customer can move to the next step, which is creating
    an e-account. Your site should display an E-account form that allows the customer to enter a
    username which should be between 6-13 characters. Also the user should enter the password
    then confirms it. The valid password should be between 8-12 characters. Should start with
    Upper case alphabet and ends with digit.
    
4. Once the second step is being validated, the final step is to send the form to the server. But
    before the submission, you should view all the details to the customer except the password and
    give the user the option to edit and change any mistakes or confirm.
    
5. The confirm button will send the complete form to the server. Then the server should replay
    with customer confirmation message. The confirmation message should have the following
    information. The user name and a customer ID which is a 10 digit number, that ID will be used
    by the customer with all its order later on. The server generates a customer ID, and sends a
    confirmation message to the customer. The customer account is still un-activated and an
    activation message sent to the customer by e-mail. The email should have the user name,
    password, customer ID and an activation link. The customer should click on the activation link,
    which calls a script that mark, the user as activated. (Customer activation will be left for the nest
    task)

## CSS
Your website should be responsive, you must use CSS properties to do that.

Your web pages should be divided into different sections:
    * navigation bar in which you should group the site functionality,
    * main section in which the site activities are loaded, such as forms to be filled,… etc
    * footer section, you can add, but not limited to, address details, banner, copy right,
    * siders, in which you display the latest news, or events in order to attach customers.
    
You should provide a theme for your website in terms of colors, fonts, etcs you should provide
    * Provide a style for heading and subheading
    * For all mandatory fields
    * Style for images
    * Style for tables and lists
    * Style for links
    * Style for various picnic categories such as featured picnic, sold out, picnics to a new locations, etc.
    
You should add a help menu in the navigation bar, the help menu should have an item called style. The
style transfer to a web page, in which you explain in words (English or Arabic) your style. 

## Javascript
You should use java script to create a Rich User experience, such as use JavaScript and CSS to create the
menu bar, and the tapped panels, use javascript and CSS to display the error messages beside the input
fields.

* Use JavaScript for Customer Registration

* All forms that have mandatory data should be validated before sent to the sever.

* Use Ajax to update to create the photo gallery, to allow the user to read picnic reviews.

* Display search result: a form should be given to the user in which s/he can select how many record
would like to display in each page default is 10 record per page. A bar like below should be displayed. It
could be rearrange if the user change the number of records in each page. Consider that you need to
use cookies to remember user preferences about the number of records per page. 
