<?php
namespace App\Http\Controllers;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class AdminmanagerController extends Controller
{

      public function adduserview()
      {
            return view('adminmanager.adduser');
       
      }

      public function userlist()
      {     
            $users = User::all();
            return view('adminmanager.userlist', compact('users'))->render();
      }
      public function userdelete($id)
      {     
           User::destroy($id);
           $users = User::all();
            return view('adminmanager.userlist', compact('users'));
      }
      public function useredit($id)
      {     
            $user = User::find($id);
            return view('adminmanager.useredit', compact('user'));
      
      }
 
      public function usereditstore(Request $request, $id)
      {
          $user = User::findOrFail($id); 
  
          // Walidacja danych
          $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'required|email|unique:users,email,'.$id,
          ]);
  
          // Aktualizacja danych
          $user->update([
              'name' => $request->name,
              'email' => $request->email,
              'password'=>$request->password,
          ]);
  
          return redirect()->route('adminmanager.useredit', $user->id)->with('success', 'Dane zostały zaktualizowane.');
      }

}

?>

