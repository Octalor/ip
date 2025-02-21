<?php
namespace App\Http\Controllers;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Data;

class DataController extends Controller
{

      public function dataaccountingentries()
      {     
            $data = Data::all()
            ->where('organisation', 'CICM Poland');
            return view('data.accountingentries', compact('data'));
      }
      public function dataeditaccountingentries($id)
      {     
            $data = Data::find($id);
            return view('data.accountingentriesedit', compact('data'));
      
      }
      public function datastoreaccountingentries(Request $request, $id)
      {
          $data = Data::findOrFail($id); 
  
          // Walidacja danych
          $request->validate([
              'rubric' => 'required|string|max:40',
              'role' => 'required|string|max:40',
              'organisation'=>'required|string|max:40',
              'account'=>'required|string|max:40',
              'tranche'=>'required|string|max:40',
            ]);

          // Aktualizacja danych
          $data->update([
              'rubric' => $request-> rubric,
              'role' => $request-> role,
              'organisation'=>$request->organisation,
              'account'=>$request->account,
              'tranche'=>$request->tranche,
          ]);
         
        
          return redirect()->route('data.accountingentries', $data->id)->with('success', 'Dane zostały zaktualizowane.');
      }

      public function datadeleteaccountingentries($id)
{     
     Data::destroy($id);
     $data = Data::all();
      return view('data.accountingentries', compact('data'));
}
}

?>