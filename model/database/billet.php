
<?php 
class billet {
	 public $id_billet;
	 public $code_billet;
	 public $created_at;
	 public $user_create;
	 public $depart;
	 public $destination;
	 public $billet=array();



                public function __construct($billet=null) {
                    $this->billet = $billet;
                         
                }

                public function all()
                {
                    return $this->billet;
                }

                public function role($id_billet, $code_billet, $created_at, $user_create, $depart, $destination)
                    {
                        $this->id_billet = $id_billet;
$this->code_billet = $code_billet;
$this->created_at = $created_at;
$this->user_create = $user_create;
$this->depart = $depart;
$this->destination = $destination;

                    }
                


                    /**
                    * Get the value of id_billet
                    */ 
                    public function getId_billet($id_billet=null)
                    {
                        if ($id_billet != null && is_array($this->billet) && count($this->billet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_billet = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_billet]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_billet($d['id_billet']);
$this->setCode_billet($d['code_billet']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setDepart($d['depart']);
$this->setDestination($d['destination']);
$this->billet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_billet;
                        }
                        
                    }
                    /**
                    * Get the value of code_billet
                    */ 
                    public function getCode_billet($code_billet=null)
                    {
                        if ($code_billet != null && is_array($this->billet) && count($this->billet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE code_billet = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$code_billet]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_billet($d['id_billet']);
$this->setCode_billet($d['code_billet']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setDepart($d['depart']);
$this->setDestination($d['destination']);
$this->billet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->code_billet;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->billet) && count($this->billet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_billet($d['id_billet']);
$this->setCode_billet($d['code_billet']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setDepart($d['depart']);
$this->setDestination($d['destination']);
$this->billet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_at;
                        }
                        
                    }
                    /**
                    * Get the value of user_create
                    */ 
                    public function getUser_create($user_create=null)
                    {
                        if ($user_create != null && is_array($this->billet) && count($this->billet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user_create = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user_create]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_billet($d['id_billet']);
$this->setCode_billet($d['code_billet']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setDepart($d['depart']);
$this->setDestination($d['destination']);
$this->billet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->user_create;
                        }
                        
                    }
                    /**
                    * Get the value of depart
                    */ 
                    public function getDepart($depart=null)
                    {
                        if ($depart != null && is_array($this->billet) && count($this->billet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE depart = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$depart]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_billet($d['id_billet']);
$this->setCode_billet($d['code_billet']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setDepart($d['depart']);
$this->setDestination($d['destination']);
$this->billet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->depart;
                        }
                        
                    }
                    /**
                    * Get the value of destination
                    */ 
                    public function getDestination($destination=null)
                    {
                        if ($destination != null && is_array($this->billet) && count($this->billet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE destination = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$destination]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_billet($d['id_billet']);
$this->setCode_billet($d['code_billet']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setDepart($d['depart']);
$this->setDestination($d['destination']);
$this->billet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->destination;
                        }
                        
                    }


                    /**
                    * Set the value of id_billet
                    *
                    * @return  self
                    */ 
                   public function setId_billet($id_billet)
                   {
                    $this->id_billet = $id_billet;
               
                       return $this;
                   }
                    /**
                    * Set the value of code_billet
                    *
                    * @return  self
                    */ 
                   public function setCode_billet($code_billet)
                   {
                    $this->code_billet = $code_billet;
               
                       return $this;
                   }
                    /**
                    * Set the value of created_at
                    *
                    * @return  self
                    */ 
                   public function setCreated_at($created_at)
                   {
                    $this->created_at = $created_at;
               
                       return $this;
                   }
                    /**
                    * Set the value of user_create
                    *
                    * @return  self
                    */ 
                   public function setUser_create($user_create)
                   {
                    $this->user_create = $user_create;
               
                       return $this;
                   }
                    /**
                    * Set the value of depart
                    *
                    * @return  self
                    */ 
                   public function setDepart($depart)
                   {
                    $this->depart = $depart;
               
                       return $this;
                   }
                    /**
                    * Set the value of destination
                    *
                    * @return  self
                    */ 
                   public function setDestination($destination)
                   {
                    $this->destination = $destination;
               
                       return $this;
                   }
}
