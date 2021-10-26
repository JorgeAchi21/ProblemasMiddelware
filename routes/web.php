<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\whiteCollarController;

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

//  Route::get('/', function () {
//      return view('welcome');
//  });


    //HOME DEL SITIO
    Route::get("/", [whiteCollarController::class, 'Home'])
        ->name ('home');

    Route::get("/galeria", [whiteCollarController::class, 'galeria'])
        ->name ('galeria');
        
    //Plantilla de pruebas
    Route::get("/test", [whiteCollarController::class, 'test'])
    ->name ('test');


    //========== GALLERIES
    //Ver todas
    Route::get("/gallery/view", [whiteCollarController::class, 'viewGallery'])
    ->name ('view.gallery');

    //Show Id - ver detalle
    Route::get('/gallery/show/{id}', [whiteCollarController::class, 'showGallery'])
    ->name('show.gallery');

    //Edit
    Route::get('/gallery/edit/{id}', [whiteCollarController::class, 'editGallery'])
    ->name('edit.gallery');
    //Edit-save
    Route::put('/gallery/edit/{id}', [whiteCollarController::class, 'editGalleryStore'])
    ->name('edit.galleryStore');

    //Crear galerias
    Route::get('/gallery/create', [whiteCollarController::class, 'createGallery'])
    ->name ('create.gallery');
    //Crear galeria store
    Route::post('/gallery/create', [whiteCollarController::class, 'createGalleryStore'])
    ->name ('create.galleryStore');

    //Quemar galeria-mostrar
    Route::get('/gallery/burnDown', [whiteCollarController::class, 'burnDownGallery'])
    ->name ('burnDown.gallery');
    //Quemar galeria-delete
    Route::post('/gallery/burnDown/', [whiteCollarController::class, 'destroyGallery'])
    ->name ('destroy.gallery');



    //========== PAINTINGS
    //Seleccionar una galeria
    Route::get('/painting/selectGallery', [whiteCollarController::class, 'selectGalleryPainting'])
    ->name ('selectGallery.painting');

    //ver cuadros por galeria
    Route::get('/painting/paintByGallery/{id}', [whiteCollarController::class, 'galleryPainting'])
    ->name ('gallery.painting');

    //ver todos los cuadros
    Route::get('/painting/allPaintings', [whiteCollarController::class, 'allPaintings'])
    ->name ('allPaintings.painting');

    //Create
    Route::get('/painting/create', [whiteCollarController::class, 'createPainting'])
    ->name ('create.painting');
    //Create-store
    Route::post('/painting/create', [whiteCollarController::class, 'createPaintingStore'])
    ->name ('create.paintingStore');
    // //Create-sobrepaso el numero de cuadros asignados a la galeria
    // Route::post('/painting/exceed', [whiteCollarController::class, 'exceedPainting'])
    // ->name ('exceed.painting');

    //ver una pintura en grande.
    Route::get('/painting/viewPicture/{id}', [whiteCollarController::class, 'viewPicturePainting'])
    ->name ('viewPicture.painting');

    //Edit
    Route::get('/painting/editPicture/{id}', [whiteCollarController::class, 'editPicturePainting'])
    ->name ('editPicture.painting');
    //Edit-store
    Route::put('/painting/editPicture/{id}', [whiteCollarController::class, 'editPicturePaintingStore'])
    ->name ('editPicture.paintingStore');

    //Delete
    Route::get('/painting/deletePicture/{id}', [whiteCollarController::class, 'deletePicturePainting'])
    ->name ('deletePicture.paintingDestroy');