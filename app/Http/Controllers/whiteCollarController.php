<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shop;
use App\Models\Painting;

class whiteCollarController extends Controller
{
        //====================================================================
        //          WHITE COLLAR
        //====================================================================
        
        //========== WEB

        //HOME DEL SITIO
        public function home(){
            //return 'Hola mundo.';
            return view('home');
        }

        //==========Testing front-end
        // public function galeria(){
        //     //return 'galeria';
        //     return View('galeria');
        // }

        public function galeria(){
            //$picture = Painting::all();
            $picture = Painting::where('shop_id', '=', 4)->get();
            return View('galeria', compact('picture'));
        }
        public function test(){
            return View('test');
        }

        //=======================GALLERY
        // 
        public function viewGallery(){
            $gallery = Shop::all();
            return View('galleries.view', compact('gallery'));
        }
        
        //Show-id
        public function showGallery($id){
            $gallery = Shop::where('id', $id)->first();
            return view('galleries.show', compact('gallery'));
        }   

        //edit-id
        public function editGallery($id){
            $gallery = Shop::where('id', $id)->first();
            return view('galleries.edit', compact('gallery'));
        }
        //edit-store
        public function editGalleryStore(Request $request, $gallery){
            //validaciones
            $request->validate([
                "name" => 'required | min:5 | max:50',
                "address" => 'required ',
                "max_capacity" => 'min:1 | max:50'
            ]);
            $galleryUpdt = Shop::find($gallery);
            $galleryUpdt -> update($request->all());
    
            return redirect()->route('view.gallery');
        }

        //Create
        public function createGallery(){
            return View('galleries.create');
        }
        //Create-store
        public function createGalleryStore(Request $request){
            $request->validate([
                "name" => 'required | unique:shops,name| min:5 | max:50',
                "address" => 'required ',
                "max_capacity" => 'min:1 | max:50'
            ]);
            $galleryCrt = Shop::create($request->all());
    
            return redirect()->route('view.gallery');

        }
        //borrar un galeria
        public function burnDownGallery(){
            $gallery = Shop::all();
            return View('galleries.burnDown', compact('gallery'));
        }
        //borrar una galeria-store
        public function destroyGallery(Request $request){
            $idDlt = $request->galleryName;

            $gallery = Shop::find($idDlt);
            $gallery -> Delete();
            return redirect()->route('view.gallery');
        }

        //=======================PAINTING
        //seleccionar galeria
        public function selectGalleryPainting(){
            $gallery = Shop::all();
            return View('pictures.selectShop', compact('gallery'));
        }

        //ver pinturas de la galeria seleccionada
        public function galleryPainting($id){
            $gallery = Shop::where('id', $id)->get();
            $picture = Painting::where ('shop_id', $id)->get();
             return View('pictures.picturesByGallery', compact('picture', 'gallery'));
        }

        //todas las pinturas
        public function allPaintings(){
            $picture = Painting::all();
            return View('pictures.allPaintings', compact('picture'));
        }

        //create
        public function createPainting(){
            $gallery = Shop::all();
            return View('pictures.create', compact('gallery'));
        }

        //create-store
        public function createPaintingStore(Request $request){
            
            $shopId = $request->shop_id; //obtener el id de la galeria.

            //Obtener la capacidad maxima de cuadros de la galeria.
            $paintByShop = Shop::where("id", $shopId)->get();
            $numMaxPaintByShop = $paintByShop[0]->max_capacity;
            // return $paintByShop[0];
            // return "id:" . $shopId . "-max: " . $numMaxPaintByShop;

            //Contar el numero de cuadros ya asignados
            $PaintByShop = Painting::where("Shop_id", $shopId)->get();
            $numPaintByShop = count($PaintByShop);

            // $salida = "Numero cuadros de (id:" . $shopId  . ")=" .   $numPaintByShop . "---";
            // $salida = $salida . "Numero maximo de cuadros = " . $numMaxPaintByShop;
            // return $salida;

            if($numMaxPaintByShop > $numPaintByShop){
                //return "Se puede añadir cuadros";
                //Se pueden añadir cuadros
                $request->validate([
                    "author" => 'required| min:5 | max:50 ',
                    "picture_name" => 'required | unique:shops,name| min:5 | max:50',
                    "shop_id" => 'required',
                    "price" => 'required| min:1 | max:1000',
                    "entry_date" => 'required',
                    "url" => 'required'
                ]);
                $pictureUpdt = Painting::create($request->all());
        
                return redirect()->route('allPaintings.painting');

            } else {
                // exceedPainting
                // return "NO se puede añadir mas cuadros";
                return view('pictures.exceed');
            }

            // return "Numero cuadros de ";
            // return redirect()->route('allPaintings.painting');
        }
        // //sobrepasado num cuadros
        // public function exceedPainting(){
        //     return View('pictures.exceed');
        // }

        //view picture
        public function viewPicturePainting($id){
            $painting = Painting::where('id', '=', $id)->get();
            //return $painting;
            return View('pictures.viewPicture', compact('painting'));
        }

        //Edit picture
        public function editPicturePainting($id){
            $painting = Painting::where('id', '=', $id)->get();
            //return $painting;
            $gallery = Shop::all();
            return View('pictures.editPicture', compact('painting', 'gallery'));
        }
        //Edit picture-store
        public function editPicturePaintingStore(Request $request){
            $idPicture = $request->id;
            $request->validate([
                "author" => 'required| min:5 | max:50 ',
                "picture_name" => 'required | unique:shops,name| min:5 | max:50',
                "shop_id" => 'required',
                "price" => 'required| min:1 | max:1000',
                "entry_date" => 'required',
                "url" => 'required'
            ]);
            $paintingUpdt = Painting::find($idPicture);
            //return $paintingUpdt;
            $paintingUpdt -> update($request->all());
    
            return redirect()->route('allPaintings.painting');
        }
        
        //Destroy
        public function deletePicturePainting($id){
            $painting = Painting::find($id);
            //return $id . '-' . $painting;
            $painting -> delete();
            //return view('', compact('id'));
            return redirect()->route('allPaintings.painting');
        }  
}