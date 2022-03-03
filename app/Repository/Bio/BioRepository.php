<?php
namespace App\Repository\Bio;

use App\Models\Bio;
use App\Repository\Bio\BioInterface;
use Illuminate\Support\Facades\Hash;

class BioRepository implements BioInterface
{   

    protected $bio = null;
    
    public function getAllBios()
    {
        return Bio::all();
    }

    public function getBioById($id)
    {
        return Bio::where('tb_seq',$id)->first();
    }

    public function createOrUpdate( $id = null, $collection = [] )
    {   
        if(is_null($id)) {
            $bio = Bio::create([
                'tb_title' => $collection['tb_title'],
                'tb_img' => "이미지",
                'tb_desc' => $collection['tb_desc'],
            ]);
            return $bio->save();
        }else{
            $bio = Bio::where('tb_seq',$id)->update([
                'tb_title' => $collection['tb_title'],
                'tb_desc' => $collection['tb_desc'],
            ]);
            
        }
        
    }
    
    public function deleteBio($id)
    {
        return Bio::where('tb_seq',$id)->delete();
    }
}
