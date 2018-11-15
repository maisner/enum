<?php declare(strict_types = 1);

namespace Maisner\Enum;

/**
 * Class AbstractEnum
 * @package Maisner\Enum
 */
abstract class AbstractEnum {

	/** @var array|string[] */
	protected const ALLOWED_VALUES = [];

	/** @var string */
	protected $value;

	/**
	 * AbstractEnum constructor.
	 * @param string $value
	 */
	public function __construct(string $value) {
		if (!$this->checkValue($value)) {
			$message = \sprintf(
				'Value "%s" is not allowed. Allowed values [%s]',
				$value,
				\implode(', ', $this::allowedValues())
			);

			throw new \Maisner\Enum\NotAllowedValueException($message);
		}
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getValue(): string {
		return $this->value;
	}

	/**
	 * @return string
	 */
	public function __toString(): string {
		return $this->getValue();
	}

	/**
	 * @param string $value
	 * @return bool
	 */
	protected function checkValue(string $value): bool {
		return \in_array($value, $this::allowedValues(), TRUE);
	}

	/**
	 * @return array|string[]
	 */
	abstract protected static function allowedValues(): array;
}