<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\View;
    use App\Repository\Bio\BioInterface;

    class HomeController extends Controller
    {   
        public function __construct(BioInterface $bio)
        {
            
            $this->bio = $bio;
            
        }
        
        public function bioCreate()
        {
            return View::make('bio.create');
        }

        public function bioModify($id)
        {
            $bio = $this->bio->getBioById($id);
            return View::make('bio.modify', compact('bio'));
        }
    }
?>