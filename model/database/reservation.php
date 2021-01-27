
<?php 
class reservation {
	 public $id_reservation;
	 public $client;
	 public $billet;
	 public $date;
	 public $heure;
	 public $etat;
	 public $place;
	 public $cout;
	 public $created_at;
	 public $reservation=array();



                public function __construct($reservation=null) {
                    $this->reservation = $reservation;
                         
                }

                public function all()
                {
                    return $this->reservation;
                }

                public function role($id_reservation, $client, $billet, $date, $heure, $etat, $place, $cout, $created_at)
                    {
                        $this->id_reservation = $id_reservation;
$this->client = $client;
$this->billet = $billet;
$this->date = $date;
$this->heure = $heure;
$this->etat = $etat;
$this->place = $place;
$this->cout = $cout;
$this->created_at = $created_at;

                    }
                


                    /**
                    * Get the value of id_reservation
                    */ 
                    public function getId_reservation($id_reservation=null)
                    {
                        if ($id_reservation != null && is_array($this->reservation) && count($this->reservation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_reservation = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_reservation]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_reservation($d['id_reservation']);
$this->setClient($d['client']);
$this->setBillet($d['billet']);
$this->setDate($d['date']);
$this->setHeure($d['heure']);
$this->setEtat($d['etat']);
$this->setPlace($d['place']);
$this->setCout($d['cout']);
$this->setCreated_at($d['created_at']);
$this->reservation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_reservation;
                        }
                        
                    }
                    /**
                    * Get the value of client
                    */ 
                    public function getClient($client=null)
                    {
                        if ($client != null && is_array($this->reservation) && count($this->reservation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE client = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$client]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_reservation($d['id_reservation']);
$this->setClient($d['client']);
$this->setBillet($d['billet']);
$this->setDate($d['date']);
$this->setHeure($d['heure']);
$this->setEtat($d['etat']);
$this->setPlace($d['place']);
$this->setCout($d['cout']);
$this->setCreated_at($d['created_at']);
$this->reservation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->client;
                        }
                        
                    }
                    /**
                    * Get the value of billet
                    */ 
                    public function getBillet($billet=null)
                    {
                        if ($billet != null && is_array($this->reservation) && count($this->reservation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE billet = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$billet]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_reservation($d['id_reservation']);
$this->setClient($d['client']);
$this->setBillet($d['billet']);
$this->setDate($d['date']);
$this->setHeure($d['heure']);
$this->setEtat($d['etat']);
$this->setPlace($d['place']);
$this->setCout($d['cout']);
$this->setCreated_at($d['created_at']);
$this->reservation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->billet;
                        }
                        
                    }
                    /**
                    * Get the value of date
                    */ 
                    public function getDate($date=null)
                    {
                        if ($date != null && is_array($this->reservation) && count($this->reservation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_reservation($d['id_reservation']);
$this->setClient($d['client']);
$this->setBillet($d['billet']);
$this->setDate($d['date']);
$this->setHeure($d['heure']);
$this->setEtat($d['etat']);
$this->setPlace($d['place']);
$this->setCout($d['cout']);
$this->setCreated_at($d['created_at']);
$this->reservation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date;
                        }
                        
                    }
                    /**
                    * Get the value of heure
                    */ 
                    public function getHeure($heure=null)
                    {
                        if ($heure != null && is_array($this->reservation) && count($this->reservation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE heure = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$heure]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_reservation($d['id_reservation']);
$this->setClient($d['client']);
$this->setBillet($d['billet']);
$this->setDate($d['date']);
$this->setHeure($d['heure']);
$this->setEtat($d['etat']);
$this->setPlace($d['place']);
$this->setCout($d['cout']);
$this->setCreated_at($d['created_at']);
$this->reservation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->heure;
                        }
                        
                    }
                    /**
                    * Get the value of etat
                    */ 
                    public function getEtat($etat=null)
                    {
                        if ($etat != null && is_array($this->reservation) && count($this->reservation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE etat = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$etat]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_reservation($d['id_reservation']);
$this->setClient($d['client']);
$this->setBillet($d['billet']);
$this->setDate($d['date']);
$this->setHeure($d['heure']);
$this->setEtat($d['etat']);
$this->setPlace($d['place']);
$this->setCout($d['cout']);
$this->setCreated_at($d['created_at']);
$this->reservation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->etat;
                        }
                        
                    }
                    /**
                    * Get the value of place
                    */ 
                    public function getPlace($place=null)
                    {
                        if ($place != null && is_array($this->reservation) && count($this->reservation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE place = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$place]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_reservation($d['id_reservation']);
$this->setClient($d['client']);
$this->setBillet($d['billet']);
$this->setDate($d['date']);
$this->setHeure($d['heure']);
$this->setEtat($d['etat']);
$this->setPlace($d['place']);
$this->setCout($d['cout']);
$this->setCreated_at($d['created_at']);
$this->reservation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->place;
                        }
                        
                    }
                    /**
                    * Get the value of cout
                    */ 
                    public function getCout($cout=null)
                    {
                        if ($cout != null && is_array($this->reservation) && count($this->reservation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE cout = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$cout]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_reservation($d['id_reservation']);
$this->setClient($d['client']);
$this->setBillet($d['billet']);
$this->setDate($d['date']);
$this->setHeure($d['heure']);
$this->setEtat($d['etat']);
$this->setPlace($d['place']);
$this->setCout($d['cout']);
$this->setCreated_at($d['created_at']);
$this->reservation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->cout;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->reservation) && count($this->reservation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_reservation($d['id_reservation']);
$this->setClient($d['client']);
$this->setBillet($d['billet']);
$this->setDate($d['date']);
$this->setHeure($d['heure']);
$this->setEtat($d['etat']);
$this->setPlace($d['place']);
$this->setCout($d['cout']);
$this->setCreated_at($d['created_at']);
$this->reservation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_at;
                        }
                        
                    }


                    /**
                    * Set the value of id_reservation
                    *
                    * @return  self
                    */ 
                   public function setId_reservation($id_reservation)
                   {
                    $this->id_reservation = $id_reservation;
               
                       return $this;
                   }
                    /**
                    * Set the value of client
                    *
                    * @return  self
                    */ 
                   public function setClient($client)
                   {
                    $this->client = $client;
               
                       return $this;
                   }
                    /**
                    * Set the value of billet
                    *
                    * @return  self
                    */ 
                   public function setBillet($billet)
                   {
                    $this->billet = $billet;
               
                       return $this;
                   }
                    /**
                    * Set the value of date
                    *
                    * @return  self
                    */ 
                   public function setDate($date)
                   {
                    $this->date = $date;
               
                       return $this;
                   }
                    /**
                    * Set the value of heure
                    *
                    * @return  self
                    */ 
                   public function setHeure($heure)
                   {
                    $this->heure = $heure;
               
                       return $this;
                   }
                    /**
                    * Set the value of etat
                    *
                    * @return  self
                    */ 
                   public function setEtat($etat)
                   {
                    $this->etat = $etat;
               
                       return $this;
                   }
                    /**
                    * Set the value of place
                    *
                    * @return  self
                    */ 
                   public function setPlace($place)
                   {
                    $this->place = $place;
               
                       return $this;
                   }
                    /**
                    * Set the value of cout
                    *
                    * @return  self
                    */ 
                   public function setCout($cout)
                   {
                    $this->cout = $cout;
               
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
}
