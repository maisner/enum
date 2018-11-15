<?php declare(strict_types = 1);

namespace Maisner\Enum\Tests;

use PHPUnit\Framework\TestCase;

class AbstractEnumTest extends TestCase {

	public function testExampleImplementation(): void {
		$exampleEnum = ExampleEnum::FIRST_VALUE();

		$this->assertInstanceOf(ExampleEnum::class, $exampleEnum);
		$this->assertSame(ExampleEnum::FIRST_VALUE, $exampleEnum->getValue());
	}

	public function testCreate(): void {
		$exampleEnum = new ExampleEnum(ExampleEnum::FIRST_VALUE);
		$this->assertSame($exampleEnum->getValue(), ExampleEnum::FIRST_VALUE);

		$exampleEnum = ExampleEnum::SECOND_VALUE();
		$this->assertSame($exampleEnum->getValue(), ExampleEnum::SECOND_VALUE);
	}

	public function testCreateNotAllowedValue(): void {
		$this->expectException(\Maisner\Enum\NotAllowedValueException::class);
		new ExampleEnum('not-allowed');
	}

	public function testGetValue(): void {
		$exampleEnum = ExampleEnum::SECOND_VALUE();
		$this->assertSame($exampleEnum->getValue(), ExampleEnum::SECOND_VALUE);
		$this->assertSame((string)$exampleEnum, ExampleEnum::SECOND_VALUE);
	}
}