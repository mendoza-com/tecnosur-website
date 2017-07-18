<?php

include EDGE_FRAMEWORK_ROOT_DIR."/lib/edgt.icons/edgt.iconcollection.interface.php";
include EDGE_FRAMEWORK_ROOT_DIR."/lib/edgt.icons/edgt.fontawesome.php";
include EDGE_FRAMEWORK_ROOT_DIR."/lib/edgt.icons/edgt.fontelegant.php";
include EDGE_FRAMEWORK_ROOT_DIR."/lib/edgt.icons/edgt.ionicons.php";
include EDGE_FRAMEWORK_ROOT_DIR."/lib/edgt.icons/edgt.lineaicons.php";
include EDGE_FRAMEWORK_ROOT_DIR."/lib/edgt.icons/edgt.simplelineicons.php";
include EDGE_FRAMEWORK_ROOT_DIR."/lib/edgt.icons/edgt.dripicons.php";
include EDGE_FRAMEWORK_ROOT_DIR."/lib/edgt.icons/edgt.icomoon.php";
include EDGE_FRAMEWORK_ROOT_DIR."/lib/edgt.icons/edgt.linearicons.php";

/*
  Class: CozyEdgeIconCollections
  A class that initializes Edge Icon Collections
 */

class CozyEdgeIconCollections {

    private static $instance;
    public $iconCollections;
    public $VCParamsArray;
    public $iconPackParamName;

    private function __construct() {
        $this->iconPackParamName = 'icon_pack';
        $this->initIconCollections();
    }

