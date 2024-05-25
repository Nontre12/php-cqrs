# CQRS Library for PHP

## Overview

This library provides interfaces and base classes for implementing the Command Query Responsibility Segregation (CQRS) pattern in PHP. CQRS is a design pattern that separates read and write operations into different models to optimize performance, scalability, and security. This library is designed to simplify the implementation of CQRS in your PHP projects.

## Features

- **Command Handlers**: Interfaces and base classes to handle commands.
- **Query Handlers**: Interfaces and base classes to handle queries.
- **Event Sourcing Support**: Basic support for event sourcing.
- **Dependency Injection Ready**: Designed to work seamlessly with DI frameworks.
- **Extensible**: Easily extend the provided interfaces and base classes to fit your specific needs.

## Installation

You can install the library via Composer or by including the source code in your project.

### Composer

```sh
composer require nontre/cqrs
```

### Manual

Include the source code files in your project. Ensure you maintain the directory structure.

## Getting Started

To get started with this CQRS library, follow these steps:

1. **Define Commands and Queries**: Create classes for your commands and queries.
2. **Implement Handlers**: Implement command and query handlers using the provided interfaces.
3. **Register Handlers**: Register your handlers with your dependency injection framework.

## Acknowledgements

A significant portion of the source code for this library was extracted and adapted from the CodelyTV repository. We are grateful to CodelyTV for their excellent resources and contributions to the development community.
[🐘🎯 Hexagonal Architecture + DDD + CQRS in PHP using Symfony 6](https://github.com/CodelyTV/php-ddd-example)
