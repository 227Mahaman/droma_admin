
<?php 
class slider {
	 public $img1;
	 public $img2;
	 public $img3;
	 public $img4;
	 public $slider=array();



                public function __construct($slider=null) {
                    $this->slider = $slider;
                         
                }

                public function all()
                {
                    return $this->slider;
                }

                public function role($img1, $img2, $img3, $img4)
                    {
                        $this->img1 = $img1;
$this->img2 = $img2;
$this->img3 = $img3;
$this->img4 = $img4;

                    }
                


                    /**
                    * Get the value of img1
                    */ 
                    public function getImg1($img1=null)
                    {
                        if ($img1 != null && is_array($this->slider) && count($this->slider)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE img1 = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$img1]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setImg1($d['img1']);
$this->setImg2($d['img2']);
$this->setImg3($d['img3']);
$this->setImg4($d['img4']);
$this->slider =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->img1;
                        }
                        
                    }
                    /**
                    * Get the value of img2
                    */ 
                    public function getImg2($img2=null)
                    {
                        if ($img2 != null && is_array($this->slider) && count($this->slider)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE img2 = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$img2]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setImg1($d['img1']);
$this->setImg2($d['img2']);
$this->setImg3($d['img3']);
$this->setImg4($d['img4']);
$this->slider =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->img2;
                        }
                        
                    }
                    /**
                    * Get the value of img3
                    */ 
                    public function getImg3($img3=null)
                    {
                        if ($img3 != null && is_array($this->slider) && count($this->slider)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE img3 = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$img3]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setImg1($d['img1']);
$this->setImg2($d['img2']);
$this->setImg3($d['img3']);
$this->setImg4($d['img4']);
$this->slider =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->img3;
                        }
                        
                    }
                    /**
                    * Get the value of img4
                    */ 
                    public function getImg4($img4=null)
                    {
                        if ($img4 != null && is_array($this->slider) && count($this->slider)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE img4 = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$img4]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setImg1($d['img1']);
$this->setImg2($d['img2']);
$this->setImg3($d['img3']);
$this->setImg4($d['img4']);
$this->slider =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->img4;
                        }
                        
                    }


                    /**
                    * Set the value of img1
                    *
                    * @return  self
                    */ 
                   public function setImg1($img1)
                   {
                    $this->img1 = $img1;
               
                       return $this;
                   }
                    /**
                    * Set the value of img2
                    *
                    * @return  self
                    */ 
                   public function setImg2($img2)
                   {
                    $this->img2 = $img2;
               
                       return $this;
                   }
                    /**
                    * Set the value of img3
                    *
                    * @return  self
                    */ 
                   public function setImg3($img3)
                   {
                    $this->img3 = $img3;
               
                       return $this;
                   }
                    /**
                    * Set the value of img4
                    *
                    * @return  self
                    */ 
                   public function setImg4($img4)
                   {
                    $this->img4 = $img4;
               
                       return $this;
                   }
}
