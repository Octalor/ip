<?php
namespace App\Http\Controllers;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Book;

class BookController extends Controller
{

      public function booklist()
      {     
            $books = Book::all();
            return view('book.booklist', compact('books'));
       
      }
      public function bookchange()
      {     
         
            return view('book.bookchange');
       
      }

}
?>