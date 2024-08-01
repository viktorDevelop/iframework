<?if(isset($arResult)):?>
<ul>
    <?foreach ($arResult as $item):?>
    <li>
        <a href=""> <?=$item['title']?> </a>
    </li>
    <?endforeach;?>
</ul>
<?php endif  ?>