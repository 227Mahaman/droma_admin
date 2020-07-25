
<?php 
class ville {
	 public $id_ville;
	 public $intitule;
	 public $pays;
	 public $ville=array();



                public function __construct($ville=null) {
                    $this->ville = $ville;
                         
                }

                public function all()
                {
                    return $this->ville;
                }

                public function role($id_ville, $intitule, $pays)
                    {
                        $this->id_ville = $id_ville;
$this->intitule = $intitule;
$this->pays = $pays;

                    }
                


                    /**
                    * Get the value of id_ville
                    */ 
                    public function getId_ville($id_ville=null)
                    {
                        if ($id_ville != null && is_array($this->ville) && count($this->ville)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_ville($d['id_ville']);
$this->setIntitule($d['intitule']);
$this->setPays($d['pays']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_ville;
                        }
                        
                    }
                    /**
                    * Get the value of intitule
                    */ 
                    public function getIntitule($intitule=null)
                    {
                        if ($intitule != null && is_array($this->ville) && count($this->ville)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE intitule = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$intitule]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_ville($d['id_ville']);
$this->setIntitule($d['intitule']);
$this->setPays($d['pays']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->intitule;
                        }
                        
                    }
                    /**
                    * Get the value of pays
                    */ 
                    public function getPays($pays=null)
                    {
                        if ($pays != null && is_array($this->ville) && count($this->ville)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE pays = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$pays]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_ville($d['id_ville']);
$this->setIntitule($d['intitule']);
$this->setPays($d['pays']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->pays;
                        }
                        
                    }


                    /**
                    * Set the value of id_ville
                    *
                    * @return  self
                    */ 
                   public function setId_ville($id_ville)
                   {
                    $this->id_ville = $id_ville;
               
                       return $this;
                   }
                    /**
                    * Set the value of intitule
                    *
                    * @return  self
                    */ 
                   public function setIntitule($intitule)
                   {
                    $this->intitule = $intitule;
               
                       return $this;
                   }
                    /**
                    * Set the value of pays
                    *
                    * @return  self
                    */ 
                   public function setPays($pays)
                   {
                    $this->pays = $pays;
               
                       return $this;
                   }
}
