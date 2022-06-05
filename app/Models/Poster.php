<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    use HasFactory;

    public function readFile(){
        $contents = file_get_contents('../storage/app/public/Posters.json');
        $posters = json_decode($contents, true);
        if (is_null($posters))
            return null;
        return $posters;
    }

    public function getAllPosters() {
        return $this->readFile();
    }

    public function findPoster($value){
        $posters = $this->getAllPosters();
        foreach ($posters as $element){
            if ($element['img'] == $value){
                return $element;
            }
        }
        return null;
    }
}
