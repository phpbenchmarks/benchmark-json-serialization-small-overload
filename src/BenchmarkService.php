<?php

namespace PhpBenchmarks\BenchmarkJsonSerializationSmallOverload;

use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerializeFactory\ObjectToSerializeFactory;
use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerializeFactory\ObjectToSerializeFactoryInterface;

class BenchmarkService
{
    /** @var ObjectToSerializeFactoryInterface */
    protected $objectFactory;

    public function __construct(ObjectToSerializeFactoryInterface $objectFactory = null)
    {
        if ($objectFactory === null) {
            $objectFactory = new ObjectToSerializeFactory();
        }
        $this->objectFactory = $objectFactory;
    }

    /** @return array */
    public function getDataToSerialize()
    {
        $data = [
            'int1' => 1,
            'int2' => 2,
            'int3' => 3,
            'int4' => 4,
            'int5' => 5,
            'int6' => 6,
            'int7' => 7,
            'int8' => 8,
            'int9' => 9,
            'int10' => 10,
            'float1' => 1.01,
            'float2' => 2.01,
            'float3' => 3.01,
            'float4' => 4.01,
            'float5' => 5.01,
            'float6' => 6.01,
            'float7' => 7.01,
            'float8' => 8.01,
            'float9' => 9.01,
            'float10' => 10.01,
            'string1' => 'phpbenchmarks1',
            'string2' => 'phpbenchmarks2',
            'string3' => 'phpbenchmarks3',
            'string4' => 'phpbenchmarks4',
            'string5' => 'phpbenchmarks5',
            'string6' => 'phpbenchmarks6',
            'string7' => 'phpbenchmarks7',
            'string8' => 'phpbenchmarks8',
            'string9' => 'phpbenchmarks9',
            'string10' => 'phpbenchmarks10',
            'boolean1' => true,
            'boolean2' => true,
            'boolean3' => true,
            'boolean4' => true,
            'boolean5' => true,
            'boolean6' => true,
            'boolean7' => true,
            'boolean8' => true,
            'boolean9' => true,
            'boolean10' => true,
            'null1' => null,
            'null2' => null,
            'null3' => null,
            'null4' => null,
            'null5' => null,
            'null6' => null,
            'null7' => null,
            'null8' => null,
            'null9' => null,
            'null10' => null,
        ];

        $return = [];
        $objectToSerialize = $this->objectFactory->create();
        for ($i = 0; $i < 100; $i++) {
            $return[] = array_merge(
                $data,
                [
                    'array1' => ['object' => $objectToSerialize],
                    'array2' => ['object' => $objectToSerialize],
                    'array3' => ['object' => $objectToSerialize],
                    'array4' => ['object' => $objectToSerialize],
                    'array5' => ['object' => $objectToSerialize],
                    'array6' => ['object' => $objectToSerialize],
                    'array7' => ['object' => $objectToSerialize],
                    'array8' => ['object' => $objectToSerialize],
                    'array9' => ['object' => $objectToSerialize],
                    'array10' => ['object' => $objectToSerialize]
                ]
            );
        }

        return $return;
    }

    /** @return bool */
    public function isWriteToResponseBody()
    {
        return @$_GET['phpBenchmarksShowResults'] === '1';
    }
}
