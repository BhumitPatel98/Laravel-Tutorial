<?php
use App\User;
use App\Address;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert',function(){

    $user = User::findOrFail(1);  
    
    $address = new Address(['name'=>'1039/2 kamliwad bhenslore nani daman']);

    $user->address()->save($address);

});

Route::get('/update',function(){

    $address = Address::whereuser_id(1)->first();

    $address->name='Daman';

    $address->save();


});

Route::get('/read',function(){

    
    $user = User::findOrFail(1);

    echo $user->address->name;

});

Route::get('/delete',function(){

    $user = user::findorFail(1);

    $user->address->delete();

    return "done";

});

