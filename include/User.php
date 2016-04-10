<?php

/**
 * Created by PhpStorm.
 * User: AdamB
 * Date: 3.3.2016
 * Time: 21:32
 */
class User
{
    // búa til svona fyrir öll gildi nema lykilorð sem koma inn í register
    public $email;

    function login ($email,$password){
        $this->email = $email;
        $users_folder = $_SERVER['DOCUMENT_ROOT'] . "/users/";
        // finna skrá sem heitir það sama og $email í möppunni $users_folder ( nota file_exists )
        // lesa strenginn sem er í skránni ( google 'php read string from file' )
        // nota svo json_decode til að búa til object úr þessum string sem var í skránni
        // setja svo öll gildin fyrir notandann sem fundust í skránni

        $this->email = $usu->email;

        return true;
    }

    function register ($email,$first,$last,$mainPass,$retypePassword,$question,$answer)
    {
        try {
            // gera þetta fyrir öll gildin nema lykilorðin
            $this->email = $email;

            // búa til slóð fyrir möppu handa notendum
            $users_folder = $_SERVER['DOCUMENT_ROOT'] . "/users/";
            // tryggja að þessi mappa sé til, nota mkdir og file_exists eins og í photos.php

            // nota json_encode til að búa til json streng úr þessum notanda $this
            $user_json_string = json_encode($this);

            // vista json streng í notenda möppunni ( google 'php write string to file' ) í skrá
            // sem heitir það sama og email notandans

        }
        catch(Exception $e){

        }
        return true;
    }
}