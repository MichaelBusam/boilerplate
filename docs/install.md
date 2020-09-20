[Home](index.md) | [Installation](install.md) | [Usage](usage.md) | [Config](config.md)  

# Installation

## Require it

```
composer require michaelbusam/boilerplate
```

## Include Service Provider 

```
'providers' => [
    ...
    MichaelBusam\Boilerplate\BoilerplateServiceProvider::class,
    ...
 ],
```

Register the Facade

```
'aliases' => [
    ...
    'Boilerplate' => MichaelBusam\Boilerplate\Facades\BoilerplateFacade::class,
    ...
];
```



