<?php declare(strict_types = 1);

namespace Maisner\Enum\Tests;


use Maisner\Enum\AbstractEnum;

class ExampleEnum extends AbstractEnum {

	public const FIRST_VALUE = 'first_value';

	public const SECOND_VALUE = 'second_value';

	/**
	 * @return array|string[]
	 */
	protected static function allowedValues(): array {
		return [
			self::FIRST_VALUE,
			self::SECOND_VALUE
		];
	}

	/**
	 * @return ExampleEnum
	 */
	public static function FIRST_VALUE(): ExampleEnum {
		return new self(self::FIRST_VALUE);
	}

	/**
	 * @return ExampleEnum
	 */
	public static function SECOND_VALUE(): ExampleEnum {
		return new self(self::SECOND_VALUE);
	}
}