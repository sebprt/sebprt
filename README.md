# 👋 Hi there, I'm Sebastien Parrat

I am a french PHP developer and I'm currently working on @kiboko as a Back-End engineer.

<details>
  <summary>Click to understand the following code!</summary>

```php
<?php

$me = new Person('Sébastien', 'Parrat', 'France', 21);
$me->setEmail('sebastien.parrat@orange.fr');
$me->setLanguages([
        'PHP',
        'HTML',
        'CSS',
        'JavaScript'
]);
$me->setTools(
     [
        'MySQL',
        'Symfony',
        'React Native',
        'Git',
        'PhpStorm',
        'Docker'
    ]
);
$me->setHobbies(
    [
        'Sport',
        'Video Games'
    ]
);
$me->setSocialNetworks(
    [
        [
            'name' => 'LinkedIn',
            'link' => '2'
        ],
        [
            'name' => 'Twitter',
            'link' => '1'
        ]
    ]
);
```
</details>

## Languages & tools

```php
<?php

$languagesAndTools = array_merge($me->getLanguages(), $me->getTools());

foreach ($languagesAndTools as $item) {
    echo $item;
}
```

<div>
<img alt="PHP" src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white"/>
<img alt="HTML5" src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white"/>
<img alt="CSS3" src="https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white"/>
<img alt="JavaScript" src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E"/>
<img alt="MySQL" src="https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white"/>
<img alt="Bootstrap" src="https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white"/>
<img alt="React Native" src="https://img.shields.io/badge/react_native-%2320232a.svg?style=for-the-badge&logo=react&logoColor=%2361DAFB"/>
<img alt="PhpStorm" src="https://img.shields.io/badge/phpstorm-143?style=for-the-badge&logo=phpstorm&logoColor=black&color=black&labelColor=darkorchid"/>
</div>

## Hoobies

```php
<?php

foreach ($me->getHobbies() as $hobby) {
    echo $hobby;
}
```

- :soccer: Football
- :video_game: Video Games

## Keep in touch

```php
<?php

foreach ($me->getSocialNetworks() as $socialNetwork) {
    echo $socialNetwork["link"];
}
```

<div>
<img alt="LinkedIn" src="https://img.shields.io/badge/linkedin-%230077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white"/>
<img alt="Twitter" src="https://img.shields.io/badge/<handle>-%231DA1F2.svg?style=for-the-badge&logo=Twitter&logoColor=white"/>
</div>

![Sebprt's GitHub stats](https://github-readme-stats.vercel.app/api?username=sebprt)
