<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class WebSamplesController extends AppController {

    public function index() {
        $arrTemplates = array(
            0 => array(
                'template_1' => array(
                    'id' => 1,
                    'name' => 'Serenity a Real Estates',
                    'action' => 'serenity_real_states',
                    'title' => 'Serenity a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'serenity_real_estates.jpg',
                    'alt' => 'Template',
                ),
                'template_2' => array(
                    'id' => 2,
                    'name' => 'Luxury Homes a Real Estates',
                    'action' => 'luxury_homes_real_estates',
                    'title' => 'Luxury Home a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'luxury_homes_real_estates.jpg',
                    'alt' => 'Template',
                ),
                'template_3' => array(
                    'id' => 3,
                    'name' => 'Grand Villa a Real Estates',
                    'action' => 'grand_villa_real_estates',
                    'title' => 'Grand Villa a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'grand_villa_real_estates.jpg',
                    'alt' => 'Template',
                ),
                'template_4' => array(
                    'id' => 4,
                    'name' => 'Build Estates',
                    'action' => 'build_estate_real_estates',
                    'title' => 'Build Estates a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'veg.jpg',
                    'alt' => 'Template',
                ),
            ),
            1 => array(
                'template_1' => array(
                    'id' => 5,
                    'name' => 'Prefab a Real Estates',
                    'action' => 'prefab_real_estates',
                    'title' => 'Prefab a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'prefab_real_estates.jpg',
                    'alt' => 'Template',
                ),
                'template_2' => array(
                    'id' => 6,
                    'name' => 'Factual Villa a Real Estates',
                    'action' => 'factual_villa_real_estates',
                    'title' => 'Favtual Villa a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'factual_villa_real_estates.jpg',
                    'alt' => 'Template',
                ),
                'template_3' => array(
                    'id' => 7,
                    'name' => 'Grand Villa a Real Estates',
                    'action' => 'grand_villa_real_estates',
                    'title' => 'Grand Villa a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'grand_villa_real_estates.jpg',
                    'alt' => 'Template',
                ),
                'template_4' => array(
                    'id' => 8,
                    'name' => 'Build Estates',
                    'action' => 'build_estate_real_estates',
                    'title' => 'Build Estates a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'veg.jpg',
                    'alt' => 'Template',
                ),
            ),
        );
        $this->set('arrTemplates', $arrTemplates);
    }

    public function veg($page = null) {
        $activeMenu = $page == null ? 'index' : $page;
        $this->set('activeMenu', $activeMenu);
    }

    public function serenityRealStates($page = null) {
        $activeMenu = $page == null ? 'index' : $page;
        $this->set('activeMenu', $activeMenu);
    }

    public function luxuryHomesRealEstates($page = null) {
        $activeMenu = $page == null ? 'index' : $page;
        $activeBanner = $page == null ? 'banner' : "banner-2";
        $activeDivIndex = $page == null ? 'show-index' : "";
        $activeDivPage = $page == null ? '' : "show-page";
        $this->set('activeMenu', $activeMenu);
        $this->set('activeBanner', $activeBanner);
        $this->set('activeDivIndex', $activeDivIndex);
        $this->set('activeDivPage', $activeDivPage);
    }

    public function grandVillaRealEstates($page = null) {
        $activeMenu = $page == null ? 'index' : $page;
        $this->set('activeMenu', $activeMenu);
    }

    public function buildEstateRealEstates($page = null) {
        $activeMenu = $page == null ? 'index' : $page;
        $this->set('activeMenu', $activeMenu);
    }

    public function prefabRealEstates($page = null) {
        $activeMenu = $page == null ? 'index' : $page;
        $this->set('activeMenu', $activeMenu);
    }

    public function factualVillaRealEstates($page = null) {
        $activeMenu = $page == null ? 'index' : $page;
        $activeBanner = $page == null ? 'banner' : "banner-2";
        $activeDivHeader = $page == null ? 'show-index' : "show-page";
        $this->set('activeMenu', $activeMenu);
        $this->set('activeBanner', $activeBanner);
        $this->set('activeDivHeader', $activeDivHeader);
    }

}

?>