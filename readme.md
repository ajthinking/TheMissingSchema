# the missing schema file for Laravel :wrench:
Sometimes we just want to see/use a list of all models and their columns

## Installation

`composer require ajthinking/the-missing-schema`

## Usage

```
<?php

use TheMissingSchema\Schema;

Schema::save();
```

Now, you can see a file `schema.json` in your database folder. At the moment it does not do anything, and it does not affect your migrations whatsoever.

```
```

## Supported drivers
* sqlite