    public static function get_instance() {

        if(null == self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * Method that adds individual collections to set of collections
     */
    private function initIconCollections() {
        $this->addIconCollection('font_awesome', new CozyEdgeIconsFontAwesome("Font Awesome", "fa_icon"));
        $this->addIconCollection('font_elegant', new CozyEdgeIconsFontElegant("Font Elegant", "fe_icon"));
		$this->addIconCollection('ico_moon', new CozyEdgeIcoMoonIcons('Ico Moon', 'ico_moon'));
        $this->addIconCollection('ion_icons', new CozyEdgeIonIcons("Ion Icons", "ion_icon"));
        $this->addIconCollection('linea_icons', new CozyEdgeLineaIcons('Linea Icons', 'linea_icon'));
		$this->addIconCollection('linear_icons', new CozyEdgeLinearIcons('Linear Icons', 'linear_icons'));
        $this->addIconCollection('simple_line_icons', new CozyEdgeSimpleLineIcons('Simple Line Icons', 'simple_line_icons'));
        $this->addIconCollection('dripicons', new CozyEdgeDripicons('Dripicons', 'dripicon'));

    }

    public function getVCParamsArray($iconPackDependency = array(), $iconCollectionPrefix = "", $emptyIconPack = false) {
        if($emptyIconPack) {
            $iconCollectionsVC = $this->getIconCollectionsVCEmpty();
        } else {
            $iconCollectionsVC = $this->getIconCollectionsVC();
        }

        $iconPackParams = array(
            'type'        => 'dropdown',
            'heading'     => esc_html__('Icon pack', 'cozy'),
            'param_name'  => $this->iconPackParamName,
            'value'       => $iconCollectionsVC,
            'save_always' => true
        );

        if($iconPackDependency !== "") {
            $iconPackParams["dependency"] = $iconPackDependency;
        }

        $iconPackParams = array($iconPackParams);

        $iconSetParams = array();
        if(is_array($this->iconCollections) && count($this->iconCollections)) {
            foreach($this->iconCollections as $key => $collection) {
                $iconSetParams[] = array(
                    'type'        => 'dropdown',
                    'heading'     => esc_html__('Icon', 'cozy'),
                    'param_name'  => $iconCollectionPrefix.$collection->param,
                    'value'       => $collection->getIconsArray(),
                    'dependency'  => array('element' => $this->iconPackParamName, 'value' => array($key)),
                    'save_always' => true
                );
            }
        }

        return array_merge($iconPackParams, $iconSetParams);
    }

    public function getSocialVCParamsArray($iconPackDependency = array(), $iconCollectionPrefix = "", $emptyIconPack = false, $exclude = '') {
        if($emptyIconPack) {
            $iconCollectionsVC = $this->getIconCollectionsVCEmptyExclude($exclude);
        } else {
            $iconCollectionsVC = $this->getIconCollectionsVCExclude($exclude);
        }


        $iconPackParams = array(
            'type'        => 'dropdown',
            'heading'     => esc_html__('Icon pack', 'cozy'),
            'param_name'  => $this->iconPackParamName,
            'value'       => $iconCollectionsVC,
            'save_always' => true
        );

        if($iconPackDependency !== "") {
            $iconPackParams["dependency"] = $iconPackDependency;
        }

        $iconPackParams = array($iconPackParams);

        $iconCollections = $this->iconCollections;
        if(is_array($exclude) && count($exclude)) {
            foreach($exclude as $exclude_key) {
                if(array_key_exists($exclude_key, $this->iconCollections)) {

                    unset($iconCollections[$exclude_key]);
                }
            }

        } else {
            if(array_key_exists($exclude, $this->iconCollections)) {
                unset($iconCollections[$exclude]);
            }
        }

        $iconSetParams = array();
        if(is_array($iconCollections) && count($iconCollections)) {
            foreach($iconCollections as $key => $collection) {
                $iconSetParams[] = array(
                    'type'        => 'dropdown',
                    'class'       => '',
                    'heading'     => esc_html__('Icon', 'cozy'),
                    'param_name'  => $iconCollectionPrefix.$collection->param,
                    'value'       => $collection->getSocialIconsArrayVC(),
                    'dependency'  => array('element' => $this->iconPackParamName, 'value' => array($key)),
                    'save_always' => true
                );
            }
        }

        return array_merge($iconPackParams, $iconSetParams);
    }

    public function getSocialIconWidgetParamsArray() {

        $iconCollectionsVC = $this->getCollectionsWithSocialIcons();

		$iconCollectionsType = array();
		foreach($this->iconCollections as $key => $collection) {
			if($collection->hasSocialIcons()) {
				$iconCollectionsType[$key] = $collection->title;
			}
		}

        $iconPackParams[] = array(
            'type'    => 'dropdown',
            'title'   => esc_html__('Icon pack', 'cozy'),
            'name'    => 'icon_pack',
            'options' => $iconCollectionsType
        );

        $iconSetParams = array();
        if(is_array($iconCollectionsVC) && count($iconCollectionsVC)) {
            foreach($iconCollectionsVC as $key => $collection) {
                $iconSetParams[] = array(
                    'type'    => 'dropdown',
                    'title'   => $collection->title.' Icon',
                    'name'    => $collection->param,
                    'options' => array_flip($collection->getSocialIconsArrayVC())
                );
            }
        }

        return array_merge($iconPackParams, $iconSetParams);
    }

    public function getCollectionsWithSocialIcons() {
        $collectionsWithSocial = array();

        foreach($this->iconCollections as $key => $collection) {
            if($collection->hasSocialIcons()) {
                $collectionsWithSocial[$key] = $collection;
            }
        }

        return $collectionsWithSocial;

    }

    public function getIconSizesArray() {
        return array(
            esc_html__("Tiny", 'cozy')      => "fa-lg",
            esc_html__("Small",  'cozy')    => "fa-2x",
            esc_html__("Medium",  'cozy')   => "fa-3x",
            esc_html__("Large",   'cozy')   => "fa-4x",
            esc_html__("Very Large", 'cozy') => "fa-5x"
        );
    }

    public function getIconSizeClass($iconSize) {
        switch($iconSize) {
            case "fa-lg":
                $iconSize = "edgtf-tiny-icon";
                break;
            case "fa-2x":
                $iconSize = "edgtf-small-icon";
                break;
            case "fa-3x":
                $iconSize = "edgtf-medium-icon";
                break;
            case "fa-4x":
                $iconSize = "edgtf-large-icon";
                break;
            case "fa-5x":
                $iconSize = "edgtf-huge-icon";
                break;
            default:
                $iconSize = "edgtf-small-icon";
        }

        return $iconSize;
    }

    /**
     * @param $key
     *
     * @return bool
     */
    public function getIconCollectionParamNameByKey($key) {
        $collection = $this->getIconCollection($key);

        if($collection) {
            return $collection->param;
        }

        return false;
    }

    public function getShortcodeParams($iconCollectionPrefix = "") {
        $iconCollectionsParam = array();
        foreach($this->iconCollections as $key => $collection) {
            $iconCollectionsParam[$iconCollectionPrefix.$collection->param] = '';
        }

        return array_merge(array($this->iconPackParamName => '',), $iconCollectionsParam);
    }

    public function addIconCollection($key, $value) {
        $this->iconCollections[$key] = $value;
    }

    public function getIconCollection($key) {
        if(array_key_exists($key, $this->iconCollections)) {
            return $this->iconCollections[$key];
        }

        return false;

    }

    public function getIconCollectionIcons(iCozyEdgeIconCollection $collection) {
        return $collection->getIconsArray();
    }

    public function getIconCollectionsVC() {
        $vc_array = array();
        foreach($this->iconCollections as $key => $collection) {
            $vc_array[$collection->title] = $key;
        }

        return $vc_array;
    }

    public function getIconCollectionsVCExclude($exclude) {
        $array = $this->getIconCollectionsVC();

        if(is_array($exclude) && count($exclude)) {
            foreach($exclude as $key) {
                if(($x = array_search($key, $array)) !== false) {
                    unset($array[$x]);
                }
            }

        } else {
            if(($x = array_search($exclude, $array)) !== false) {
                unset($array[$x]);
            }
        }


        return $array;
    }

    public function getIconCollectionsKeys() {
        return array_keys($this->iconCollections);
    }

    /**
     * Method that returns an array of 'param' attribute of each icon collection
     * @return array array of param attributes
     */
    public function getIconCollectionsParams() {
        $paramArray = array();
        if(is_array($this->iconCollections) && count($this->iconCollections)) {
            foreach($this->iconCollections as $key => $obj) {
                $paramArray[] = $obj->param;
            }
        }

        return $paramArray;
    }

    public function getIconCollections() {
        $array = array();
        foreach($this->iconCollections as $key => $collection) {
            $array[$key] = $collection->title;
        }

        return $array;
    }

    public function getIconCollectionsEmpty($no_empty_key = "") {
        $array                = array();
        $array[$no_empty_key] = "No Icon";
        foreach($this->iconCollections as $key => $collection) {
            $array[$key] = $collection->title;
        }

        return $array;
    }

    public function getIconCollectionsVCEmpty() {
        $vc_array            = array();
        $vc_array["No Icon"] = "";
        foreach($this->iconCollections as $key => $collection) {
            $vc_array[$collection->title] = $key;
        }

        return $vc_array;
    }

    public function getIconCollectionsVCEmptyExclude($key) {
        $array = $this->getIconCollectionsVCEmpty();
        if(($x = array_search($key, $array)) !== false) {
            unset($array[$x]);
        }

        return $array;
    }

    public function getIconCollectionsExclude($exclude) {
        $array = $this->getIconCollections();

        if(is_array($exclude) && count($exclude)) {
            foreach($exclude as $exclude_key) {
                if(array_key_exists($exclude_key, $array)) {
                    unset($array[$exclude_key]);
                }
            }

        } else {
            if(array_key_exists($exclude, $array)) {
                unset($array[$exclude]);
            }
        }

        return $array;
    }

    public function hasIconCollection($key) {

        return array_key_exists($key, $this->iconCollections);

    }


    /**
     * Method that renders icon for given icon pack
     *
     * @param $icon icon to render
     * @param $iconPack icon pack to render icon from
     * @param $params parameters for icon
     *
     * @return mixed
     */
    public function renderIcon($icon, $iconPack, $params = array()) {
        if($this->hasIconCollection($iconPack)) {
            $iconObject = $this->getIconCollection($iconPack);
            return $iconObject->render($icon, $params);
        }
    }

    public function enqueueStyles() {
        if(is_array($this->iconCollections) && count($this->iconCollections)) {
            foreach($this->iconCollections as $collection_key => $collection_obj) {
                wp_enqueue_style('edgtf_'.$collection_key, $collection_obj->styleUrl);
            }
        }
    }

    # HEADER AND SIDE MENU ICONS
    public function getSearchIcon($iconPack, $return) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            if($return) {
                return $iconsObject->getSearchIcon();
            } else {
                print $iconsObject->getSearchIcon();
            }

        }

    }

