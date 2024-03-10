# pith-pack-jb-mono-nl
Pack the font Jetbrains Mono NL as a resource


-------

# About

This project packs the JetBrains Mono fonts so that they can be used with the Pith Framework on the front end.

For info on JetBrains Mono and JetBrains Mono NL see, see the font on the Jetbrains website at https://www.jetbrains.com/lp/mono/, and their Git repo at https://github.com/JetBrains/JetBrainsMono. You can also view the font on Google Fonts at https://fonts.google.com/specimen/JetBrains+Mono.

For info on Pith, see the Pith website at https://pith-framework.org/

# Install

Install to an existing Pith Framework project

Use Composer to install pack to the `vendor` folder.
```bash
php composer.phar require pith-front/pith-pack-jb-mono-nl
```

Add new route to your Route List:

```php
public array $routes = [
    // Other routes....
    // ...
    
    // Add route to call the font resources from
    ['route', 'GET', '/resources/vendor/library/jetbrains-mono-nl/{filepath:.+}', '\\PithFront\\PithPackJbMonoNl\\JbMonoNlResourceRoute'],
];
```

-------------


# Licensing Info

### JetBrains Mono font
- JetBrains Mono font 2.304 & JetBrains Mono NL font 2.304
- Copyright 2020 The JetBrains Mono Project Authors
- SIL OPEN FONT LICENSE Version 1.1 
- AUTHORS: JetBrains, Philipp Nurullin (philipp.nurullin@jetbrains.com),
- "JetBrains Mono typeface is available under the SIL Open Font License 1.1 license and can be used free of charge, for both commercial and non-commercial purposes. You do not need to give credit to JetBrains, although we will appreciate it very much if you do."

### pith-pack-jb-mono-nl
- pith-pack-jb-mono-nl (^ Uses the JetBrains Mono font from above)
- The MIT License (MIT)
- Copyright (c) 2024 Ian Maurmann
- Link: https://github.com/pith-front/pith-pack-jb-mono-nl

-------------

Thanks for stopping by!