
<?php 
class tarif {
	 public $id_tarif;
	 public $code_tarif;
	 public $valeur;
	 public $tarif=array();



                public function __construct($tarif=null) {
                    $this->tarif = $tarif;
                         
                }

                public function all()
                {
                    return $this->tarif;
                }

                public function role($id_tarif, $code_tarif, $valeur)
                    {
                        $this->id_tarif = $id_tarif;
$this->code_tarif = $code_tarif;
$this->valeur = $valeur;

                    }
                


                    /**
                    * Get the value of id_tarif
                    */ 
                    public function getId_tarif($id_tarif=null)
                    {
                        if ($id_tarif != null && is_array($this->tarif) && count($this->tarif)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_tarif = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_tarif]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_tarif($d['id_tarif']);
$this->setCode_tarif($d['code_tarif']);
$this->setValeur($d['valeur']);
$this->tarif =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_tarif;
                        }
                        
                    }
                    /**
                    * Get the value of code_tarif
                    */ 
                    public function getCode_tarif($code_tarif=null)
                    {
                        if ($code_tarif != null && is_array($this->tarif) && count($this->tarif)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE code_tarif = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$code_tarif]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_tarif($d['id_tarif']);
$this->setCode_tarif($d['code_tarif']);
$this->setValeur($d['valeur']);
$this->tarif =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->code_tarif;
                        }
                        
                    }
                    /**
                    * Get the value of valeur
                    */ 
                    public function getValeur($valeur=null)
                    {
                        if ($valeur != null && is_array($this->tarif) && count($this->tarif)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE valeur = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$valeur]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_tarif($d['id_tarif']);
$this->setCode_tarif($d['code_tarif']);
$this->setValeur($d['valeur']);
$this->tarif =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->valeur;
                        }
                        
                    }


                    /**
                    * Set the value of id_tarif
                    *
                    * @return  self
                    */ 
                   public function setId_tarif($id_tarif)
                   {
                    $this->id_tarif = $id_tarif;
               
                       return $this;
                   }
                    /**
                    * Set the value of code_tarif
                    *
                    * @return  self
                    */ 
                   public function setCode_tarif($code_tarif)
                   {
                    $this->code_tarif = $code_tarif;
               
                       return $this;
                   }
                    /**
                    * Set the value of valeur
                    *
                    * @return  self
                    */ 
                   public function setValeur($valeur)
                   {
                    $this->valeur = $valeur;
               
                       return $this;
                   }
}
