
<?php 
class bus {
	 public $id_bus;
	 public $numero_plaque;
	 public $marque;
     public $chauffeur;
	 public $bus=array();



                public function __construct($bus=null) {
                    $this->bus = $bus;
                         
                }

                public function all()
                {
                    return $this->bus;
                }

                public function role($id_bus, $numero_plaque, $marque, $chauffeur)
                    {
                        $this->id_bus = $id_bus;
$this->numero_plaque = $numero_plaque;
$this->marque = $marque;
$this->chauffeur = $chauffeur;

                    }
                


                    /**
                    * Get the value of id_bus
                    */ 
                    public function getId_bus($id_bus=null)
                    {
                        if ($id_bus != null && is_array($this->bus) && count($this->bus)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_bus = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_bus]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_bus($d['id_bus']);
$this->setNumero_plaque($d['numero_plaque']);
$this->setmarque($d['marque']);
$this->setchauffeur($d['chauffeur']);
$this->bus =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_bus;
                        }
                        
                    }
                    /**
                    * Get the value of numero_plaque
                    */ 
                    public function getNumero_plaque($numero_plaque=null)
                    {
                        if ($numero_plaque != null && is_array($this->bus) && count($this->bus)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE numero_plaque = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$numero_plaque]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_bus($d['id_bus']);
$this->setNumero_plaque($d['numero_plaque']);
$this->setmarque($d['marque']);
$this->setchauffeur($d['chauffeur']);
$this->bus =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->numero_plaque;
                        }
                        
                    }
                    /**
                    * Get the value of marque
                    */ 
                    public function getmarque($marque=null)
                    {
                        if ($marque != null && is_array($this->bus) && count($this->bus)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE marque = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$marque]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_bus($d['id_bus']);
$this->setNumero_plaque($d['numero_plaque']);
$this->setmarque($d['marque']);
$this->setchauffeur($d['chauffeur']);
$this->bus =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->marque;
                        }
                        
                    }
                    /**
                    * Get the value of chauffeur
                    */ 
                    public function getchauffeur($chauffeur=null)
                    {
                        if ($chauffeur != null && is_array($this->bus) && count($this->bus)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE chauffeur = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$chauffeur]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_bus($d['id_bus']);
$this->setNumero_plaque($d['numero_plaque']);
$this->setmarque($d['marque']);
$this->setchauffeur($d['chauffeur']);
$this->bus =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->chauffeur;
                        }
                        
                    }


                    /**
                    * Set the value of id_bus
                    *
                    * @return  self
                    */ 
                   public function setId_bus($id_bus)
                   {
                    $this->id_bus = $id_bus;
               
                       return $this;
                   }
                    /**
                    * Set the value of numero_plaque
                    *
                    * @return  self
                    */ 
                   public function setNumero_plaque($numero_plaque)
                   {
                    $this->numero_plaque = $numero_plaque;
               
                       return $this;
                   }
                    /**
                    * Set the value of marque
                    *
                    * @return  self
                    */ 
                   public function setmarque($marque)
                   {
                    $this->marque = $marque;
               
                       return $this;
                   }
                    /**
                    * Set the value of chauffeur
                    *
                    * @return  self
                    */ 
                   public function setchauffeur($chauffeur)
                   {
                    $this->chauffeur = $chauffeur;
               
                       return $this;
                   }
}