    public function getSearchClose($iconPack, $return) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            if($return) {
                return $iconsObject->getSearchClose();
            } else {
                print $iconsObject->getSearchClose();
            }

        }

    }

    public function getSearchIconValue($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            print $iconsObject->getSearchIconValue();

        }

    }

    public function getMenuSideIcon($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            print $iconsObject->getMenuSideIcon();

        }

    }

    public function getBackToTopIcon($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            print $iconsObject->getBackToTopIcon();

        }


    }

    public function getMobileMenuIcon($iconPack, $return = false) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);

            if($return) {
                return $iconsObject->getMobileMenuIcon();
            } else {
                print $iconsObject->getMobileMenuIcon();
            }
        }

    }

    public function getQuoteIcon($iconPack, $return = false) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            if($return == true) {
                return $iconsObject->getQuoteIcon();
            } else {
                print $iconsObject->getQuoteIcon();
            }

        }

    }


    # SOCIAL SIDEBAR ICONS
    public function getFacebookIcon($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);

            return $iconsObject->getFacebookIcon();

        }

    }

    public function getTwitterIcon($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);

            return $iconsObject->getTwitterIcon();

        }

    }

    public function getGooglePlusIcon($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);

            return $iconsObject->getGooglePlusIcon();

        }

    }

    public function getLinkedInIcon($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);

            return $iconsObject->getLinkedInIcon();

        }

    }

    public function getTumblrIcon($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);

            return $iconsObject->getTumblrIcon();

        }

    }

    public function getPinterestIcon($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);

            return $iconsObject->getPinterestIcon();

        }

    }

    public function getVKIcon($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);

            return $iconsObject->getVKIcon();

        }

    }


}

global $cozy_edge_IconCollections;
$cozy_edge_IconCollections = CozyEdgeIconCollections::get_instance();