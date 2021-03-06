<?php
namespace Kunstmaan\AdminListBundle\Tests\AdminList\ItemAction;

use stdClass;

use Kunstmaan\AdminListBundle\AdminList\ItemAction\SimpleItemAction;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-26 at 13:21:34.
 */
class SimpleItemActionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\ItemAction\SimpleItemAction::__construct
     * @covers Kunstmaan\AdminListBundle\AdminList\ItemAction\SimpleItemAction::getUrlFor
     * @covers Kunstmaan\AdminListBundle\AdminList\ItemAction\SimpleItemAction::getIconFor
     * @covers Kunstmaan\AdminListBundle\AdminList\ItemAction\SimpleItemAction::getLabelFor
     * @covers Kunstmaan\AdminListBundle\AdminList\ItemAction\SimpleItemAction::getTemplate
     *
     * @return null
     */
    public function test__construct()
    {
        /** @noinspection PhpUnusedParameterInspection */
        $object = new SimpleItemAction(function($item) {
            return 'http://www.domain.com/action';
        }, 'icon.png', 'Label', 'template.html.twig');

        $item = new stdClass();
        $this->assertEquals('http://www.domain.com/action', $object->getUrlFor($item));
        $this->assertEquals('icon.png', $object->getIconFor($item));
        $this->assertEquals('Label', $object->getLabelFor($item));
        $this->assertEquals('template.html.twig', $object->getTemplate());

        return null;
    }
}
