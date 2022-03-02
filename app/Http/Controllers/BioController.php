<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Repository\Bio\BioInterface;
    use Illuminate\Support\Facades\View;

    class BioController extends Controller
    {   
        
        public $bio;
        
        public function __construct(BioInterface $bio)
        {
            
            $this->bio = $bio;
            
        }

        public function showBios()
        {
            
            $bios = $this->bio->getAllBios();
            return View::make('bio.index', compact('bios'));
        }
        

        public function getBio($id)
        {

            $bio = $this->bio->getBioById($id);
            return View::make('bio.get', compact('bio'));
        }
        
        public function createOrUpdate(Request $request, $id = null)
        {   
            
            $collection = $request->except(['_token','_method']);
            if( ! is_null( $id ) ) 
            {
                $this->bio->createOrUpdate($id, $collection);
            }
            else
            {
                $this->bio->createOrUpdate($id = null, $collection);
            }

            return redirect('/bio');
        }

        public function deleteBio($id)
        {
            $this->bio->deleteBio($id);
            return redirect()->back();
        }
    }
?>