
<?php 
class pays {
	 public $id_pays;
	 public $nom;
	 public $pays=array();



                public function __construct($pays=null) {
                    $this->pays = $pays;
                         
                }

                public function all()
                {
                    return $this->pays;
                }

                public function role($id_pays, $nom)
                    {
                        $this->id_pays = $id_pays;
$this->nom = $nom;

                    }
                


                    /**
                    * Get the value of id_pays
                    */ 
                    public function getId_pays($id_pays=null)
                    {
                        if ($id_pays != null && is_array($this->pays) && count($this->pays)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_pays = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_pays]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_pays($d['id_pays']);
$this->setNom($d['nom']);
$this->pays =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_pays;
                        }
                        
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom($nom=null)
                    {
                        if ($nom != null && is_array($this->pays) && count($this->pays)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_pays($d['id_pays']);
$this->setNom($d['nom']);
$this->pays =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom;
                        }
                        
                    }


                    /**
                    * Set the value of id_pays
                    *
                    * @return  self
                    */ 
                   public function setId_pays($id_pays)
                   {
                    $this->id_pays = $id_pays;
               
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
}
