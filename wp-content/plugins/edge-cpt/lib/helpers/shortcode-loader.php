<?php
namespace CozyEdge\Modules\Shortcodes\Lib;

use CozyEdge\Modules\Shortcodes\Accordion\Accordion;
use CozyEdge\Modules\Shortcodes\AccordionTab\AccordionTab;
use CozyEdge\Modules\Shortcodes\AnimationsHolder\AnimationsHolder;
use CozyEdge\Modules\Shortcodes\Banner\Banner;
use CozyEdge\Modules\Shortcodes\Blockquote\Blockquote;
use CozyEdge\Modules\Shortcodes\BlogList\BlogList;
use CozyEdge\Modules\Shortcodes\BlogSlider\BlogSlider;
use CozyEdge\Modules\Shortcodes\Button\Button;
use CozyEdge\Modules\Shortcodes\CallToAction\CallToAction;
use CozyEdge\Modules\Shortcodes\Counter\Countdown;
use CozyEdge\Modules\Shortcodes\Counter\Counter;
use CozyEdge\Modules\Shortcodes\CustomFont\CustomFont;
use CozyEdge\Modules\Shortcodes\Dropcaps\Dropcaps;
use CozyEdge\Modules\Shortcodes\ElementsHolder\ElementsHolder;
use CozyEdge\Modules\Shortcodes\ElementsHolderItem\ElementsHolderItem;
use CozyEdge\Modules\Shortcodes\GoogleMap\GoogleMap;
use CozyEdge\Modules\Shortcodes\Highlight\Highlight;
use CozyEdge\Modules\Shortcodes\Icon\Icon;
use CozyEdge\Modules\Shortcodes\IconListItem\IconListItem;
use CozyEdge\Modules\Shortcodes\IconWithText\IconWithText;
use CozyEdge\Modules\Shortcodes\ImageGallery\ImageGallery;
use CozyEdge\Modules\Shortcodes\ImageWithText\ImageWithText;
use CozyEdge\Modules\Shortcodes\ItemShowcase\ItemShowcase;
use CozyEdge\Modules\Shortcodes\ItemShowcaseListItem\ItemShowcaseListItem;
use CozyEdge\Modules\Shortcodes\Message\Message;
use CozyEdge\Modules\Shortcodes\OrderedList\OrderedList;
use CozyEdge\Modules\Shortcodes\PieCharts\PieChartBasic\PieChartBasic;
use CozyEdge\Modules\Shortcodes\PieCharts\PieChartDoughnut\PieChartDoughnut;
use CozyEdge\Modules\Shortcodes\PieCharts\PieChartDoughnut\PieChartPie;
use CozyEdge\Modules\Shortcodes\PieCharts\PieChartWithIcon\PieChartWithIcon;
use CozyEdge\Modules\Shortcodes\PricingTables\PricingTables;
use CozyEdge\Modules\Shortcodes\PricingTable\PricingTable;
use CozyEdge\Modules\Shortcodes\Process\ProcessHolder;
use CozyEdge\Modules\Shortcodes\Process\ProcessItem;
use CozyEdge\Modules\Shortcodes\ProgressBar\ProgressBar;
use CozyEdge\Modules\Shortcodes\ProjectPresentation\ProjectPresentation;
use CozyEdge\Modules\Shortcodes\Separator\Separator;
use CozyEdge\Modules\Shortcodes\ShopMasonry\ShopMasonry;
use CozyEdge\Modules\Shortcodes\SocialShare\SocialShare;
use CozyEdge\Modules\Shortcodes\Tabs\Tabs;
use CozyEdge\Modules\Shortcodes\Tab\Tab;
use CozyEdge\Modules\Shortcodes\Team\Team;
use CozyEdge\Modules\Shortcodes\TitleWithNumber\TitleWithNumber;
use CozyEdge\Modules\Shortcodes\UnorderedList\UnorderedList;
use CozyEdge\Modules\Shortcodes\VideoButton\VideoButton;

/**
 * Class ShortcodeLoader
 */
class ShortcodeLoader {
    /**
     * @var private instance of current class
     */
    private static $instance;
    /**
     * @var array
     */
    private $loadedShortcodes = array();

    /**
     * Private constuct because of Singletone
     */
    private function __construct() {}

    /**
     * Private sleep because of Singletone
     */
    private function __wakeup() {}

    /**
     * Private clone because of Singletone
     */
    private function __clone() {}

    /**
     * Returns current instance of class
     * @return ShortcodeLoader
     */
    public static function getInstance() {
        if(self::$instance == null) {
            return new self;
        }

        return self::$instance;
    }

    /**
     * Adds new shortcode. Object that it takes must implement ShortcodeInterface
     * @param ShortcodeInterface $shortcode
     */
    private function addShortcode(ShortcodeInterface $shortcode) {
        if(!array_key_exists($shortcode->getBase(), $this->loadedShortcodes)) {
            $this->loadedShortcodes[$shortcode->getBase()] = $shortcode;
        }
    }

    /**
     * Adds all shortcodes.
     *
     * @see ShortcodeLoader::addShortcode()
     */
    private function addShortcodes() {
        $this->addShortcode(new Accordion());
        $this->addShortcode(new AccordionTab());
        $this->addShortcode(new AnimationsHolder());
        $this->addShortcode(new Blockquote());
        $this->addShortcode(new BlogList());
        $this->addShortcode(new BlogSlider());
        $this->addShortcode(new Button());
        $this->addShortcode(new CallToAction());
        $this->addShortcode(new Counter());
        $this->addShortcode(new Countdown());
        $this->addShortcode(new CustomFont());
        $this->addShortcode(new Dropcaps());
        $this->addShortcode(new ElementsHolder());
        $this->addShortcode(new ElementsHolderItem());
        $this->addShortcode(new GoogleMap());
        $this->addShortcode(new Highlight());
        $this->addShortcode(new Icon());
        $this->addShortcode(new IconListItem());
        $this->addShortcode(new IconWithText());
        $this->addShortcode(new ImageGallery());
        $this->addShortcode(new ImageWithText());
        $this->addShortcode(new ItemShowcase());
        $this->addShortcode(new ItemShowcaseListItem());
        $this->addShortcode(new Message());
        $this->addShortcode(new OrderedList());
        $this->addShortcode(new PieChartBasic());
        $this->addShortcode(new PieChartPie());
        $this->addShortcode(new PieChartDoughnut());
        $this->addShortcode(new PieChartWithIcon());
        $this->addShortcode(new PricingTables());
        $this->addShortcode(new PricingTable());
        $this->addShortcode(new ProgressBar());
        $this->addShortcode(new ProcessHolder());
        $this->addShortcode(new ProcessItem());
        $this->addShortcode(new Separator());
        $this->addShortcode(new SocialShare());
        $this->addShortcode(new Tabs());
        $this->addShortcode(new Tab());
        $this->addShortcode(new Team());
        $this->addShortcode(new TitleWithNumber());
        $this->addShortcode(new UnorderedList());
        $this->addShortcode(new VideoButton());
        $this->addShortcode(new ShopMasonry());
        $this->addShortcode(new Banner());
        $this->addShortcode(new ProjectPresentation());
    }
    /**
     * Calls ShortcodeLoader::addShortcodes and than loops through added shortcodes and calls render method
     * of each shortcode object
     */
    public function load() {
        $this->addShortcodes();

        foreach ($this->loadedShortcodes as $shortcode) {
            add_shortcode($shortcode->getBase(), array($shortcode, 'render'));
        }
    }
}

$shortcodeLoader = ShortcodeLoader::getInstance();
$shortcodeLoader->load();