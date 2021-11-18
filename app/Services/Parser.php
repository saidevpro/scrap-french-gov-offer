<?php
namespace App\Services;


class Parser {
    /**
     * @param array $array
     * @param string $targets
     * @return
     */
    public function arrayRecursiveContentExtractor($array, $targets)
    {
        $targets = explode('|', $targets);

        foreach($targets as $target) {
            $target = explode('.', $target);
            if (!$target) return '';

            $value = array_reduce($target, function ($c, $t) use($target) {
                $k = is_numeric($t) ? (int) $t : $t;
                if (!isset($c[$k])) return null;

                return $c[$k];
            }, $array);

            if ($value) return $value;
        }
    }
    /**
     * @param array $data
     * @param array $data_map
     * @return array
     */
    public function extractDataFromArray(array $data, array $data_map)
    {
        $collection = [];
        foreach($data_map as $key => $target) {
            $collection[$key] = $this->arrayRecursiveContentExtractor($data, $target);
        }
        return $collection;
    }
}
