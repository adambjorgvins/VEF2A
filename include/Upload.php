<?php

namespace File; # to avoid naming conflicts

class Upload {


    protected $uploaded = [];   # mun geyma skráarupplýsingar, tómt
    protected $destination;     # uploadmappa, tómt, gildi verður sett þegar til verður object af þessum class
    protected $max = 51200;     # Það sem má uploada í bytes (50KB)
    protected $messages = [];   # fylki tómt, sem geymir skilaboð til notandans
    protected $permitted = [    # snið sem eru leyfð
        'image/gif',
        'image/jpeg',
        'image/pjpeg',
        'image/png'
    ];

    public function __construct($path) {

        if (!is_dir($path) || !is_writable($path)) {

            throw new \Exception("$path must be a valid, writable directory.");
        }
        $this->destination = $path;     # við vísum í breytu/property með breytuheiti, en sleppum $

    }

    public function upload() {
        $uploaded = current($_FILES); # $upload geymir "image" frá index.php, holds a reference to the first element in the $_FILES array regardless of the name used in the form.(generic code)

        if ($this->checkFile($uploaded)) {
            # upload file
            $url = $this->moveFile($uploaded);
            return $url;
        }
    }


    public function getMessages() {
        return $this->messages;
    }


    protected function checkFile($file) {
        $type = $file["type"];
        if(!in_array($type, $this->permitted)) {
            $this->messages = ['Only jpg, gif, and pdf files are allowed.'];
            return false;
        }
        return true;
    }


    protected function moveFile($file) {

        $success = move_uploaded_file($file['tmp_name'], $this->destination . $file['name']);

        if ($success) {
            $result = $file['name'] . ' was uploaded successfully';
            $this->messages[] = $result;
        } else {
            $this->messages[] = 'Could not upload ' . $file['name'];
        }
        return $file['name'];
    }
}