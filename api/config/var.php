<?php
        //Pour la connexion à la base de donnée
        $this->config["host"] = 'localhost';
        $this->config["db_name"] = 'dromadaire';
        $this->config["username"] = 'root';
        $this->config["password_"] = '';
// $this->config["tables"] = ['actions','candidat','equipe','file_jointe','files','forum','inscription','jury_projet','module','module_role','note','note_hackaton','pays','projet','region','roles','type_agent','users',];

// $this->config['tables']['actions'] = ['id','name','description','action_url','module',];

// $this->config['tables']['actions']['id'] = ['id'];

// $this->config['tables']['candidat'] = ['id_candidat','nom_candidat','prenom_candidat','email','telephone','date_naissance','role','equipe',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];

// $this->config['tables']['equipe'] = ['id_equipe','nom_equipe','region','pays','password_equipe','user',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];

// $this->config['tables']['file_jointe'] = ['id_fileJointe','file','lien','candidat','coach','equipe',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];

// $this->config['tables']['files'] = ['id','file_name','file_url','file_type','file_size',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];

// $this->config['tables']['forum'] = ['id_forum','message','date','candidat','coach',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];

// $this->config['tables']['inscription'] = ['id_inscription','etat',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];

// $this->config['tables']['jury_projet'] = ['id_jury_projet','jury','projet','created_by','created_at',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];

// $this->config['tables']['module'] = ['id','name','icon','description','action_url','sub_module',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];$this->config['tables']['module']['id'] = ['id'];

// $this->config['tables']['module_role'] = ['id','role_id','module',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];

// $this->config['tables']['note'] = ['id_note','faisabilite','apport','originalite','viabilite','total','projet','created_by','created_at','update_by','update_at',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['note']['id'] = ['id_note'];

// $this->config['tables']['note_hackaton'] = ['id_note','pitch','pertinance','faisabilite','apport','originalite','viabilite','total','projet','created_by','created_at','update_by','update_at',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['note']['id'] = ['id_note'];$this->config['tables']['note_hackaton']['id'] = ['id_note'];

// $this->config['tables']['pays'] = ['id_pays','nom_pays',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['note']['id'] = ['id_note'];$this->config['tables']['note_hackaton']['id'] = ['id_note'];$this->config['tables']['pays']['id'] = ['id_pays'];

// $this->config['tables']['projet'] = ['id_projet','nom_projet','domaine','file','description','solution','statut','date_post','besoin_tech','etat_retenu','moyen','is_hackaton','hackatons','equipe','user',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['note']['id'] = ['id_note'];$this->config['tables']['note_hackaton']['id'] = ['id_note'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['projet']['id'] = ['id_projet'];

// $this->config['tables']['region'] = ['id_region','nom_region',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['note']['id'] = ['id_note'];$this->config['tables']['note_hackaton']['id'] = ['id_note'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['projet']['id'] = ['id_projet'];$this->config['tables']['region']['id'] = ['id_region'];

// $this->config['tables']['roles'] = ['id','name','description',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['note']['id'] = ['id_note'];$this->config['tables']['note_hackaton']['id'] = ['id_note'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['projet']['id'] = ['id_projet'];$this->config['tables']['region']['id'] = ['id_region'];$this->config['tables']['roles']['id'] = ['id'];

// $this->config['tables']['type_agent'] = ['id','label',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['note']['id'] = ['id_note'];$this->config['tables']['note_hackaton']['id'] = ['id_note'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['projet']['id'] = ['id_projet'];$this->config['tables']['region']['id'] = ['id_region'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];

// $this->config['tables']['users'] = ['id','first_name','last_name','matricule','phone_number','email','type_agent','created_at','updated_at','photo','role','status','domaine','region','pays','password_','profil',];

// $this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['candidat']['id'] = ['id_candidat'];$this->config['tables']['equipe']['id'] = ['id_equipe'];$this->config['tables']['file_jointe']['id'] = ['id_fileJointe'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['forum']['id'] = ['id_forum'];$this->config['tables']['inscription']['id'] = ['id_inscription'];$this->config['tables']['jury_projet']['id'] = ['id_jury_projet'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['note']['id'] = ['id_note'];$this->config['tables']['note_hackaton']['id'] = ['id_note'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['projet']['id'] = ['id_projet'];$this->config['tables']['region']['id'] = ['id_region'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];
