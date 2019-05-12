<?php

namespace PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerializeFactory;

use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerialize\ObjectToSerializeInterface;

interface ObjectToSerializeFactoryInterface
{
    /** @return ObjectToSerializeInterface */
    public function create();
}
