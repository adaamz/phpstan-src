<?php declare(strict_types = 1);

class HelloWorld
{
	/**
	 * @phpstan-template T of object
	 * @phpstan-param T $a
	 * @phpstan-param callable(T,T):void $x
	 */
	public function hi(object $a, callable $x) : void {
		$x(
			$a,
			$this->fcn(get_class($a))
		);
	}

	/**
	 * @phpstan-template T of object
	 * @phpstan-param class-string<T> $a
	 * @phpstan-return T
	 */
	private function fcn(string $a) : object { return new $a; }
}
