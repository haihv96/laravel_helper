<?php

if (!function_exists('img_demo')) {

    /**
     * generate image url demo
     * @param int $width
     * @param int|null $height
     * @return string
     */
    function img_demo(int $width, int $height = null)
    {
        $height = !empty($height) ? 'x' . $height : '';
        return 'https://via.placeholder.com/' . $width . $height . '.png/f9f9f9/000?text=Kasikiru%20Image';
    }
}

if (!function_exists('br2nl')) {
    /**
     * use for <br> tag to \r\n
     * @param string $text
     * @return mixed
     */
    function br2nl(string $text)
    {
        return str_replace(['<br>', '<br/>'], "\r\n", $text);
    }
}
