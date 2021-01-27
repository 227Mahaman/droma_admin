
<?php 
class information {
	 public $id_information;
	 public $bp;
	 public $email;
	 public $tel1;
	 public $tel2;
	 public $information=array();



                public function __construct($information=null) {
                    $this->information = $information;
                         
                }

                public function all()
                {
                    return $this->information;
                }

                public function role($id_information, $bp, $email, $tel1, $tel2)
                    {
                        $this->id_information = $id_information;
$this->bp = $bp;
$this->email = $email;
$this->tel1 = $tel1;
$this->tel2 = $tel2;

                    }
                


                    /**
                    * Get the value of id_information
                    */ 
                    public function getId_information($id_information=null)
                    {
                        if ($id_information != null && is_array($this->information) && count($this->information)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_information = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_information]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_information($d['id_information']);
$this->setBp($d['bp']);
$this->setEmail($d['email']);
$this->setTel1($d['tel1']);
$this->setTel2($d['tel2']);
$this->information =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_information;
                        }
                        
                    }
                    /**
                    * Get the value of bp
                    */ 
                    public function getBp($bp=null)
                    {
                        if ($bp != null && is_array($this->information) && count($this->information)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE bp = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$bp]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_information($d['id_information']);
$this->setBp($d['bp']);
$this->setEmail($d['email']);
$this->setTel1($d['tel1']);
$this->setTel2($d['tel2']);
$this->information =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->bp;
                        }
                        
                    }
                    /**
                    * Get the value of email
                    */ 
                    public function getEmail($email=null)
                    {
                        if ($email != null && is_array($this->information) && count($this->information)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE email = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$email]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_information($d['id_information']);
$this->setBp($d['bp']);
$this->setEmail($d['email']);
$this->setTel1($d['tel1']);
$this->setTel2($d['tel2']);
$this->information =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->email;
                        }
                        
                    }
                    /**
                    * Get the value of tel1
                    */ 
                    public function getTel1($tel1=null)
                    {
                        if ($tel1 != null && is_array($this->information) && count($this->information)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE tel1 = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$tel1]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_information($d['id_information']);
$this->setBp($d['bp']);
$this->setEmail($d['email']);
$this->setTel1($d['tel1']);
$this->setTel2($d['tel2']);
$this->information =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->tel1;
                        }
                        
                    }
                    /**
                    * Get the value of tel2
                    */ 
                    public function getTel2($tel2=null)
                    {
                        if ($tel2 != null && is_array($this->information) && count($this->information)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE tel2 = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$tel2]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_information($d['id_information']);
$this->setBp($d['bp']);
$this->setEmail($d['email']);
$this->setTel1($d['tel1']);
$this->setTel2($d['tel2']);
$this->information =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->tel2;
                        }
                        
                    }


                    /**
                    * Set the value of id_information
                    *
                    * @return  self
                    */ 
                   public function setId_information($id_information)
                   {
                    $this->id_information = $id_information;
               
                       return $this;
                   }
                    /**
                    * Set the value of bp
                    *
                    * @return  self
                    */ 
                   public function setBp($bp)
                   {
                    $this->bp = $bp;
               
                       return $this;
                   }
                    /**
                    * Set the value of email
                    *
                    * @return  self
                    */ 
                   public function setEmail($email)
                   {
                    $this->email = $email;
               
                       return $this;
                   }
                    /**
                    * Set the value of tel1
                    *
                    * @return  self
                    */ 
                   public function setTel1($tel1)
                   {
                    $this->tel1 = $tel1;
               
                       return $this;
                   }
                    /**
                    * Set the value of tel2
                    *
                    * @return  self
                    */ 
                   public function setTel2($tel2)
                   {
                    $this->tel2 = $tel2;
               
                       return $this;
                   }
}
