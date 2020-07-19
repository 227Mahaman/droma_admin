
<?php 
class post {
	 public $id_post;
	 public $intitule_post;
	 public $description;
	 public $theme;
	 public $created_at;
	 public $user_create;
	 public $file;
	 public $post=array();



                public function __construct($post=null) {
                    $this->post = $post;
                         
                }

                public function all()
                {
                    return $this->post;
                }

                public function role($id_post, $intitule_post, $description, $theme, $created_at, $user_create, $file)
                    {
                        $this->id_post = $id_post;
$this->intitule_post = $intitule_post;
$this->description = $description;
$this->theme = $theme;
$this->created_at = $created_at;
$this->user_create = $user_create;
$this->file = $file;

                    }
                


                    /**
                    * Get the value of id_post
                    */ 
                    public function getId_post($id_post=null)
                    {
                        if ($id_post != null && is_array($this->post) && count($this->post)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_post = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_post]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_post($d['id_post']);
$this->setIntitule_post($d['intitule_post']);
$this->setDescription($d['description']);
$this->setTheme($d['theme']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setFile($d['file']);
$this->post =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_post;
                        }
                        
                    }
                    /**
                    * Get the value of intitule_post
                    */ 
                    public function getIntitule_post($intitule_post=null)
                    {
                        if ($intitule_post != null && is_array($this->post) && count($this->post)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE intitule_post = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$intitule_post]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_post($d['id_post']);
$this->setIntitule_post($d['intitule_post']);
$this->setDescription($d['description']);
$this->setTheme($d['theme']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setFile($d['file']);
$this->post =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->intitule_post;
                        }
                        
                    }
                    /**
                    * Get the value of description
                    */ 
                    public function getDescription($description=null)
                    {
                        if ($description != null && is_array($this->post) && count($this->post)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE description = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$description]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_post($d['id_post']);
$this->setIntitule_post($d['intitule_post']);
$this->setDescription($d['description']);
$this->setTheme($d['theme']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setFile($d['file']);
$this->post =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->description;
                        }
                        
                    }
                    /**
                    * Get the value of theme
                    */ 
                    public function getTheme($theme=null)
                    {
                        if ($theme != null && is_array($this->post) && count($this->post)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE theme = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$theme]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_post($d['id_post']);
$this->setIntitule_post($d['intitule_post']);
$this->setDescription($d['description']);
$this->setTheme($d['theme']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setFile($d['file']);
$this->post =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->theme;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->post) && count($this->post)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_post($d['id_post']);
$this->setIntitule_post($d['intitule_post']);
$this->setDescription($d['description']);
$this->setTheme($d['theme']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setFile($d['file']);
$this->post =$data; 
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
                        if ($user_create != null && is_array($this->post) && count($this->post)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user_create = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user_create]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_post($d['id_post']);
$this->setIntitule_post($d['intitule_post']);
$this->setDescription($d['description']);
$this->setTheme($d['theme']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setFile($d['file']);
$this->post =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->user_create;
                        }
                        
                    }
                    /**
                    * Get the value of file
                    */ 
                    public function getFile($file=null)
                    {
                        if ($file != null && is_array($this->post) && count($this->post)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_post($d['id_post']);
$this->setIntitule_post($d['intitule_post']);
$this->setDescription($d['description']);
$this->setTheme($d['theme']);
$this->setCreated_at($d['created_at']);
$this->setUser_create($d['user_create']);
$this->setFile($d['file']);
$this->post =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file;
                        }
                        
                    }


                    /**
                    * Set the value of id_post
                    *
                    * @return  self
                    */ 
                   public function setId_post($id_post)
                   {
                    $this->id_post = $id_post;
               
                       return $this;
                   }
                    /**
                    * Set the value of intitule_post
                    *
                    * @return  self
                    */ 
                   public function setIntitule_post($intitule_post)
                   {
                    $this->intitule_post = $intitule_post;
               
                       return $this;
                   }
                    /**
                    * Set the value of description
                    *
                    * @return  self
                    */ 
                   public function setDescription($description)
                   {
                    $this->description = $description;
               
                       return $this;
                   }
                    /**
                    * Set the value of theme
                    *
                    * @return  self
                    */ 
                   public function setTheme($theme)
                   {
                    $this->theme = $theme;
               
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
