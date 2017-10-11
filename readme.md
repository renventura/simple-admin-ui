# Simple Admin UI Library for WordPress

Abstraction classes for coding WordPress admin UIs. I put this together to build WordPress admin pages that utilized native admin features and appearances. This library allows developers to create native WordPress admin pages with a few nested arrays.

This works only to __create__ the admin pages. It does not (yet?) create/save settings, inputs, etc.

## Features ##

1. Create settings pages in the WordPress admin.
2. Create navigation tabs for those settings pages.
3. Add meta boxes to your admin pages, including to specific tabs.
4. Add help tabs to your admin pages.
5. Action hooks for inserting content where needed.

__NOTE__: This library does not support creating settings and inputs. It goes so far as to add meta boxes, but it will not populate those meta boxes. You will need to add the markup to your meta boxes to create the settings inputs, then process those settings when the user saves.

## Installation ##

Clone this repository to your project, then include the `loader.php` file. See class files for use examples.

## Contributing ##

If this library is helpful to you, and if you'd like to contribute to improving it, please feel free!

## Bugs ##

If you find an issue, let me know!

## Changelog ##

__1.0__

* Initial version