<?php

namespace Tests\Unit\XoopsModules\Xlanguage;

use PHPUnit\Framework\TestCase;
use XoopsModules\Xlanguage\LanguageHandler;

/**
 * Class LanguageHandlerTest.
 *
 * @covers \XoopsModules\Xlanguage\LanguageHandler
 */
final class LanguageHandlerTest extends TestCase
{
    private LanguageHandler $languageHandler;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->languageHandler = new LanguageHandler();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->languageHandler);
    }

    public function testLoadConfig(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testGet(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testGetByName(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testGetAll(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testGetAllList(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testCreate(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testInsert(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testDelete(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testGetXoopsLangList(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testCreateConfig(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testLoadFileConfig(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}
