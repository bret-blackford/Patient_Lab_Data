<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', 'LabController@index');
Route::get('/test/{title?}', 'LabController@test');
Route::get('/get/{name?}', 'LabController@patientList');
Route::get('/change/{id?}', 'LabController@change');
Route::get('/changelab/{id?}', 'LabController@changeLab');//to Form
Route::get('/checklabs', 'LabController@checkLabs');
Route::get('/checknewlabs', 'LabController@checkNewLabs');
Route::get('/newpatient', function() {
    return view('newpatient');
});//to Form
Route::get('/addlab/{id?}', 'LabController@addLab');
Route::get('/checkpatient', 'LabController@chexPatient');
Route::get('/analyzelab/{id?}', 'LabController@analyzeLab');


Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
      The following commented out line will print your MySQL credentials.
      Uncomment this line only if you're facing difficulties connecting to the
      database and you need to confirm your credentials. When you're done
      debugging, comment it back out so you don't accidentally leave it
      running on your production server, making your credentials public.
     */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: ' . $e->getMessage();
    }

    dump($debug);
});

