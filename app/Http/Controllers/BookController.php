<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{



    
    public function savebook(Request $request)
    {
        $Book = new Book();

        $Book->titulo = $request->titulo;
        $Book->autor = $request->autor;
        $Book->categoria = $request->categoria;
        $Book->descripcion = $request->descripcion;
        



        if ($request->hasFile('pdf')) {

            $pdf = $request->file('pdf');

 
            $nombrePDF = $Book->titulo . '.pdf';


            Storage::disk('public')->put('assets/pdf/LibraryPDF/' . $nombrePDF, File::get($pdf));
            
        } else {
            return "No se ha proporcionado un archivo PDF.";
        }


        if ($request->hasFile('imagen')) {


            $imagen = $request->file('imagen');

            $nombreImagen = $Book->titulo. '.jpg';


            Storage::disk('public')->put('assets/img/LibraryImgs/' . $nombreImagen, File::get($imagen));
        } else {
            return "no sirve";
        }

        $Book->save();

        return Redirect('/home');
    }
}
