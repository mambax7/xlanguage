<?php

namespace Tests\Unit\XoopsModules\Xlanguage;

use PHPUnit\Framework\TestCase;
use XoopsModules\Xlanguage\Utility;

/**
 * Class UtilityTest.
 *
 * @covers \XoopsModules\Xlanguage\Utility
 */
final class UtilityTest extends TestCase
{
    private Utility $utility;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->utility = new Utility();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->utility);
    }

    public function testConvertEncoding(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testConvertItem(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testCreateConfig(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testLoadConfig(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testLangDetect(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testDetectLang(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testEncodeCharSet(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testCleanMultiLang(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testEscapeBracketMultiLang(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testShowSelectedLanguage(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testGetPreferredLanguage(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}
