<?php

require 'Person.php';

$me = new Person('Sébastien', 'Parrat', 'France', 21);
$me->setEmail('sebastien.parrat@orange.fr');
$me->setLanguages(
    [
        'PHP',
        'HTML',
        'CSS',
        'JavaScript',
    ]
);
$me->setTools(
    [
        'MySQL',
        'Symfony',
        'ReactNative',
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

?>

<table>
    <tbody>
        <tr>
<?php
$languagesAndTools = array_merge($me->getLanguages(), $me->getTools());

foreach ($languagesAndTools as $item) {
?>
            <td><?=$item ?></td>
<?php } ?>
        </tr>
    </tbody>
</table>

<ul>
    <?php

    foreach ($me->getHobbies() as $hobby) {
        ?>
        <li><?=$hobby ?></li>
    <?php } ?>
</ul>

<?php

foreach ($me->getSocialNetworks() as $socialNetwork) {
    echo $socialNetwork["link"];
}

?>