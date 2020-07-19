
<?php 
class client {
	 public $id_client;
	 public $nom;
	 public $prenom;
	 public $tel;
	 public $email;
	 public $fonction;
	 public $nationalite;
	 public $login;
	 public $pass;
	 public $client=array();



                public function __construct($client=null) {
                    $this->client = $client;
                         
                }

                public function all()
                {
                    return $this->client;
                }

                public function role($id_client, $nom, $prenom, $tel, $email, $fonction, $nationalite, $login, $pass)
                    {
                        $this->id_client = $id_client;
$this->nom = $nom;
$this->prenom = $prenom;
$this->tel = $tel;
$this->email = $email;
$this->fonction = $fonction;
$this->nationalite = $nationalite;
$this->login = $login;
$this->pass = $pass;

                    }
                


                    /**
                    * Get the value of id_client
                    */ 
                    public function getId_client($id_client=null)
                    {
                        if ($id_client != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_client = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_client]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setTel($d['tel']);
$this->setEmail($d['email']);
$this->setFonction($d['fonction']);
$this->setNationalite($d['nationalite']);
$this->setLogin($d['login']);
$this->setPass($d['pass']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_client;
                        }
                        
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom($nom=null)
                    {
                        if ($nom != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setTel($d['tel']);
$this->setEmail($d['email']);
$this->setFonction($d['fonction']);
$this->setNationalite($d['nationalite']);
$this->setLogin($d['login']);
$this->setPass($d['pass']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom;
                        }
                        
                    }
                    /**
                    * Get the value of prenom
                    */ 
                    public function getPrenom($prenom=null)
                    {
                        if ($prenom != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE prenom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$prenom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setTel($d['tel']);
$this->setEmail($d['email']);
$this->setFonction($d['fonction']);
$this->setNationalite($d['nationalite']);
$this->setLogin($d['login']);
$this->setPass($d['pass']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->prenom;
                        }
                        
                    }
                    /**
                    * Get the value of tel
                    */ 
                    public function getTel($tel=null)
                    {
                        if ($tel != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE tel = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$tel]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setTel($d['tel']);
$this->setEmail($d['email']);
$this->setFonction($d['fonction']);
$this->setNationalite($d['nationalite']);
$this->setLogin($d['login']);
$this->setPass($d['pass']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->tel;
                        }
                        
                    }
                    /**
                    * Get the value of email
                    */ 
                    public function getEmail($email=null)
                    {
                        if ($email != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE email = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$email]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setTel($d['tel']);
$this->setEmail($d['email']);
$this->setFonction($d['fonction']);
$this->setNationalite($d['nationalite']);
$this->setLogin($d['login']);
$this->setPass($d['pass']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->email;
                        }
                        
                    }
                    /**
                    * Get the value of fonction
                    */ 
                    public function getFonction($fonction=null)
                    {
                        if ($fonction != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE fonction = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$fonction]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setTel($d['tel']);
$this->setEmail($d['email']);
$this->setFonction($d['fonction']);
$this->setNationalite($d['nationalite']);
$this->setLogin($d['login']);
$this->setPass($d['pass']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->fonction;
                        }
                        
                    }
                    /**
                    * Get the value of nationalite
                    */ 
                    public function getNationalite($nationalite=null)
                    {
                        if ($nationalite != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nationalite = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nationalite]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setTel($d['tel']);
$this->setEmail($d['email']);
$this->setFonction($d['fonction']);
$this->setNationalite($d['nationalite']);
$this->setLogin($d['login']);
$this->setPass($d['pass']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nationalite;
                        }
                        
                    }
                    /**
                    * Get the value of login
                    */ 
                    public function getLogin($login=null)
                    {
                        if ($login != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE login = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$login]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setTel($d['tel']);
$this->setEmail($d['email']);
$this->setFonction($d['fonction']);
$this->setNationalite($d['nationalite']);
$this->setLogin($d['login']);
$this->setPass($d['pass']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->login;
                        }
                        
                    }
                    /**
                    * Get the value of pass
                    */ 
                    public function getPass($pass=null)
                    {
                        if ($pass != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE pass = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$pass]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setTel($d['tel']);
$this->setEmail($d['email']);
$this->setFonction($d['fonction']);
$this->setNationalite($d['nationalite']);
$this->setLogin($d['login']);
$this->setPass($d['pass']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->pass;
                        }
                        
                    }


                    /**
                    * Set the value of id_client
                    *
                    * @return  self
                    */ 
                   public function setId_client($id_client)
                   {
                    $this->id_client = $id_client;
               
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
                   public function setPrenom($prenom)
                   {
                    $this->prenom = $prenom;
               
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
                    * Set the value of fonction
                    *
                    * @return  self
                    */ 
                   public function setFonction($fonction)
                   {
                    $this->fonction = $fonction;
               
                       return $this;
                   }
                    /**
                    * Set the value of nationalite
                    *
                    * @return  self
                    */ 
                   public function setNationalite($nationalite)
                   {
                    $this->nationalite = $nationalite;
               
                       return $this;
                   }
                    /**
                    * Set the value of login
                    *
                    * @return  self
                    */ 
                   public function setLogin($login)
                   {
                    $this->login = $login;
               
                       return $this;
                   }
                    /**
                    * Set the value of pass
                    *
                    * @return  self
                    */ 
                   public function setPass($pass)
                   {
                    $this->pass = $pass;
               
                       return $this;
                   }
}
