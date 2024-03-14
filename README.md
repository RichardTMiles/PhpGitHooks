# PhpGitHooks
Standardizing my .githooks runtime



## Installation

```bash
composer require --dev richardtmiles/php-git-hooks
```


You'll need to add the following manually to your composer.json. `PhpGitHooks\\PhpGitHooks::install` can be run in any order. Learn more about [Composer scripts here](https://getcomposer.org/doc/articles/scripts.md).
```json
{
  "scripts": {
    "post-install-cmd": [
      "PhpGitHooks\\PhpGitHooks::install"
    ],
    "post-update-cmd": [
      "PhpGitHooks\\PhpGitHooks::install"
    ]
  },
}
```
