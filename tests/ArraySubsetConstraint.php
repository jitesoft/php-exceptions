<?php
declare(strict_types=1);

// This class have been copied from https://github.com/rdohms/phpunit-arraysubset-asserts
// which in turn have been copied from the original version by https://github.com/marcioAlmada contained
// in earlier versions of PHPunit.

namespace Jitesoft\Exceptions\Tests;

use ArrayObject;
use PHPUnit\Framework\Constraint\Constraint;
use SebastianBergmann\Comparator\ComparisonFailure;
use Traversable;

final class ArraySubsetConstraint extends Constraint {
    private iterable $subset;
    private bool $strict;

    public function __construct(iterable $subset, bool $strict = false) {
        $this->strict = $strict;
        $this->subset = $subset;
    }

    public function evaluate($other, string $description = '', bool $returnResult = false): ?bool {
        $other        = $this->toArray($other);
        $this->subset = $this->toArray($this->subset);
        $patched      = array_replace_recursive($other, $this->subset);
        if ($this->strict) {
            $result = $other === $patched;
        } else {
            /** @noinspection TypeUnsafeComparisonInspection */
            $result = $other == $patched;
        }
        if ($returnResult) {
            return $result;
        }
        if ($result) {
            return null;
        }

        $f = new ComparisonFailure(
            $patched,
            $other,
            var_export($patched, true),
            var_export($other, true)
        );
        $this->fail($other, $description, $f);

        return null;
    }

    public function toString(): string {
        return 'has the subset ' . $this->exporter()->export($this->subset);
    }


    protected function failureDescription($other): string {
        return 'an array ' . $this->toString();
    }

    private function toArray(iterable $other): array {
        if (is_array($other)) {
            return $other;
        }
        if ($other instanceof ArrayObject) {
            return $other->getArrayCopy();
        }
        if ($other instanceof Traversable) {
            return iterator_to_array($other);
        }
        return (array) $other;
    }
}
