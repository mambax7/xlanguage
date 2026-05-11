<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use XlanguageCorePreload;

/**
 * Class XlanguageCorePreloadTest.
 *
 * @copyright XOOPS Project (https://xoops.org)
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @author trabis <lusopoemas@gmail.com>
 *
 * @covers \XlanguageCorePreload
 */
final class XlanguageCorePreloadTest extends TestCase
{
    private XlanguageCorePreload $xlanguageCorePreload;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->xlanguageCorePreload = new XlanguageCorePreload();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->xlanguageCorePreload);
    }

    public function testEventCoreIncludeCommonLanguage(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testEventCoreIncludeCommonEnd(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}
