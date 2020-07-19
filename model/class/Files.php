<?php
require_once("Manager.php");
require_once("model/global.php");

class file
{
   
    public $file_name;
    public $file_url;
    public $file_type;
    public $file_size;
    
   
    
    // upload's user profile profile picture and returns the name of the file
    public function uploadFilePicture($file)
    {
        //Manager::showError($file['profile_picture']);
        // if file was sent from signup form ...
        if (!empty($file) && !empty($file['name'])) {
            
            // Get image name
            $profile_picture = date("Y.m.d.H.i.s") . $file['name'];
            // define Where image will be stored
            $target = "public/img/" . $profile_picture;
            // upload image to folder
            //Manager::showError($file);
            if (move_uploaded_file($file['tmp_name'], $target)) {
                $url = API_ROOT_PATH . "/files";
                $res = array();
                $this->setFile_name($file['name']);
                $this->setFile_url($target);
                $this->setFile_type($file['type']);
                $this->setFile_size($file['size']);
                $manager = new Manager();
                $file = new files($this);
                //var_dump($file); die();
                $res = $manager->insertF($this);
                //Manager::showError($res);
                //$res = self::addoNTable($url, $res);
                //$res = self::correct($res);
                if ($res['error']) {
                    return 'Erreur lors de l\'jout de la photo';
                } else {
                    return $res['lastId'];
                }
                exit();
            } else {
                return 'Erreur lors de l\'jout de la photo';
            }
        }else {
            return 0 ;
        }
    }

    

    /**
     * Get the value of file_name
     */ 
    public function getFile_name()
    {
        return $this->file_name;
    }

    /**
     * Set the value of file_name
     *
     * @return  self
     */ 
    public function setFile_name($file_name)
    {
        $this->file_name = $file_name;

        return $this;
    }

    /**
     * Get the value of file_url
     */ 
    public function getFile_url()
    {
        return $this->file_url;
    }

    /**
     * Set the value of file_url
     *
     * @return  self
     */ 
    public function setFile_url($file_url)
    {
        $this->file_url = $file_url;

        return $this;
    }

    /**
     * Get the value of file_type
     */ 
    public function getFile_type()
    {
        return $this->file_type;
    }

    /**
     * Set the value of file_type
     *
     * @return  self
     */ 
    public function setFile_type($file_type)
    {
        $this->file_type = $file_type;

        return $this;
    }

    /**
     * Get the value of file_size
     */ 
    public function getFile_size()
    {
        return $this->file_size;
    }

    /**
     * Set the value of file_size
     *
     * @return  self
     */ 
    public function setFile_size($file_size)
    {
        $this->file_size = $file_size;

        return $this;
    }
}
