<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 09/04/2020
 * Time: 09:14
 */



\Magento\Framework\Component\ComponentRegistrar::register(
        \Magento\Framework\Component\ComponentRegistrar::THEME,
        'frontend/Blank/theme',
        __DIR__
    );