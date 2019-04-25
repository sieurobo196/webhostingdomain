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
                    'name' => 'Apartment a Real Estates',
                    'action' => 'apartment_real_estates',
                    'title' => 'Apartment a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'apartment_real_estates.jpg',
                    'alt' => 'Template',
                ),
                'template_4' => array(
                    'id' => 8,
                    'name' => 'Assets A Real Estates',
                    'action' => 'assets_real_estates',
                    'title' => 'Assets a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'assets_real_estates.jpg',
                    'alt' => 'Template',
                ),
            ),
            2 => array(
                'template_1' => array(
                    'id' => 5,
                    'name' => 'Manor a Real Estates',
                    'action' => 'manor_real_estates',
                    'title' => 'Manor a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'manor_real_estates.jpg',
                    'alt' => 'Template',
                ),
                'template_2' => array(
                    'id' => 6,
                    'name' => 'Pro Property a Real Estates',
                    'action' => 'pro_property_real_estates',
                    'title' => 'Pro Property a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'pro_property_real_estates.jpg',
                    'alt' => 'Template',
                ),
                'template_3' => array(
                    'id' => 7,
                    'name' => 'Real Homes a Real Estates',
                    'action' => 'real_homes_real_estates',
                    'title' => 'Real Homes a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'real_homes_real_estates.jpg',
                    'alt' => 'Template',
                ),
                'template_4' => array(
                    'id' => 8,
                    'name' => 'Township a Real Estates',
                    'action' => 'township_real_estates',
                    'title' => 'Township a Real Estates Category Bootstrap Responsive Web Template',
                    'image' => 'township_real_estates.jpg',
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
        $titleMenu = '';
        if ($page == 'about') {
            $titleMenu = "About Us";
        } else if ($page == 'codes') {
            $titleMenu = "Short Codes";
        } else if ($page == 'contact') {
            $titleMenu = "Mail Us";
        } else if ($page == 'gallery') {
            $titleMenu = "Gallery";
        } else if ($page == "icons") {
            $titleMenu = "Icons";
        }
        $this->set("titleMenu", $titleMenu);
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
        $activeDivPage = $page == null ? '' : "show-page";
        $activeDivIndex = $page == null ? 'show-index' : "";
        $this->set('activeDivPage', $activeDivPage);
        $this->set('activeDivIndex', $activeDivIndex);
    }

    public function factualVillaRealEstates($page = null) {
        $activeMenu = $page == null ? 'index' : $page;
        $this->set('activeMenu', $activeMenu);
    }

    public function apartmentRealEstates($page = null) {
        $activeMenu = $page == null ? 'index' : $page;
        $this->set('activeMenu', $activeMenu);
    }

}

?>