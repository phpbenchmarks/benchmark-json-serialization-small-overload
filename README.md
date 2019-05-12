<p align="center">
  <img src="http://www.phpbenchmarks.com/images/logo_github.png">
  <br>
  <a href="http://www.phpbenchmarks.com" target="_blank">www.phpbenchmarks.com</a>
</p>

## What is www.phpbenchmarks.com?

You will find lot of benchmarks for PHP frameworks and template engines.

You can compare results between Apache Bench and Siege, PHP 5.6 to 7.3 and versions of your favorites PHP code.

## What is this repository?

It's dependency for [small JSON serialization](http://www.phpbenchmarks.com/en/documentation/benchmark/json-serialization-small-overload) benchmark.

You can find how we benchmark it on [benchmarking protocol page](http://www.phpbenchmarks.com/en/documentation/benchmarking-protocol).

## Retrieve data to serialize

```php
use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\BenchmarkService;

BenchmarkService::getDataToSerialize();
```

## Validation of serialization

As serialization don't need to write anything to response body,
when we validate your serialization we add a parameter into query string
to indicate you need to write serialization result into response body.

```php
use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\BenchmarkService;

// Write serialized data to response body if isWriteToResponseBody() return true, to validate it.
if (BenchmarkService::isWriteToResponseBody()) {
    echo $serializer->serialize(BenchmarkService::getDataToSerialize());

// Only serialize data if isWriteToResponseBody() return false, to benchmark it.
} else {
    $serializer->serialize(BenchmarkService::getDataToSerialize());
}
```
