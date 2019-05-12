<?php

namespace PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerializeFactory;

use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerialize\ObjectToSerialize;
use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerialize\ObjectToSerializeInterface;

class ObjectToSerializeFactory implements ObjectToSerializeFactoryInterface
{
    /** @return ObjectToSerializeInterface */
    public function create()
    {
        return new ObjectToSerialize();
    }
}
