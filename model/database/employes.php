
<?php 
class employes {
	 public $id_employe;
	 public $nom;
	 public $prenom;
     public $poste;
	 public $employes=array();



                public function __construct($employes=null) {
                    $this->employes = $employes;
                         
                }

                public function all()
                {
                    return $this->employes;
                }

                public function role($id_employe, $nom, $prenom, $poste)
                    {
                        $this->id_employe = $id_employe;
$this->nom = $nom;
$this->prenom = $prenom;
$this->poste = $poste;

                    }
                


                    /**
                    * Get the value of id_employe
                    */ 
                    public function getId_employe($id_employe=null)
                    {
                        if ($id_employe != null && is_array($this->employes) && count($this->employes)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_employe = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_employe]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_employe($d['id_employe']);
$this->setNom($d['nom']);
$this->setprenom($d['prenom']);
$this->setposte($d['poste']);
$this->employes =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_employe;
                        }
                        
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom($nom=null)
                    {
                        if ($nom != null && is_array($this->employes) && count($this->employes)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_employe($d['id_employe']);
$this->setNom($d['nom']);
$this->setprenom($d['prenom']);
$this->setposte($d['poste']);
$this->employes =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom;
                        }
                        
                    }
                    /**
                    * Get the value of prenom
                    */ 
                    public function getprenom($prenom=null)
                    {
                        if ($prenom != null && is_array($this->employes) && count($this->employes)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE prenom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$prenom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_employe($d['id_employe']);
$this->setNom($d['nom']);
$this->setprenom($d['prenom']);
$this->setposte($d['poste']);
$this->employes =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->prenom;
                        }
                        
                    }
                    /**
                    * Get the value of poste
                    */ 
                    public function getposte($poste=null)
                    {
                        if ($poste != null && is_array($this->employes) && count($this->employes)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE poste = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$poste]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_employe($d['id_employe']);
$this->setNom($d['nom']);
$this->setprenom($d['prenom']);
$this->setposte($d['poste']);
$this->employes =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->poste;
                        }
                        
                    }


                    /**
                    * Set the value of id_employe
                    *
                    * @return  self
                    */ 
                   public function setId_employe($id_employe)
                   {
                    $this->id_employe = $id_employe;
               
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
                    * Set the value of prenom
                    *
                    * @return  self
                    */ 
                   public function setprenom($prenom)
                   {
                    $this->prenom = $prenom;
               
                       return $this;
                   }
                    /**
                    * Set the value of poste
                    *
                    * @return  self
                    */ 
                   public function setposte($poste)
                   {
                    $this->poste = $poste;
               
                       return $this;
                   }
}
