<?php

/**
 * Class Tpl
 */
class Tpl
{
    /**
     * @var int
     */
    protected static $color = 1;

    /**
     * @var int
     */
    protected static $value_max = 0;

    /**
     * @param array $props
     * @param int $tamanho
     * @param int $qtde_scalas
     * @return string
     */
    public static function sample($props, $tamanho = 100, $qtde_scalas = 10)
    {
        static::setMaxValue($props);
        $graph = <<<S
                    <div style="background-color: #e1f5ff; width: $tamanho%"><br><table><tr>
S;
        $graph .= static::generateLabelValues($props);
        $graph .= '</tr><tr><td></td><td>';
        $graph .= static::generateScala($qtde_scalas);
        $graph .= '</td></tr></table></div>';

        return $graph;
    }

    /**
     * @param $qtde_scalas
     * @return string
     */
    protected static function generateScala($qtde_scalas)
    {
        $escala = '';
        $proporcao_acumulada = $proporcao = round(static::$value_max / $qtde_scalas);
        for ($i = 1; $i <= $qtde_scalas; $i++) {
            $escala .= static::_generateScala($proporcao, $proporcao_acumulada);
            $proporcao_acumulada += $proporcao;
        }
        return '<table style="width: 100%; margin-left: 8px;"><tr style="text-align: right;">' . $escala . '</tr></table>';
    }

    protected static function _generateScala($value, $proporcao_acumulada)
    {
        $width = static::getPercentage($value);
        return "<td style=\"width: $width%;\">$proporcao_acumulada</td>";
    }

    /**
     * @param number $value
     * @return int
     */
    protected static function getPercentage($value)
    {
        return round(round($value, 2) * 100 / round(static::$value_max, 2));
    }

    /**
     * @return string
     */
    protected static function color()
    {
        $color = static::$color;
        $colors = array(
            1 => 'primary',
            2 => 'warning',
            3 => 'success',
            4 => 'info',
            5 => 'danger',
        );
        static::$color = 5 == $color ? 1 : $color + 1;
        return $colors[static::$color];
    }


    /**
     * @param string $label
     * @return string
     */
    protected static function legend($label)
    {
        return "<div class=\"legend\">$label</div>";
    }

    /**
     * @param string $content
     * @return string
     */
    protected static function legends($content)
    {
        return "<td class=\"legends\">$content</td>";
    }

    /**
     * @param string $content
     * @return string
     */
    protected static function values($content)
    {
        return "<td class=\"values\">$content</td>";
    }

    /**
     * @param string $width
     * @param string $color
     * @param string $label
     * @return string
     */
    protected static function value($width, $color, $label)
    {
        return "<div style=\"width: $width%;\" class=\"value $color\">$label</div>";
    }

    /**
     * @param array $props
     */
    protected static function setMaxValue($props)
    {
        $arr_values = array();
        foreach ($props as $v) {
            $arr_values[] = $v[1];
        }
        static::$value_max = max($arr_values);
    }

    /**
     * @param $props
     * @return string
     */
    protected static function generateLabelValues($props)
    {
        $legend = '';
        $value = '';
        foreach ($props as $v) {
            $legend .= Tpl::legend($v[0]) . PHP_EOL;
            $value .= Tpl::value(static::getPercentage($v[1]), static::color(), $v[1]) . PHP_EOL;
        }
        return static::legends($legend) . static::values($value);
    }
}