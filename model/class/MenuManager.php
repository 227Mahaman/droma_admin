<?php

class MenuManager {
    
    public $mName;
    public $mSousMenu;

    public function __construct($mName) {
        $this->mName = $mName;
        
    }

    public function getmName()
    {
        return $this->mName;
    }

    public function getmSousMenu()
    {
        return $this->mSousMenu;
    }

    public function getMenu($icon= 'fa-dashboard')
    {
        if ($icon=='') {
            $icon = 'fa-dashboard';
        }
        return '
            <li class="treeview">
            <a href="#">
              <i class="fa '.$icon.'"></i> <span>'. $this->mName .'</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                '. $this->mSousMenu.'
            </ul>
          </li>
        ';
    }

    public function setmSousMenu($mSousMenu= [])
    {
        foreach ($mSousMenu as $key => $value) {
            $this->mSousMenu .= '<li><a href="'.$key.'"><i class="fa fa-circle-o"></i>' . $value . '</a></li>';
        }
    }

    public function setmName($mName)
    {
        $this->mName = $mName;
    }
    

}
