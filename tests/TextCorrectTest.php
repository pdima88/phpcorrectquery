<?php

declare(strict_types=1);

namespace pdima88\phpcorrectquery\tests;

use PHPUnit\Framework\TestCase;
use pdima88\phpcorrectquery\TextCorrect;

/**
 * @covers \Text\LangCorrect
 */
class TextCorrectTest extends TestCase
{
    /**
     * @test
     * @dataProvider replaces()
     *
     * @param string $incorrect
     * @param string $expected
     * @param int    $mode
     */
    public function it_should_work(string $incorrect, string $expected, int $mode = TextCorrect::KEYBOARD_LAYOUT)
    {
        $lang = new TextCorrect();
        $result = $lang->parse($incorrect, TextCorrect::KEYBOARD_LAYOUT);

        self::assertEquals($expected, $result);
    }

    public function replaces()
    {
        return [
            ['ghbdtn', 'привет'],
            ['руддщ', 'hello'],
            [';tycrbq h.rpfr', 'женский рюкзак'],
        ];
    }
}
