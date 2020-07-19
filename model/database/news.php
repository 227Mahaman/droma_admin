
<?php 
class news {
	 public $id_news;
	 public $mail;
	 public $news=array();



                public function __construct($news=null) {
                    $this->news = $news;
                         
                }

                public function all()
                {
                    return $this->news;
                }

                public function role($id_news, $mail)
                    {
                        $this->id_news = $id_news;
$this->mail = $mail;

                    }
                


                    /**
                    * Get the value of id_news
                    */ 
                    public function getId_news($id_news=null)
                    {
                        if ($id_news != null && is_array($this->news) && count($this->news)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_news = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_news]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_news($d['id_news']);
$this->setMail($d['mail']);
$this->news =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_news;
                        }
                        
                    }
                    /**
                    * Get the value of mail
                    */ 
                    public function getMail($mail=null)
                    {
                        if ($mail != null && is_array($this->news) && count($this->news)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE mail = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$mail]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_news($d['id_news']);
$this->setMail($d['mail']);
$this->news =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->mail;
                        }
                        
                    }


                    /**
                    * Set the value of id_news
                    *
                    * @return  self
                    */ 
                   public function setId_news($id_news)
                   {
                    $this->id_news = $id_news;
               
                       return $this;
                   }
                    /**
                    * Set the value of mail
                    *
                    * @return  self
                    */ 
                   public function setMail($mail)
                   {
                    $this->mail = $mail;
               
                       return $this;
                   }
}
