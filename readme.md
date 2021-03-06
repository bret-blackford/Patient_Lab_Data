# Project 4
+ By: *M Bret Blackford*
+ Production URL: <http://p4.bret-dwa15.vip>

## Feature summary
*The application is intended for healthcare facilities and will track patient blood panels.  This initial version has only a limited set of blood tests available (focusing on blood glucose and lipids) but can easily be expanded.  The healthcare facility using the application can enter patient information then associate labs to that patient.  Additionally, the application allows the user to analyze the patients blood tests against standard reference ranges to determine any outlyers which may require attention.*

*As the application stores personal health data it would need to be secured according to [HIPAA](https://www.hhs.gov/hipaa/index.html) guidelines.  This would require a user login and suficient network controls, which may include encrypting data at rest.  These features are not part of this initial version.*

*Below are key features of the application:*

+ Current patients are listed alphabetically
+ New patients can easily be added
+ By clicking on a patient's ID you can view any lab results enterd in the system
+ New labs are easily enterd into the system for any patient
+ By just a click of a button the latest blood panel enterd for a patient can be analyzed against standard reference ranges to determine any outlyers which may need attention
+ Current version does not allow for changes to the reference range table.  This is left secure as values should only be changed by an admin/super user (feature not yet added)
+ The home page features
  + an explanation of the application
  + a START button to enter the patient list screen 

  
## Database summary
*Below are the tables and any associated relationships used in the application.*

+ My application has 3 tables in total (`patients`, `labs`, `references`)
+ There's a one-to-many relationship between `patients` and `labs`
+ There's a one-to-one relationship between `labs` and `references`

*CRUD: ***C***reate, ***R***ead, ***U***pdate, ***D***elete operations*
+ ***C***reate - new Patient and Lab records can be created
+ ***R***ead - Patient and Lab records can be read/reviewed
+ ***U***pdate - Patient and Lab records can be modified
+ The project does not have any ***D***eletions, assuming all data entered would need to be maintained for record retention purposes (although might not be able to be displayed).

## Outside resources
*barryvdh/laravel-debugbar, which adds a useful debugging/info panel to the Laravel application. (Runs in DEV not PROD)*

+ https://packagist.org/packages/barryvdh/laravel-debugbar*

## Code style divergences
*Deafult NetBeans IDE format, which approximates PSR-1/PSR-2 and course guidelines on code style*


