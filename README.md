# enum
Enum PHP implementation

### Usage

 - implementation Enum class
```php
<?php declare(strict_types = 1);

use Maisner\Enum\AbstractEnum;

class TypeEnum extends AbstractEnum {

	public const TEMPERATURE = 'temperature';

	public const HUMIDITY = 'humidity';

	/**
	 * @return array|string[]
	 */
	protected static function allowedValues(): array {
		return [
			self::TEMPERATURE,
			self::HUMIDITY
		];
	}

	/**
	 * @return TypeEnum
	 */
	public static function TEMPERATURE(): self {
		return new self(self::TEMPERATURE);
	}

	/**
	 * @return TypeEnum
	 */
	public static function HUMIDITY(): self {
		return new self(self::HUMIDITY);
	}
}
```
 - and usage

```php
$type = new TypeEnum::TEMPERATURE();

$type->getValue();	//temperature
(string)$type;		//temperature
```