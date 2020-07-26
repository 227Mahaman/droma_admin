
<?php 
class avis {
	 public $id_avis;
	 public $client;
	 public $txt;
     public $file;
     public $url_v;
	 public $avis=array();



                public function __construct($avis=null) {
                    $this->avis = $avis;
                         
                }

                public function all()
                {
                    return $this->avis;
                }

                public function role($id_avis, $client, $txt, $file, $url_v)
                    {
                        $this->id_avis = $id_avis;
$this->client = $client;
$this->txt = $txt;
$this->file = $file;
$this->url_v = $url_v;

                    }
                


                    /**
                    * Get the value of id_avis
                    */ 
                    public function getId_avis($id_avis=null)
                    {
                        if ($id_avis != null && is_array($this->avis) && count($this->avis)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_avis = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_avis]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_avis($d['id_avis']);
$this->setclient($d['client']);
$this->settxt($d['txt']);
$this->setfile($d['file']);
$this->setUrl_v($d['url_v']);
$this->avis =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_avis;
                        }
                        
                    }
                    /**
                    * Get the value of client
                    */ 
                    public function getclient($client=null)
                    {
                        if ($client != null && is_array($this->avis) && count($this->avis)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE client = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$client]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_avis($d['id_avis']);
$this->setclient($d['client']);
$this->settxt($d['txt']);
$this->setfile($d['file']);
$this->setUrl_v($d['url_v']);
$this->avis =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->client;
                        }
                        
                    }
                    /**
                    * Get the value of txt
                    */ 
                    public function gettxt($txt=null)
                    {
                        if ($txt != null && is_array($this->avis) && count($this->avis)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE txt = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$txt]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_avis($d['id_avis']);
$this->setclient($d['client']);
$this->settxt($d['txt']);
$this->setfile($d['file']);
$this->setUrl_v($d['url_v']);
$this->avis =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->txt;
                        }
                        
                    }
                    /**
                    * Get the value of file
                    */ 
                    public function getfile($file=null)
                    {
                        if ($file != null && is_array($this->avis) && count($this->avis)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_avis($d['id_avis']);
$this->setclient($d['client']);
$this->settxt($d['txt']);
$this->setfile($d['file']);
$this->setUrl_v($d['url_v']);
$this->avis =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file;
                        }
                        
                    }


                    /**
                    * Set the value of id_avis
                    *
                    * @return  self
                    */ 
                   public function setId_avis($id_avis)
                   {
                    $this->id_avis = $id_avis;
               
                       return $this;
                   }
                    /**
                    * Set the value of client
                    *
                    * @return  self
                    */ 
                   public function setclient($client)
                   {
                    $this->client = $client;
               
                       return $this;
                   }
                    /**
                    * Set the value of txt
                    *
                    * @return  self
                    */ 
                   public function settxt($txt)
                   {
                    $this->txt = $txt;
               
                       return $this;
                   }
                    /**
                    * Set the value of file
                    *
                    * @return  self
                    */ 
                   public function setfile($file)
                   {
                    $this->file = $file;
               
                       return $this;
                   }
                   /**
                    * Set the value of file
                    *
                    * @return  self
                    */ 
                    public function setUrl_v($url_v)
                    {
                     $this->url_v = $url_v;
                
                        return $this;
                    }
}
