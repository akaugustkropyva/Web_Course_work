<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poster
{
    use HasFactory;
    private mixed $posters;

    public function __construct()
    {
        $this->posters = $this->readFile();
    }

    /**
     * @return mixed
     */
    public function getPosters(): mixed
    {
        return $this->posters;
    }

    /**
     * @param mixed $posters
     */
    public function setPosters(mixed $posters)
    {
        $this->posters = $posters;
    }

    public function readFile(){
        $contents = file_get_contents('../storage/app/public/Posters.json');
        $posters = json_decode($contents, true);
        if (is_null($posters))
            return [];
        return $posters;
    }

    public function findPoster($value){
        $posters = $this->getPosters();
        foreach ($posters as $element){
            if ($element['img'] == $value){
                return $element;
            }
        }
        return null;
    }
}
