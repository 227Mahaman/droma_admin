
<?php 
class agence {
	 public $id_agence;
	 public $code_agence;
	 public $nom_agence;
	 public $localisation;
	 public $ville;
	 public $file;
	 public $agence=array();



                public function __construct($agence=null) {
                    $this->agence = $agence;
                         
                }

                public function all()
                {
                    return $this->agence;
                }

                public function role($id_agence, $code_agence, $nom_agence, $localisation, $ville, $file)
                    {
                        $this->id_agence = $id_agence;
$this->code_agence = $code_agence;
$this->nom_agence = $nom_agence;
$this->localisation = $localisation;
$this->ville = $ville;
$this->file = $file;

                    }
                


                    /**
                    * Get the value of id_agence
                    */ 
                    public function getId_agence($id_agence=null)
                    {
                        if ($id_agence != null && is_array($this->agence) && count($this->agence)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_agence = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_agence]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_agence($d['id_agence']);
$this->setCode_agence($d['code_agence']);
$this->setNom_agence($d['nom_agence']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setFile($d['file']);
$this->agence =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_agence;
                        }
                        
                    }
                    /**
                    * Get the value of code_agence
                    */ 
                    public function getCode_agence($code_agence=null)
                    {
                        if ($code_agence != null && is_array($this->agence) && count($this->agence)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE code_agence = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$code_agence]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_agence($d['id_agence']);
$this->setCode_agence($d['code_agence']);
$this->setNom_agence($d['nom_agence']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setFile($d['file']);
$this->agence =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->code_agence;
                        }
                        
                    }
                    /**
                    * Get the value of nom_agence
                    */ 
                    public function getNom_agence($nom_agence=null)
                    {
                        if ($nom_agence != null && is_array($this->agence) && count($this->agence)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom_agence = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom_agence]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_agence($d['id_agence']);
$this->setCode_agence($d['code_agence']);
$this->setNom_agence($d['nom_agence']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setFile($d['file']);
$this->agence =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom_agence;
                        }
                        
                    }
                    /**
                    * Get the value of localisation
                    */ 
                    public function getLocalisation($localisation=null)
                    {
                        if ($localisation != null && is_array($this->agence) && count($this->agence)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE localisation = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$localisation]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_agence($d['id_agence']);
$this->setCode_agence($d['code_agence']);
$this->setNom_agence($d['nom_agence']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setFile($d['file']);
$this->agence =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->localisation;
                        }
                        
                    }
                    /**
                    * Get the value of ville
                    */ 
                    public function getVille($ville=null)
                    {
                        if ($ville != null && is_array($this->agence) && count($this->agence)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_agence($d['id_agence']);
$this->setCode_agence($d['code_agence']);
$this->setNom_agence($d['nom_agence']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setFile($d['file']);
$this->agence =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville;
                        }
                        
                    }
                    /**
                    * Get the value of file
                    */ 
                    public function getFile($file=null)
                    {
                        if ($file != null && is_array($this->agence) && count($this->agence)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_agence($d['id_agence']);
$this->setCode_agence($d['code_agence']);
$this->setNom_agence($d['nom_agence']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setFile($d['file']);
$this->agence =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file;
                        }
                        
                    }


                    /**
                    * Set the value of id_agence
                    *
                    * @return  self
                    */ 
                   public function setId_agence($id_agence)
                   {
                    $this->id_agence = $id_agence;
               
                       return $this;
                   }
                    /**
                    * Set the value of code_agence
                    *
                    * @return  self
                    */ 
                   public function setCode_agence($code_agence)
                   {
                    $this->code_agence = $code_agence;
               
                       return $this;
                   }
                    /**
                    * Set the value of nom_agence
                    *
                    * @return  self
                    */ 
                   public function setNom_agence($nom_agence)
                   {
                    $this->nom_agence = $nom_agence;
               
                       return $this;
                   }
                    /**
                    * Set the value of localisation
                    *
                    * @return  self
                    */ 
                   public function setLocalisation($localisation)
                   {
                    $this->localisation = $localisation;
               
                       return $this;
                   }
                    /**
                    * Set the value of ville
                    *
                    * @return  self
                    */ 
                   public function setVille($ville)
                   {
                    $this->ville = $ville;
               
                       return $this;
                   }
                    /**
                    * Set the value of file
                    *
                    * @return  self
                    */ 
                   public function setFile($file)
                   {
                    $this->file = $file;
               
                       return $this;
                   }
}
