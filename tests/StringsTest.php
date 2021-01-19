<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.types.string.php
     */
    public function testVariableParsing()
    {
        $foo = 'world';

        // Double quotes.
        $this->assertEquals('Hello world', "Hello $foo");

        // Single quotes.
        $this->assertEquals('Hello $foo', 'Hello $foo');

        // TODO "Hello ${foo}"
        $this->assertEquals('Hello world', "Hello ${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals('Hello world', "Hello " . $foo);

        // TODO Heredoc
        $str = <<<EOT
        Hello $foo
        EOT;
        $this->assertEquals('Hello world', $str);


        // TODO Nowdoc
        $str = <<<'EOT'
        Hello $foo
        EOT;
        $this->assertEquals('Hello $foo', $str);

    }

    /**
     * @see https://www.php.net/manual/en/ref.strings.php
     */
    public function testStringFunctions()
    {
        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $this->assertEquals('Hello', trim('  Hello         '));
        $this->assertEquals('Hello', trim('Hello......', '.'));

        // ltrim — Strip whitespace (or other characters) from the beginning of a string
        // TODO to be implemented
        $this->assertEquals('Hello  ', ltrim('  Hello  '));

        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented
        $this->assertEquals('  Hello', rtrim('  Hello  '));

        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented
        $this->assertEquals('Hello', ucfirst('hello'));

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented
        $this->assertEquals('hello', lcfirst('Hello'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $this->assertEquals('Hello', strip_tags('<h1>Hello</h1>'));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented
        $this->assertEquals('&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;', htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES));


        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals("Is your name O\'Reilly?", addslashes("Is your name O'Reilly?"));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals(true, strcmp('Hello', 'hello') < 0);

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented
        $this->assertEquals(true, strncasecmp('Hello', 'hello', 1) == 0);

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $this->assertEquals('Hello John', str_replace('world', 'John', 'Hello world'));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals(6, strpos('Hello world', 'world'));

        // strstr — Find the first occurrence of a string
        // TODO to be implemented
        $this->assertEquals('world', strstr('Hello world', 'w'));

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented
        $this->assertEquals('orld', strrchr('Hello world', 'o'));

        // substr — Return part of a string
        // TODO to be implemented
        $this->assertEquals('orld', strrchr('Hello world', 'o'));

        // sprintf — Return a formatted string
        // TODO to be implemented
        $num = 5;
        $location = 'tree';

        $format = 'There are %d monkeys in the %s';
        echo sprintf($format, $num, $location);
        $this->assertEquals('There are 5 monkeys in the tree', sprintf($format, $num, $location));
    }
}