<?php

namespace Tests\Unit\XoopsModules\Xlanguage;

use PHPUnit\Framework\TestCase;
use XoopsModules\Xlanguage\Blanguage;

/**
 * Class BlanguageTest.
 *
 * @covers \XoopsModules\Xlanguage\Blanguage
 */
final class BlanguageTest extends TestCase
{
    private Blanguage $blanguage;

    private bool $isBase;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->isBase = true;
        $this->blanguage = new Blanguage($this->isBase);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->blanguage);
        unset($this->isBase);
    }

    public function testPrepareVars(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testSetBase(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testHasBase(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}
