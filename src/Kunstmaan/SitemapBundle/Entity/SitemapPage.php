<?php

namespace Kunstmaan\SitemapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\SitemapBundle\Helper\HiddenFromSitemap;

/**
 * ContentPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="kuma_sitemap_pages")
 */
class SitemapPage extends AbstractPage implements HiddenFromSitemap
{
    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array();
    }

    /**
     * return string
     */
    public function getDefaultView()
    {
        return "KunstmaanSitemapBundle:SitemapPage:view.html.twig";
    }

    /**
     * Returns true when the page is to be hidden from the generated sitemap
     *
     * @return bool
     */
    public function isHiddenFromSitemap()
    {
        return true;
    }

    /**
     * Returns true when the page's children should be hidden from the generated sitemap
     *
     * @return bool
     */
    public function isChildrenHiddenFromSitemap()
    {
        return true;
    }
}