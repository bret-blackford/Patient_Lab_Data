# Project 4
+ By: *M Bret Blackford*
+ Production URL: <http://p4.bret-dwa15.vip>

## Feature summary
*The application is intended for healthcare facilities and will track patient blood panels.  This initial version has only a limited set of blood tests avaiable (focusing on blood glucose and lipids) but can easily be expanded.  The healthcare facility using the application can eneter patient information then associate labs to that patient.  Additionaly, the application allows the user to analyze the patients blood tests against standard reference ranges to determine any outlyers which may require attention.*

*Below are key features of the application:*

+ Current patients are listed alphabetically
+ New patients can easily be added
+ By clicking on a patient's ID you can view any lab results eneterd in the system
+ New labs are easily eneterd into the system for any patient
+ By just a click of a button thelatest blood panel eneterd for a patient can be analyzed against standard reference ranges to deteremine any outlyers which may need attention
+ Current version does not allow for changes to the reference range table.  This is left secure as values should only be changed by an admin/super user (feature not yet added)
+ The home page features
  + an explanation of the application
  + a START button to enter the patient list screen 

  
## Database summary
*Below are the tables and any associated relationships used inthe application.*

+ My application has 3 tables in total (`patients`, `labs`, `refernces`)
+ There's a one-to-many relationship between `patients` and `labs`
+ There's a one-to-one relationship between `labs` and `refernces`

## Outside resources
*barryvdh/laravel-debugbar, which adds a useful debugging/info panel to the Laravel application. (Runs in DEV not PROD)

https://packagist.org/packages/barryvdh/laravel-debugbar*

## Code style divergences
*Deafult NetBeans IDE format, which approximates PSR-1/PSR-2 and course guidelines on code style*


