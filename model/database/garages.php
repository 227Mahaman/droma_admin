
<?php 
class garages {
	 public $id_garage;
	 public $nom;
	 public $adresse;
	 public $tel;
	 public $garages=array();



                public function __construct($garages=null) {
                    $this->garages = $garages;
                         
                }

                public function all()
                {
                    return $this->garages;
                }

                public function role($id_garage, $nom, $adresse, $tel)
                    {
                        $this->id_garage = $id_garage;
$this->nom = $nom;
$this->adresse = $adresse;
$this->tel = $tel;

                    }
                


                    /**
                    * Get the value of id_garage
                    */ 
                    public function getId_garage($id_garage=null)
                    {
                        if ($id_garage != null && is_array($this->garages) && count($this->garages)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_garage = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_garage]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_garage($d['id_garage']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->garages =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_garage;
                        }
                        
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom($nom=null)
                    {
                        if ($nom != null && is_array($this->garages) && count($this->garages)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_garage($d['id_garage']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->garages =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom;
                        }
                        
                    }
                    /**
                    * Get the value of adresse
                    */ 
                    public function getAdresse($adresse=null)
                    {
                        if ($adresse != null && is_array($this->garages) && count($this->garages)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_garage($d['id_garage']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->garages =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->adresse;
                        }
                        
                    }
                    /**
                    * Get the value of tel
                    */ 
                    public function getTel($tel=null)
                    {
                        if ($tel != null && is_array($this->garages) && count($this->garages)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE tel = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$tel]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_garage($d['id_garage']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->garages =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->tel;
                        }
                        
                    }


                    /**
                    * Set the value of id_garage
                    *
                    * @return  self
                    */ 
                   public function setId_garage($id_garage)
                   {
                    $this->id_garage = $id_garage;
               
                       return $this;
                   }
                    /**
                    * Set the value of nom
                    *
                    * @return  self
                    */ 
                   public function setNom($nom)
                   {
                    $this->nom = $nom;
               
                       return $this;
                   }
                    /**
                    * Set the value of adresse
                    *
                    * @return  self
                    */ 
                   public function setAdresse($adresse)
                   {
                    $this->adresse = $adresse;
               
                       return $this;
                   }
                    /**
                    * Set the value of tel
                    *
                    * @return  self
                    */ 
                   public function setTel($tel)
                   {
                    $this->tel = $tel;
               
                       return $this;
                   }
}
