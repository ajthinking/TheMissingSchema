# :wrench: ```the missing schema for Laravel``` :wrench:

## Installation

`composer require ajthinking/the-missing-schema`

## Usage

´´´
use TheMissingSchema\Schema;

Schema::save();
´´´

Now, you can see a file `schema.json` in your database folder. At the moment it does not do anything, and it does not affect your migrations whatsoever.


## Supported drivers
* sqlite
